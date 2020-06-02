<?php

namespace Entity;

use Entity\User;
use ludk\Utils\Serializer;

class Game
{
    public int $id;
    public string $name;
    public string $picture;
    public string $comment;
    public string $creationDate;
    public User $user;
    use Serializer;
}
