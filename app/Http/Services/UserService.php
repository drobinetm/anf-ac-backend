<?php


namespace App\Http\Services;


use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Collection;

class UserService
{
    protected UserRepository $userRepository;

    /**
     *  UserService's constructor
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * List all users
     *
     * @return Collection
     */
    public function list(): Collection {
        return $this->userRepository->list();
    }

    /**
     * Create a new user
     *
     * @param array $request
     * @return User|null
     */
    public function create(array $request): ?User {
        if (!count($request)) {
            return NULL;
        }

        return $this->userRepository->create($request);
    }

    /**
     * Update a user
     *
     * @param User $user
     * @param array $request
     * @return User|null
     */
    public function update(User $user, array $request): ?User {
        if (!count($request) || !isset($user)) {
            return NULL;
        }

        return $this->userRepository->update($user, $request);
    }

    /**
     * Remove a user
     *
     * @param User $user
     * @return bool
     */
    public function remove(User $user): bool {
        if (!isset($user)) {
            return false;
        }

        return  $this->userRepository->remove($user);
    }
}