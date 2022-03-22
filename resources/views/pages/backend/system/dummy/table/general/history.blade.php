@extends('layouts.datatable.__history', ['daterange' => 'false', 'status' => 'false'])
@push('title', 'Table Generals History')

@push('table-header')
<th> Log Name </th>
<th> Description </th>
<th> ID </th>
@endpush

@push('table-body')
{ data: 'log_name' },
{ data: 'description' },
{ data: 'causer_id' },
@endpush
