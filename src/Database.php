<?php

declare(strict_types=1);

namespace App;

use PDO;
use PDOException;

class Database extends PDO
{
    public function __construct(string $file)
    {
        $dns = 'sqlite:'.$file;

        try {

            parent::__construct($dns);

            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            throw new \RuntimeException('Connection failed: '.$e->getMessage());
        }
    }
}
