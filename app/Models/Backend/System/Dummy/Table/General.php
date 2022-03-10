<?php

namespace App\Models\Backend\System\Dummy\Table;

use Illuminate\Database\Eloquent\Model;

class General extends Model {

  protected $table = 'dummy_table_generals';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
