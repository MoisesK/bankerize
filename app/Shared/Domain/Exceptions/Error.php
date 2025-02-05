<?php

namespace App\Shared\Domain\Exceptions;

interface Error
{
    public function details(): array;
    public function getName(): string;
}
