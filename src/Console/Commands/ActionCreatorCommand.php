<?php

namespace WindsonDias\Make\Console\Commands;

use Illuminate\Console\GeneratorCommand;

final class ActionCreatorCommand extends GeneratorCommand
{
    protected $signature = "make:action {name : The Action Name}";

    protected $description = "Create a new Action";

    protected $type = 'Action';

    protected function getNameInput(): string
    {
        return trim($this->argument('name')) . $this->type;
    }

    protected function getStub(): string
    {
        return __DIR__ . "/../../../stubs/action.stub";
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\Actions";
    }
}