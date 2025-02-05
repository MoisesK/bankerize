<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

use App\Shared\Domain\ValueObjectBase;
use DomainException;

final class Email extends ValueObjectBase
{
    protected string $value = '';

    public function __construct(string $email)
    {
        $email = trim(strtolower($email));

        if (empty($email)) {
            return null;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return null;
        }

        $this->value = $email;
    }

    public function value(): string|int|float|bool
    {
        return $this->value;
    }
}
