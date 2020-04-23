<?php

namespace Entity;

use Entity\User;

class Game
{
    public $id;
    public $name;
    public $picture;
    public $notice;
    public $creationDate;
    public User $user;
}
