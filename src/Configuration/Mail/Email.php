<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 7:35 AM
 */
declare(strict_types=1);

namespace App\Configuration\Mail;

use http\Exception\InvalidArgumentException;

final class Email
{
    private string $email;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);
        $this->email = $email;
    }

    public static function fromString(string $email) : self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    private function ensureIsValidEmail(string $email) : void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }


}
