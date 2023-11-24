@extends('layouts.app')

@section('title', 'Cargo')
@section('page-title', 'Data Cargo')
@section('content')

<style>
    
</style>

<button onclick="javascript:window.open('/cargo/form','_self')" class="btn btn-primary" style="float:right;">+</button>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Cargo</th>
            <th>ConstMatl</th>
            <th>Action</tH>
        </tr>
    </thead>
    <tbody>
        @foreach($cargo as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->cargo}}</td>
            <td>{{$data->constmatl}}</td>
            <td><button onclick="javascript:window.open('/cargo/editForm/{{$data->id}}','_self')" class="btn btn-warning">U</button>
            <button onclick="javascript:window.open('/cargo/deleteform/{{$data->id}}','_self')" class="btn btn-danger">X</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<p>Page : {{ $cargo->currentPage() }}. Showing : {{ $cargo->perPage()}}. Total : {{ $cargo->total()}}</p>


<p>
    <button class="btn btn-dark" onclick="javascript:window.open('{{$cargo->previousPageUrl()}}','_self')">Previous</button>
    <button class="btn btn-dark" onclick="javascript:window.open('{{ $cargo->nextPageUrl()}}','_self')">Next</button>
</p>

@endsection