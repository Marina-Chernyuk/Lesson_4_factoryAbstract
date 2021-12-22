<?php

namespace AbstractFactory\Contract;

/**
 * Interface RepositoryFactoryInterface - 
интерфейс абстрактной фабрики.
 * Эта фабрика может создавать репозитории.
 * Куда они будут сохранять свои данных, здесь не важно.
 * @package Contract
 */
interface RepositoryFactoryInterface
{
    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface;

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface;
}
