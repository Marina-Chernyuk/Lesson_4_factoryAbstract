<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Redis;

/**
 * Class BaseRedisRepository - абстрактный класс для каждого репозитория,
 * который будет работать с redis. 
 * @package Repository
 */
abstract class BaseRedisRepository
{
    /**
     * @var Redis
     */
    private Redis $redisConnection;

    /**
     * BaseRedisRepository constructor.
     * @param Redis $redisConnection
     */
    public function __construct(Redis $redisConnection)
    {
        $this->redisConnection = $redisConnection;
    }

    /**
     * @return Redis
     */
    public function getRedisConnection(): Redis
    {
        return $this->redisConnection;
    }
}
