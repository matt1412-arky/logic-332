@extends('layouts.app')

@section('title', 'Cargo')
@section('page-title', 'Delete Data Cargo')
@section('content')

@foreach($cargo as $data)
<form action="/cargo/delete" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-dark">
        <tr>
            <td>Berth Number</td>
                <td>
                    {{$data->cargo}}
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