@extends('layouts.datatable.__index', ['daterange' => 'false', 'status' => 'false'])
@push('title', 'Table Relations')

@push('table-header')
<th> ID General </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'id_generals' },
{ data: 'name' },
{ data: 'description' },
@endpush
