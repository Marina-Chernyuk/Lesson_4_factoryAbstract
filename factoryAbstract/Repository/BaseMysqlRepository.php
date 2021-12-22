<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Mysql;

/**
 * Class BaseMysqlRepository - абстрактный класс для каждого репозитория,
 * который будет работать с БД Mysql. Здесь хранится соединение с БД.
 * @package Repository
 */
abstract class BaseMysqlRepository
{
    /**
     * @var Mysql
     */
    private Mysql $mysqlConnection;

    /**
     * BaseMysqlRepository constructor.
     * @param Mysql $mysqlConnection
     */
    public function __construct(Mysql $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    /**
     * @return Mysql
     */
    public function getMysqlConnection(): Mysql
    {
        return $this->mysqlConnection;
    }
}
