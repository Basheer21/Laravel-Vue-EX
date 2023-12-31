<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DrawMiddleFinger extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'draw:middlefinger';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Draws a middle finger';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $art = "
        .
……..…../´¯/)………… (\¯`\
…………/….//……….. …\\….\
………../….//………… ….\\….\
…../´¯/…./´¯\………../¯ `\….\¯`\
.././…/…./…./.|_……_| .\….\….\…\.\..
(.(….(….(…./.)..)..(..(. \….)….)….)… )
.\…………….\/…/….\. ..\/……………./
..\…………….. /……..\……………..…/
….\…………..(…………)……………./

        ";

        $this->info($art);
    }
}
