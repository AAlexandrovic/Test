<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\rndValue;

/////получение данных таблицы по id через консоль

class GetNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'value:get {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get rnd value';

    /**
     * Execute the console command.
     *
     * @return int
     */


    public function handle()
    {

     $id = $this->argument('id');

        $this->table(
            ['id', 'value','created'],
            rndValue::find([$id, 'value'])->toArray()
        );

        $this->info('The command was successful!');

    }
}


/// создание rnd числа в таблицу с помощью консоли

class PostValue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'value:post {user?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Post rnd value in table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $create_value = rndValue::create(['value' => mt_rand(1,100)]);
//

        $this->info('The command was successful!');
    }
}
