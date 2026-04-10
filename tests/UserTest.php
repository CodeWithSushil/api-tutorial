<?php

declare(strict_types=1);

namespace Tests;

use App\User;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(User::class)]
class UserTest extends TestCase
{
    #[Test]
    public function test_user_can_be_created(): void
    {
        $user = new User('John', 30);

        $this->assertSame('John', $user->getName());
        $this->assertSame(30, $user->getAge());
    }

    #[Test]
    public function test_setters_work(): void
    {
        $user = new User('Jane', 25);
        $user->setName('Alice');
        $user->setAge(35);

        $this->assertSame('Alice', $user->getName());
        $this->assertSame(35, $user->getAge());
    }
}
