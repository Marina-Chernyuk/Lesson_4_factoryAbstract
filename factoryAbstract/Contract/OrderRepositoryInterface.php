<?php

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\Order;

/**
 * Interface OrderRepositoryInterface - интерфейс, описывающий как должен работать
 * репозиторий по управлению заказами. В данном интерфейсе определяем методы для работы с заказом.
 * Сохранять заказы будет тот класс, который будет этот
 * интерфейс реализовывать.
 * @package Contract
 */
interface OrderRepositoryInterface
{
    /**
     * @param Order $order
     * @return void
     */
    public function add(Order $order);

    /**
     * @param Order $order
     * @return void
     */
    public function delete(Order $order);

    /**
     * @param Order $order
     * @return void
     */
    public function update(Order $order);
}
