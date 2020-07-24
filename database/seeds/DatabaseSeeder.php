<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Model\Linha::class,16)->create();
        
        factory(App\Model\Produto::class,200)->create();

    }
}
