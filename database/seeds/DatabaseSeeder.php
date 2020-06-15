<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(AlvoSeeder::class);
        $this->call(IdeogramaSeeder::class);
        $this->call(AdjIdeogramaSeeder::class);

    }
}
