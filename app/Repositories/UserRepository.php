<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Support\Collection;


class UserRepository
{
    protected User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * List all users on Database
     *
     * @return Collection
     */
    public function list(): Collection {
        return User::orderBy('id')->get();
    }

    /**
     * Create a new user on Database
     *
     * @param array $attributes
     * @return User
     */
    public function create(array $attributes): User {
        return new User($attributes);
    }

    /**
     * Update a user with request data
     *
     * @param User $user
     * @param array $request
     * @return User
     */
    public function update(User $user, array $request): User {
        $records = [];

        if ($this->validateRecords($request, 'email')) {
            $records['email'] = $request['email'];
        }

        if ($this->validateRecords($request, 'lastName')) {
            $records['last_name'] = $request['lastName'];
        }

        if ($this->validateRecords($request, 'age')) {
            $records['age'] = $request['age'];
        }

        if ($this->validateRecords($request, 'gender')) {
            $records['gender'] = $request['gender'];
        }

        if ($this->validateRecords($request, 'name')) {
            $records['name'] = $request['name'];
        }

        if (count($records)) {
            $user->update($records);
        }

        return $user;
    }

    /**
     * Remove user on Database
     *
     * @param User $user
     * @return bool
     */
    public function remove(User $user): bool {
        return $user->delete();
    }

    /**
     * Validate properties from the request
     *
     * @param array $request
     * @param string $property
     * @return bool
     */
    private function validateRecords(array $request, string $property): bool {
        return in_array($property, array_keys($request));
    }
}