<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\System\Dummy\Table\General;

class TableSeeder extends Seeder {
  public function run() {
    for ($i = 1; $i <= 50; $i++) {
    $data = [
      [
        'name'          => 'Dummy General ' . $i,
        'created_at'    => Carbon::now(),
      ],
    ];

    General::insert($data);
  }
  }
}
