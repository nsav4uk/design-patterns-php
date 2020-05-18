<?php declare(strict_types=1);

namespace DesignPatternsTest\Other\Repository;

use DesignPatterns\Other\Repository\Domain\Post;
use DesignPatterns\Other\Repository\Domain\PostId;
use DesignPatterns\Other\Repository\Domain\PostStatus;
use DesignPatterns\Other\Repository\InMemoryPersistence;
use DesignPatterns\Other\Repository\Domain\PostRepository;
use PHPUnit\Framework\TestCase;
use OutOfBoundsException;

/**
 * Class PostRepositoryTest
 * @package DesignPatternsTest\Other\Repository
 */
class PostRepositoryTest extends TestCase
{
    private PostRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new PostRepository(new InMemoryPersistence());
    }

    public function testCanGenerateId(): void
    {
        $this->assertEquals(1, $this->repository->generateId()->toInt());
    }

    public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist(): void
    {
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage('Post with id 42 does not exist');

        $this->repository->findById(PostId::fromInt(42));
    }

    public function testCanPersistPostDraft(): void
    {
        $postId = $this->repository->generateId();
        $post = Post::draft($postId, 'Repository Pattern', 'Design Patterns PHP');
        $this->repository->save($post);
        $this->repository->findById($postId);
        $this->assertEquals($postId, $this->repository->findById($postId)->getId());
        $this->assertEquals(PostStatus::STATE_DRAFT, $post->getStatus()->toString());
    }
}
