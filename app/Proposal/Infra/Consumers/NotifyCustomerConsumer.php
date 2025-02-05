<?php

namespace App\Proposal\Infra\Consumers;

use App\Proposal\Domain\Contracts\ProposalRepository;
use App\Proposal\Domain\UseCase\MarkProposalCreated\InputData;
use App\Proposal\Domain\UseCase\MarkProposalCreated\MarkProposalCreated;
use App\Shared\Domain\Adapters\Contracts\MessageBroker;
use App\Shared\Domain\Adapters\MessageBroker\ConsumerBase;
use App\Shared\Domain\Adapters\MessageBroker\QueueMessage;
use App\Shared\Infra\Services\NotificationApi\NotificationApi;

class NotifyCustomerConsumer extends ConsumerBase
{
    private ProposalRepository $repo;
    private NotificationApi $service;
    private MessageBroker $queueSystem;

    public function construct(): void
    {
        $this->repo = app()->make(ProposalRepository::class);
        $this->service = app()->make(NotificationApi::class);
        $this->queueSystem = app()->make(MessageBroker::class);
    }

    public function handle(): void
    {
        $data = $this->messageBody;
        $proposal = $this->repo->findById($data['id']);

        if (!$this->service->checkHttpStatus()) {
            $this->queueSystem->publish(new QueueMessage(
                action: 'proposal-maded',
                data: $proposal->toArray(),
                options: [
                    "routingKey" => 'notify',
                    "exchangeName" => 'bankerize'
                ]
            ));
            return;
        }

    }
}
