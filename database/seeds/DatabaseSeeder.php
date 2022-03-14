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
    // Default
    $this->call(Accesses::class);
    $this->call(Users::class);
  }
}
