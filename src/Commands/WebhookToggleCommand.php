<?php

namespace Luigel\Paymongo\Commands;

use Illuminate\Console\Command;

class WebhookToggleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paymongo:toggle-webhook {webhookId?*}
        {--enable: Enables the webhook.}
        {--disable: Disables the webhook.}
        {--a|all: Enable or disable all webhooks.}';

    /**
     * The console command description.
     *
     * @var string|null
     */
    protected $description = 'Toggles status of the webhook.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dd($this->argument('webhookId'));
    }
}
