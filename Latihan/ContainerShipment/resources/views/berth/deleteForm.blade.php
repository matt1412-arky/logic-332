@extends('layouts.app')
@section('page-title', 'Master::Berth')
@section('title', 'Master::Berth')
@section('content')

<br>
<br>
@foreach($berth as $data)
<form action="/berth/delete/{{$data->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-striped">
        <tr>
            <td>Berth Number</td>
            <td>{{$data->berth_no}}</td>
        </tr>
        <tr>
            <td>length</td>
            <td>{{$data->length}}</td>
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