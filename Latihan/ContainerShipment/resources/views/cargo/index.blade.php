@extends('layouts.app')
@section('page-title', 'Master::Cargo')
@section('title', 'Master::Cargo')
@section('content')

<br>
<br>

<button class="btn btn-primary" style="float:right;" onclick="window.open('/cargo/form', '_self')">+</button>
<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Cargo</td>
            <td>Consmalt</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cargo as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->cargo}}</td>
            <td>{{$data->constmatl}}</td>
            <td><button class="btn btn-warning" onclick="javascript:window.open('/cargo/editForm/{{$data->id}}','_self')"> Edit </button></td>
            <td><button class="btn btn-danger" onclick="javascript:window.open('/cargo/deleteForm/{{$data->id}}','_self')"> Delete </button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- 

<p>{{$cargo -> links()}}</p> -->
<div style="text-align: right;">
    <p>
        Page: {{ $cargo->currentPage() }},
        Showing: {{ $cargo->perPage() }},
        Total: {{ $cargo->total() }}
    </p><br>
    <button class="btn btn-danger" onclick="javascript:window.open('{{ $cargo->previousPageUrl() }}','_self')">Previous</button>
    <button class="btn btn-success" onclick="javascript:window.open('{{ $cargo->nextPageUrl() }}','_self')">Next</button>
</div>

@endsection