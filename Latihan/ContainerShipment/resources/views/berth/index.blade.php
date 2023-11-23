@extends('layouts.app')
@section('page-title', 'Master::Berth')
@section('title', 'Master::Berth')
@section('content')

<br>
<br>

<button class="btn btn-primary" style="float:right;" onclick="window.open('/berth/form', '_self')">+</button>
<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Berth Number</td>
            <td>Length</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($berth as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->berth_no}}</td>
            <td>{{$data->length}}</td>
            <td><button class="btn btn-warning" onclick="javascript:window.open('/berth/editForm/{{$data->id}}','_self')"> Edit </button></td>
            <td><button class="btn btn-danger" onclick="javascript:window.open('/berth/deleteForm/{{$data->id}}','_self')"> Delete </button></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection