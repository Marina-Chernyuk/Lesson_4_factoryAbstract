<?php

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\User;

/**
 * Interface UserRepositoryInterface - интерфейс, который описывает как должен работать
 * репозиторий по управлению пользователями. Здесь нет информации о том, куда
 * будет сохранён пользователь, а только определены методы для работы с
 * пользователями.
 * Куда сохранять пользователей будет решать тот класс, который в последующем будет этот
 * интерфейс реализовывать.
 * @package Contract
 */
interface UserRepositoryInterface
{
    /**
     * @param User $user
     * @return void
     */
    public function add(User $user);

    /**
     * @param User $user
     * @return void
     */
    public function delete(User $user);

    /**
     * @param User $user
     * @return void
     */
    public function update(User $user);
}
