@extends('layouts.app')
@section('page-title', 'Master::Address')
@section('title', 'Master::Address')
@section('content')

<br>
<br>

<button class="btn btn-primary" style="float:right;" onclick="window.open('/address/form', '_self')">+</button>
<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>User Id</td>
            <td>Street</td>
            <td>Address</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($addresses as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->street}}</td>
            <td>{{$data->address}}</td>
            <td><button class="btn btn-warning" onclick="javascript:window.open('/address/editForm/{{$data->id}}','_self')"> Edit </button></td>
            <td><button class="btn btn-danger" onclick="javascript:window.open('/address/deleteForm/{{$data->id}}','_self')"> Delete </button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- 

<p>{{$addresses -> links()}}</p> -->
<div style="text-align: right;">
    <p>
        Page: {{ $addresses->currentPage() }},
        Showing: {{ $addresses->perPage() }},
        Total: {{ $addresses->total() }}
    </p><br>
    <button class="btn btn-danger" onclick="javascript:window.open('{{ $addresses->previousPageUrl() }}','_self')">Previous</button>
    <button class="btn btn-success" onclick="javascript:window.open('{{ $addresses->nextPageUrl() }}','_self')">Next</button>
</div>

@endsection