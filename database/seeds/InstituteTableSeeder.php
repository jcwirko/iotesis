<?php

use App\Institute;
use Illuminate\Database\Seeder;

class InstituteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institute::create([
            'name' => 'Dachary',
            'address' => 'Jaureche 5000',
            'phone' => 3764082329
        ]);
    }
}
