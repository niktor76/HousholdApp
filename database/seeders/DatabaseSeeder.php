<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call('UsersTableSeeder');
        $this->call(SalutationSeeder::class);
        $this->call(FamilyMemberSeeder::class);
        $this->call(ShoppingListSeeder::class);
    }
}
