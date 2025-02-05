<?php

namespace App\Proposal\Domain\Entity;

use App\Shared\Domain\EntityBase;
use App\Shared\Domain\ValueObject\Cpf;
use App\Shared\Domain\ValueObject\Email;
use DateTimeInterface;

/**
 * @property string $name
 * @property Cpf $cpf
 * @property DateTimeInterface $birthDate
 */
class Customer extends EntityBase
{
    public function __construct(
        protected string $name,
        protected string|Cpf $cpf, 
        protected DateTimeInterface $birthDate,
        protected string|Email $email
    ) {
        $this->email = new Email($email);
        $this->cpf = new Cpf($cpf);
    }
}