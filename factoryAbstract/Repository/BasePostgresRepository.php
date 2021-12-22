<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Postgres;

/**
 * Class BasePostgresRepository - абстрактный класс для каждого репозитория,
 * который будет работать с БД postgres.
 * @package Repository
 */
abstract class BasePostgresRepository
{
    /**
     * @var Postgres
     */
    private Postgres $postgresConnection;

    /**
     * BasePostgresRepository constructor.
     * @param Postgres $postgresConnection
     */
    public function __construct(Postgres $postgresConnection)
    {
        $this->postgresConnection = $postgresConnection;
    }

    /**
     * @return Postgres
     */
    public function getPostgresConnection(): Postgres
    {
        return $this->postgresConnection;
    }
}
