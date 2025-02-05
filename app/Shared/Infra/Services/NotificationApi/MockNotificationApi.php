<?php

namespace App\Shared\Infra\Services\NotificationApi;

use Illuminate\Support\Facades\Http;

class MockNotificationApi implements NotificationApi
{
    private string $baseUrl = 'https://util.devi.tools/api/v1/notify';

    public function checkHttpStatus(): bool
    {
        $response = Http::get($this->baseUrl)->json();

        if (isset($response['status']) && $response['status'] === 'success') {
            return true;
        }

        return false;
    }
}
