@extends('layouts.app')

@section('title', 'Berth')
@section('page-title', 'Data Berth')
@section('content')

<style>
    
</style>

<button onclick="javascript:window.open('/berth/form','_self')" class="btn btn-primary" style="float:right;">+</button>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Berth Number</th>
            <th>Length</th>
            <th>Action</tH>
        </tr>
    </thead>
    <tbody>
        @foreach($berth as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->berth_no}}</td>
            <td>{{$data->length}}</td>
            <td><button onclick="javascript:window.open('/berth/editForm/{{$data->id}}','_self')" class="btn btn-warning">U</button>
            <button onclick="javascript:window.open('/berth/deleteform/{{$data->id}}','_self')" class="btn btn-danger">X</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<p>Page : {{ $berth->currentPage() }}. Showing : {{ $berth->perPage()}}. Total : {{ $berth->total()}}</p>

<!-- {{ $berth->links() }} -->
<p>
    <button class="btn btn-dark" onclick="javascript:window.open('{{$berth->previousPageUrl()}}','_self')">Previous</button>
    <button class="btn btn-dark" onclick="javascript:window.open('{{ $berth->nextPageUrl()}}','_self')">Next</button>
</p>

@endsection