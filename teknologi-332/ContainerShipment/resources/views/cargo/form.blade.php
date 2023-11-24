@extends('layouts.app')

@section('title', 'Cargo')
@section('page-title', 'Form Data Cargo')
@section('content')

<form action="/cargo/create" method="post">
    {{ csrf_field() }}
    <table class="table table-dark">
        <tr>
            <td>Cargo</td>
                <td>
                    <input type="text" name="cargo" size="5" maxlength="5" class="form-control">
                    <input type="hidden" id="create_by" name="create_by" class="form-control" >
                    <input type="hidden" id="update_by" name="update_by" class="form-control" >
                </td>
        </tr>
        <tr>
            <td>ConstMatl</td>
                <td>
                    <input type="text" name="constmatl" size="10" maxlength="10" class="form-control"></td>
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