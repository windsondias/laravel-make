<?php

namespace WindsonDias\Make;

use Illuminate\Support\ServiceProvider;
use WindsonDias\Make\Console\Commands\ActionCreatorCommand;

class ActionServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    ActionCreatorCommand::class,
                ],
            );
        }
    }
}