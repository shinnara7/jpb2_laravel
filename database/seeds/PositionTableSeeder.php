<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $positions = ['admin', 'supervisor', 'developer', 'office staff'];
      foreach ($positions as $row) {
        Position::create(['name'=>$row]);
    }
}
}
