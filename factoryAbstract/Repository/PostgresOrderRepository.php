<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

/**
 * В Class PostgresOrderRepository выполнена реализация репозитория заказов, который
 * работает с БД postgres.
 * @package Repository
 */
class PostgresOrderRepository extends BasePostgresRepository
    implements OrderRepositoryInterface
{
    /**
     * @param Order $order
     */
    public function add(Order $order)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Добавляем в postgres заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Удаляем в postgres заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Обновляем в postgres заказ $order.' . PHP_EOL;
    }
}
