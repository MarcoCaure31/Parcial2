<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::table('laptops')->insert([
               'marca' => 'Dell',
            'modelo' => 'XPS 13',
            'procesador' => 'Intel Core i7',
            'almacenamiento' => 512,
        ]);
    }
    
}
