@extends('layouts.datatable.__index', ['page' => 'index', 'daterange' => 'false', 'status' => 'false'])
@push('title', 'Table Generals')

@push('table-header')
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'name' },
{ data: 'description' },
@endpush
