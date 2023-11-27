@extends('layouts.app')

@section('title', 'Ship')
@section('page-title', 'Form Data Ship')
@section('content')

<form action="/ship/create" method="post" enctype="multipart/form-data">
    @csrf
    <table class="table table-dark">
        <tr>
            <td>Ship Name</td>
                <td>
                    <input type="text" name="ship_name" class="form-control">
                </td>
        </tr>
        <tr>
            <td>GRT</td>
                <td>
                    <input type="number" name="grt" class="form-control"></td>
        </tr>
        <tr>
            <td>NRT</td>
                <td>
                    <input type="number" name="nrt" class="form-control"></td>
        </tr>
        <tr>
            <td>LOA</td>
                <td>
                    <input type="number" name="loa" class="form-control"></td>
        </tr>
        <tr>
            <td>Picture</td>
                <td>
                    <input type="file" name="image" class="form-control "></td>
        </tr>
        <tr>
            <td colspan="2"> 
                <button type="submit" class="btn btn-success">Save</button>
            </td>
        </tr>
    </table>
</form>

@endsection