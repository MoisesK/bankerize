<?php

namespace App\Proposal\Domain\Enum;

enum ProposalStatuses: int
{
    case PENDING = 1;
    case CREATED = 2;
}