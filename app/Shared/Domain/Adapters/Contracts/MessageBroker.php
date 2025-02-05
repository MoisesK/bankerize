<?php

namespace App\Shared\Domain\Adapters\Contracts;

use App\Shared\Domain\Adapters\MessageBroker\QueueMessage;
use Closure;

interface MessageBroker
{
    public function publish(QueueMessage $message): void;
    public function publishInBatch(array $messages): void;
    public function prepareChannel(string $queueName, string $exchangeName, ?string $routingKey = null): void;
    public function consume(Closure $messageReceiver): void;
    public function getChannel(): mixed;
    public function getRoutingKey(): mixed;
}
