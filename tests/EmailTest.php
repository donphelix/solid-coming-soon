<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 8:00 AM
 */
declare(strict_types=1);

use App\Configuration\Mail\Email;

final class EmailTest extends \PHPUnit\Framework\TestCase
{
    public function testCanBeCreatedFromValidEmailAddress() : void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
