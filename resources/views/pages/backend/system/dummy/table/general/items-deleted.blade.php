@extends('layouts.datatable.__index', ['daterange' => 'false', 'status' => 'false'])
@push('title', 'Table Generals')

@push('table-header')
<th width="1" class="text-nowrap"> Deleted At </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'deleted_at', 'className': 'align-middle text-nowrap', 'width': '1', },
{ data: 'name' },
{ data: 'description' },
@endpush
