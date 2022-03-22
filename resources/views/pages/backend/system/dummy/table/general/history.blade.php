@extends('layouts.datatable.__history', ['daterange' => 'false', 'status' => 'false'])
@push('title', 'Table Generals History')

@push('table-header')
<th> Date </th>
<th> Description </th>
<th> Subject </th>
<th> ID </th>
@endpush

@push('table-body')
{ data: 'updated_at', 'className': 'align-middle', },
{
  data: 'description', orderable: true, 'className': 'align-middle',
  render: function ( data, type, row ) {
    if ( data == 'created' ) { return 'Item Created'; }
    else if ( data == 'updated' ) { return 'Item Updated'; }
    else if ( data == 'deleted' ) { return 'Item Deleted'; }
    else if ( data == 'restored' ) { return 'Item Restored'; }
    else { return ''; }
  }
},
{ data: 'subjects' },
{ data: 'causer_id' },
@endpush
