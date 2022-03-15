<?php

use App\Access;

function accesses() {
  $items = Access::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
