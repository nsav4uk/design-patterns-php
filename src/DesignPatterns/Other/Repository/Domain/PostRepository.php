<?php declare(strict_types=1);

namespace DesignPatterns\Other\Repository\Domain;

use OutOfBoundsException;

/**
 * Class PostRepository
 * @package DesignPatterns\Other\Repository\Domain
 */
class PostRepository
{
    private Persistence $persistence;

    public function __construct(Persistence $persistence)
    {
        $this->persistence = $persistence;
    }

    public function generateId(): PostId
    {
        return PostId::fromInt($this->persistence->generateId());
    }

    public function findById(PostId $id): Post
    {
        try {
            $arrayData = $this->persistence->retrieve($id->toInt());
        } catch (OutOfBoundsException $e) {
            throw new OutOfBoundsException(sprintf('Post with id %d does not exist', $id->toInt()));
        }

        return Post::fromState($arrayData);
    }

    public function save(Post $post): void
    {
        $this->persistence->persist([
            'id' => $post->getId()->toInt(),
            'statusId' => $post->getStatus()->toInt(),
            'text' => $post->getText(),
            'title' => $post->getTitle(),
        ]);
    }
}
