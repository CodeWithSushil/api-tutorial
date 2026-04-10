<?php

declare(strict_types=1);

namespace App;

class User
{
    private string $name;

    private ?string $email = null;

    /**
     * @param  string  $name
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    /**
     * @param  string  $email
     */
    public function setEmail($email)
    {
        return $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Hello '.$this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return 'Email '.$this->email;
    }
}
