<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Class UserRepositoryUiMediator
 * @package DesignPatterns\Behavioral\Mediator
 */
class UserRepositoryUiMediator implements Mediator
{
    private UserRepository $userRepository;

    private Ui $ui;

    public function __construct(UserRepository $userRepository, Ui $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user): void
    {
        $this->ui->outputUserInfo($user);
    }

    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}
