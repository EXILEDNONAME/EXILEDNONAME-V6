<?php

namespace App\Models\Backend\System\Dummy\Table;

use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\System\Dummy\Table\General;

class Relation extends Model {

  protected $table = 'dummy_table_relations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function dummy_table_generals(){
    return $this->belongsTo(General::class, 'id_general');
  }

}
