<?php

use App\Access;
use Spatie\Activitylog\Models\Activity;
use App\Models\Backend\System\Dummy\Table\General;

function accesses() {
  $items = Access::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function dummy_table_generals() {
  $items = General::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function histories($model) {
  $items = Activity::where('subject_type', $model)->orderBy('created_at', 'desc')->get();
  return $items;
}
