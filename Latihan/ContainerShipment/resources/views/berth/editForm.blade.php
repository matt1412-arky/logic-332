@extends('layouts.app')
@section('page-title', 'Master::Berth')
@section('title', 'Master::Berth')
@section('content')

<br>
<br>
@foreach($berth as $data)
<form action="/berth/editsave/{{$data->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-striped">
        <tr>
            <td>No</td>
            <td><input type="text" name="berth_no" size="5" maxlength="5" class="form-control" value="{{$data->berth_no}}"></td>
        </tr>
        <tr>
            <td>length</td>
            <td><input type="text" name="length" size="10" maxlength="10" class="form-control" value="{{$data->length}}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </td>
        </tr>
    </table>
</form>
@endforeach

@endsection