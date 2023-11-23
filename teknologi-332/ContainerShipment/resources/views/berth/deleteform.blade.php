@extends('layouts.app')

@section('title', 'Master::Berth')
@section('page-title', 'Master::Berth')
@section('content')

@foreach($berth as $data)
<form action="/berth/delete" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-dark">
        <tr>
            <td>Berth Number</td>
                <td>
                    {{$data->berth_no}}
                </td>
        </tr>
        <tr>
            <td>Length</td>
                <td>
                   {{$data->length}}
                </td>
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