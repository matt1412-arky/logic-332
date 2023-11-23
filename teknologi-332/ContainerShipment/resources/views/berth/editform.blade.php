@extends('layouts.app')

@section('title', 'Master::Berth')
@section('page-title', 'Master::Berth')
@section('content')

@foreach($berth as $data)
<form action="/berth/editSave/{{$data->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-dark">
        <tr>
            <td>Berth Number</td>
                <td>
                    <input type="text" name="berth_no" size="5" maxlength="5" class="form-control" value="{{$data->berth_no}}">
                </td>
        </tr>
        <tr>
            <td>Length</td>
                <td>
                    <input type="text" name="length" size="10" maxlength="10" class="form-control" value="{{$data->length}}"></td>
        </tr>
        <tr>
            <td colspan="2"> 
                <button type="submit" class="btn btn-success">Save</button>
            </td>
        </tr>
    </table>
</form>

@endforeach
@endsection