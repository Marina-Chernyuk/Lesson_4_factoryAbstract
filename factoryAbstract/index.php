<?php

namespace AbstractFactory;

use AbstractFactory\Factory\MysqlRepositoryFactory;
use AbstractFactory\Factory\OracleRepositoryFactory;
use AbstractFactory\Factory\PostgresRepositoryFactory;
use AbstractFactory\Factory\RedisRepositoryFactory;
use AbstractFactory\Db\Mysql;
use AbstractFactory\Db\Oracle;
use AbstractFactory\Db\Postgres;
use AbstractFactory\Db\Redis;
use AbstractFactory\Service\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

// Создаваться экземпляр класса будет фреймворком, через dependency
// injection, автоматом, используя DIC (dependency injection container).
// Здесь же мы создаем фабрики руками.
// Для работы нашего Service необходима фабрика, которая будет создавать
// репозитории, мы создаем эти фабрики руками. Service не будет знать откуда
// берутся данные, из какого хранилища.
// Хочу отметить, что более правильно в Service передавать сразу репозитории,
// а не фабрику, которая эти репозитории будет создавать. Используя DIC,
// можно было бы настроить DI так, что все репозитории создавались бы используя
// данную абстрактную фабрику, но этот момент упрощен.
// Хранилища у нас четыре, mysql, oracle, postgres и redis, четыре варианта использования:

// Если мы храним данные в базе данных.
// ------------------------------------
// Создаем фабрику, которая будет создавать репозитории
// использующие mysql.
$mysqlRepositoryFactory = new MysqlRepositoryFactory(new Mysql());
// Создаем сервис, который использует репозитории, передаем ему фабрику,
// чтоб сервис мог сам попросить фабрику создать нужные репозитории.
$serviceWithMysqlRepositories = new Service($mysqlRepositoryFactory);
// Выполняем действия
$serviceWithMysqlRepositories->addUser();
$serviceWithMysqlRepositories->addOrder();

// Если храним данные в базе данных.
// ------------------------------------
// Создаем фабрику, которая будет создавать репозитории
// использующие в работе oracle.
$oracleRepositoryFactory = new OracleRepositoryFactory(new Oracle());
// Создаем сервис, который использует репозитории, передаем ему фабрику,
// чтоб сервис мог сам попросить фабрику создать нужные репозитории.
$serviceWithOracleRepositories = new Service($oracleRepositoryFactory);
// Выполняем действия
$serviceWithOracleRepositories->addUser();
$serviceWithOracleRepositories->addOrder();

// Если храним данные в базе данных.
// ------------------------------------
// Создаем фабрику, которая будет создавать репозитории
// работающие используя postgres.
$postgresRepositoryFactory = new PostgresRepositoryFactory(new Postgres());
// Создаем сервис, который использует репозитории, передаем ему фабрику,
// чтоб сервис мог сам попросить фабрику создать нужные репозитории.
$serviceWithPostgresRepositories = new Service($postgresRepositoryFactory);
// Выполняем действия
$serviceWithPostgresRepositories->addUser();
$serviceWithPostgresRepositories->addOrder();

// Если храним данные в памяти.
// ------------------------------------
// Создаем фабрику, которая будет создавать репозитории,
// работающие используя redis.
$redisRepositoryFactory = new RedisRepositoryFactory(new Redis());
// Создаем сервис, который используем репозитории, передаем ему фабрику,
// чтоб сервис мог сам попросить фабрику создать нужные репозитории.
$serviceWithRedisRepositories = new Service($redisRepositoryFactory);
// Выполняем действия
$serviceWithRedisRepositories->addUser();
$serviceWithRedisRepositories->addOrder();
