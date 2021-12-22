<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\PostgresUserRepository;
use AbstractFactory\Repository\PostgresOrderRepository;
use AbstractFactory\Db\Postgres;
use JetBrains\PhpStorm\Pure;

/**
 * Class PostgresRepositoryFactory - класс, реализующий интерфейс
 * абстрактной фабрики. Этот класс будет создавать репозитории, которые
 * работают с БД postgres.
 * @package Factory
 */
class PostgresRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Postgres
     */
    private Postgres $postgresConnection;

    /**
     * PostgresRepositoryFactory constructor.
     * @param Postgres $postgresConnection
     */
    public function __construct(Postgres $postgresConnection)
    {
        $this->postgresConnection = $postgresConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    #[Pure] public function createUserRepository(): UserRepositoryInterface
    {
        return new PostgresUserRepository($this->postgresConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    #[Pure] public function createOrderRepository(): OrderRepositoryInterface
    {
        return new PostgresOrderRepository($this->postgresConnection);
    }
}
