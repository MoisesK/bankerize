<?php

namespace App\Shared\Infra\Services\NotificationApi;

interface NotificationApi
{
    public function checkHttpStatus(): bool;
}
