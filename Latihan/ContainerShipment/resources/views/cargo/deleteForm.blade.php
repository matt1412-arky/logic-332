@extends('layouts.app')
@section('page-title', 'Master::cargo')
@section('title', 'Master::cargo')
@section('content')

<br>
<br>
@foreach($cargo as $data)
<form action="/cargo/delete/{{$data->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-striped">
        <tr>
            <td>Cargo</td>
            <td>{{$data->cargo}}</td>
        </tr>
        <tr>
            <td>constmatl</td>
            <td>{{$data->constmatl}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
    </table>
</form>
@endforeach

@endsection