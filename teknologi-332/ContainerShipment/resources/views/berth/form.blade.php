@extends('layouts.app')

@section('title', 'Berth')
@section('page-title', 'Form Isian Berth')
@section('content')

<form action="/berth/create" method="post">
    {{ csrf_field() }}
    <table class="table table-dark">
        <tr>
            <td>Berth Number</td>
                <td>
                    <input type="text" name="berth_no" size="5" maxlength="5" class="form-control">
                    <input type="hidden" id="create_by" name="create_by" class="form-control" >
                    <input type="hidden" id="update_by" name="update_by" class="form-control" >
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

<script>
    let user_id = localStorage.getItem('user_id');
    document.getElementById('create_by').value = user_id;
    document.getElementById('update_by').value = user_id;
</script>

@endsection