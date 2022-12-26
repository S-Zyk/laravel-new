<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GuessCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Консольная игра "Угадай число"';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->ask('Угадай число от 1 до 100?');


        return Command::SUCCESS;
    }
}
