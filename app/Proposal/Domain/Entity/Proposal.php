<?php

namespace App\Proposal\Domain\Entity;

use App\Proposal\Domain\Enum\ProposalStatuses;
use App\Shared\Domain\EntityBase;

/**
 * @property string $number
 * @property Customer $customer
 * @property Payment $payment
 * @property ProposalStatuses $status
 */
class Proposal extends EntityBase
{
    public function __construct(
        protected Customer $customer, 
        protected Payment $payment, 
        protected int|null $id = null, 
        protected string $number = '',
        protected int|ProposalStatuses $status = ProposalStatuses::PENDING
    ) {
        if (!$id) {
            $this->number = 'P' . date('Y_m_d_H_i_s');
        }  

        if (is_int($status)) {
            $this->status = ProposalStatuses::tryFrom($status);
        }
    }

    public function markCreated(): void
    {
        $this->status = ProposalStatuses::CREATED;
    }
}