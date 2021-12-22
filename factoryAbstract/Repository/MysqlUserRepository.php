<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

/**
 * В Class MysqlUserRepository выполнена реализация репозитория пользователей, который
 * работает с БД Mysql.
 * @package Repository
 */
class MysqlUserRepository extends BaseMysqlRepository
    implements UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function add(User $user)
    {
        // Для коннекта к Mysql используется $this->getMysqlConnection().
        echo 'Добавляем в Mysql пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        // Для коннекта к Mysql используется $this->getMysqlConnection().
        echo 'Удаляем в Mysql пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function update(User $user)
    {
        // Для коннекта к Mysql используется $this->getMysqlConnection().
        echo 'Обновляем в Mysql пользователя $user.' . PHP_EOL;
    }
}
