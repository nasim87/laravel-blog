<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Portfolio::class,12)->create();

    }
}
