<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\OracleUserRepository;
use AbstractFactory\Repository\OracleOrderRepository;
use AbstractFactory\Db\Oracle;
use JetBrains\PhpStorm\Pure;

/**
 * Class OracleRepositoryFactory - класс, реализующий интерфейс
 * абстрактной фабрики. Этот класс будет создавать репозитории, которые
 * работают с БД Oracle.
 * @package Factory
 */
class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Oracle
     */
    private Oracle $oracleConnection;

    /**
     * OracleRepositoryFactory constructor.
     * @param Oracle $oracleConnection
     */
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    #[Pure] public function createUserRepository(): UserRepositoryInterface
    {
        return new OracleUserRepository($this->oracleConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    #[Pure] public function createOrderRepository(): OrderRepositoryInterface
    {
        return new OracleOrderRepository($this->oracleConnection);
    }
}
