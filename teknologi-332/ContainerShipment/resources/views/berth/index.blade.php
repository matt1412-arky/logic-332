@extends('layouts.app')

@section('title', 'Master::Berth')
@section('page-title', 'Master::Berth')
@section('content')

<button onclick="javascript:window.open('/berth/form','_self')" class="btn btn-primary" style="float:right;">+</button>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Berth Number</th>
            <th>Length</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($berth as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->berth_no}}</td>
            <td>{{$data->length}}</td>
            <td><button onclick="javascript:window.open('/berth/editForm/{{$data->id}}','_self')" class="btn btn-warning">U</button></td>
            <td><button onclick="javascript:window.open('/berth/deleteform/{{$data->id}}','_self')" class="btn btn-danger">X</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection