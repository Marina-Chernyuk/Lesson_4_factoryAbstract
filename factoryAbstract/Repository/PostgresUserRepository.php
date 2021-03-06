<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

/**
 * В Class PostgresUserRepository выполнена реализация репозитория пользователей, который
 * работает с БД postgres.
 * @package Repository
 */
class PostgresUserRepository extends BasePostgresRepository
    implements UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function add(User $user)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Добавляем в postgres пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Удаляем в postgres пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function update(User $user)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Обновляем в postgres пользователя $user.' . PHP_EOL;
    }
}
