@extends('layouts.app')
@section('page-title', 'Master::Berth')
@section('title', 'Master::Berth')
@section('content')

<br>
<br>

<form action="/berth/create" method="post">
    {{ csrf_field() }}
    <table class="table table-striped">
        <tr>
            <td>No</td>
            <td><input type="text" name="berth_no" size="5" maxlength="5" class="form-control"></td>
        </tr>
        <input type="hidden" name="create_by" id="create_by" class="form-control">
        <input type="hidden" name="update_by" id="update_by" class="form-control">
        <td>Length</td>
        <td><input type="text" name="length" size="10" maxlength="10" class="form-control"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </td>
        </tr>
    </table>
</form>

<script>
    // Use JavaScript to set values from localStorage
    document.getElementById('create_by').value = localStorage.getItem('user_id');
    document.getElementById('update_by').value = localStorage.getItem('user_id');
</script>

@endsection