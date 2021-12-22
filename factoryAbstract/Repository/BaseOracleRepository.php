<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Oracle;

/**
 * Class BaseOracleRepository - абстрактный класс для каждого репозитория,
 * который будет работать с БД Oracle. Здесь хранится соединение с БД.
 * @package Repository
 */
abstract class BaseOracleRepository
{
    /**
     * @var Oracle
     */
    private Oracle $oracleConnection;

    /**
     * BaseOracleRepository constructor.
     * @param Oracle $oracleConnection
     */
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return Oracle
     */
    public function getOracleConnection(): Oracle
    {
        return $this->oracleConnection;
    }
}
