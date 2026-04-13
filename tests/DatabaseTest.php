<?php

declare(strict_types=1);

namespace Tests;

use App\Database;
use PDO;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Database::class)]
class DatabaseTest extends TestCase
{
    #[Test]
    public function test_create_database(): void
    {
        $db = new Database('Database.db');
        $this->assertInstanceOf(PDO::class, $db);
    }

    public function test_database_exception()
    {
        $this->expectException(\RuntimeException::class);
        new Database('/invalid/path/to/db.sqlite');
    }
}
