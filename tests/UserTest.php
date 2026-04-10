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
    public function test_user_name(): void
    {
        $user = new User;
        $user->setName('John');
        $this->assertSame('John', $user->getName());
    }

    #[Test]
    public function test_user_email(): void
    {
        $user = new User;

        $user->setEmail('alice@example.com');

        $this->assertSame('alice@example.com', $user->getEmail());
    }
}
