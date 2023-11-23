@extends('layouts.app')

@section('title', 'Master::Berth')
@section('page-title', 'Master::Berth')
@section('content')

<form action="/berth/create" method="post">
    {{ csrf_field() }}
    <table class="table table-dark">
        <tr>
            <td>Berth Number</td>
                <td>
                    <input type="text" name="berth_no" size="5" maxlength="5" class="form-control">
                </td>
        </tr>
        <tr>
            <td>Length</td>
                <td>
                    <input type="text" name="length" size="10" maxlength="10" class="form-control"></td>
        </tr>
        <tr>
            <td colspan="2"> 
                <button type="submit" class="btn btn-success">Save</button>
            </td>
        </tr>
    </table>
</form>

@endsection