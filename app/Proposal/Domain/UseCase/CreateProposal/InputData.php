<?php

namespace App\Proposal\Domain\UseCase\CreateProposal;

use App\Proposal\Domain\Entity\Proposal;


class InputData
{
    public function __construct(
        public Proposal $proposal
    ) {
    }
}