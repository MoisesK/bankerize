<?php

namespace App\Providers;

use App\Proposal\Domain\Contracts\ProposalRepository;
use App\Proposal\Infra\Repository\ProposalEloquentRepository;
use App\Shared\Domain\Adapters\Contracts\LogSystem;
use App\Shared\Domain\Adapters\Contracts\MessageBroker;
use App\Shared\Domain\Adapters\MessageBroker\RabbitMqAdapter;
use App\Shared\Infra\Adapters\LogSystem\LaravelLog;
use App\Shared\Infra\Services\ProposalApi\MockProposalApi;
use App\Shared\Infra\Services\ProposalApi\ProposalApi;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repository
        $this->app->singleton(ProposalRepository::class, ProposalEloquentRepository::class);

        // Adapters
        $this->app->singleton(MessageBroker::class, RabbitMqAdapter::class);
        $this->app->singleton(LogSystem::class, LaravelLog::class);

        // Apis
        $this->app->singleton(ProposalApi::class, MockProposalApi::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
