<?php

use Database\Seeders\DiseaseSeed;
use Database\Seeders\QuestionSeed;
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
        $this->call(PermissionSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(QuestionSeed::class);
        $this->call(DiseaseSeed::class);
    }
}
