<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

/**
 * В Class OracleOrderRepository выполнена реализация репозитория заказов, который
 * работает с БД Oracle.
 * @package Repository
 */
class OracleOrderRepository extends BaseOracleRepository
    implements OrderRepositoryInterface
{
    /**
     * @param Order $order
     */
    public function add(Order $order)
    {
        // Для коннекта к Oracle используется $this->getOracleConnection().
        echo 'Добавляем в Oracle заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        // Для коннекта к Oracle используется $this->getOracleConnection().
        echo 'Удаляем в Oracle заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // Для коннекта к Oracle используется $this->getOracleConnection().
        echo 'Обновляем в Oracle заказ $order.' . PHP_EOL;
    }
}
