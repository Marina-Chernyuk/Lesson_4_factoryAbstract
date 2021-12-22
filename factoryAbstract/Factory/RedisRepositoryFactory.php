<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\RedisUserRepository;
use AbstractFactory\Repository\RedisOrderRepository;
use AbstractFactory\Db\Redis;
use JetBrains\PhpStorm\Pure;

/**
 * Class RedisRepositoryFactory - класс, реализующий интерфейс
 * абстрактной фабрики. Этот класс будет создавать репозитории, которые
 * работают с БД redis.
 * @package Factory
 */
class RedisRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Redis
     */
    private Redis $redisConnection;

    /**
     * RedisRepositoryFactory constructor.
     * @param Redis $postgresConnection
     */
    public function __construct(Redis $postgresConnection)
    {
        $this->redisConnection = $postgresConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    #[Pure] public function createUserRepository(): UserRepositoryInterface
    {
        return new RedisUserRepository($this->redisConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    #[Pure] public function createOrderRepository(): OrderRepositoryInterface
    {
        return new RedisOrderRepository($this->redisConnection);
    }
}
