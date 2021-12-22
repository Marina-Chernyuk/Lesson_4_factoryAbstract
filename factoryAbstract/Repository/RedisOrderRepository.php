<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

/**
 * В Class RedisOrderRepository выполнена реализация репозитория заказов, который
 * работает с redis.
 * @package Repository
 */
class RedisOrderRepository extends BaseRedisRepository
    implements OrderRepositoryInterface
{
    /**
     * @param Order $order
     */
    public function add(Order $order)
    {
        // Для коннекта к redis используется $this->getRedisConnection().
        echo 'Добавляем в redis заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        // Для коннекта к redis используется $this->getRedisConnection().
        echo 'Удаляем в redis заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // Для коннекта к redis используется $this->getRedisConnection().
        echo 'Обновляем в redis заказ $order.' . PHP_EOL;
    }
}
