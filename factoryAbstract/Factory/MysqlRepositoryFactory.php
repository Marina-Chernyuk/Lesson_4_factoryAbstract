<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\MysqlUserRepository;
use AbstractFactory\Repository\MysqlOrderRepository;
use AbstractFactory\Db\Mysql;
use JetBrains\PhpStorm\Pure;

/**
 * Class MysqlRepositoryFactory - класс, реализующий интерфейс
 * абстрактной фабрики. Этот класс будет создавать репозитории, которые
 * работают с БД Mysql.
 * @package Factory
 */
class MysqlRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Mysql
     */
    private Mysql $mysqlConnection;

    /**
     * MysqlRepositoryFactory constructor.
     * @param Mysql $mysqlConnection
     */
    public function __construct(Mysql $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    #[Pure] public function createUserRepository(): UserRepositoryInterface
    {
        return new MysqlUserRepository($this->mysqlConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    #[Pure] public function createOrderRepository(): OrderRepositoryInterface
    {
        return new MysqlOrderRepository($this->mysqlConnection);
    }
}
