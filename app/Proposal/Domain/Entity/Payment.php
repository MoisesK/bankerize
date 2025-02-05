<?php

namespace App\Proposal\Domain\Entity;

use App\Shared\Domain\EntityBase;

/**
 * @property string $amount
 * @property string $pixKey
 */
class Payment extends EntityBase
{
    public function __construct(
        protected string $amount, 
        protected string $pixKey
    ) {
    }
}