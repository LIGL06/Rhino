<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\CardStatusMail;
use Illuminate\Console\Command;

class CardStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cards:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command evaluates the status of all the cards and send an email to owner in order to renew the card.';

     /**
     * The drip e-mail service.
     *
     * @var CardStatusMail
     */
     protected $drip;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CardStatusMail $drip)
    {
        parent::__construct();
        $this->drip = $drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->drip->send(User::find($this->argument('user')));
    }
}
