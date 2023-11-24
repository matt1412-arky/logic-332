@extends('layouts.app')
@section('page-title', 'Master::cargo')
@section('title', 'Master::cargo')
@section('content')

<br>
<br>
@foreach($cargo as $data)
<form action="/cargo/editsave/{{$data->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-striped">
        <tr>
            <td>Cargo</td>
            <td><input type="text" name="cargo" size="5" maxlength="5" class="form-control" value="{{$data->cargo}}"></td>
        </tr>
        <input type="hidden" name="create_by" id="create_by" class="form-control" value="{{$data->create_by}}">
        <input type="hidden" name="update_by" id="update_by" class="form-control">
        <tr>
            <td>Constmatl</td>
            <td><input type="text" name="constmatl" size="10" maxlength="10" class="form-control" value="{{$data->constmatl}}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </td>
        </tr>
    </table>
</form>
@endforeach

<script>
    // Use JavaScript to set values from localStorage
    // document.getElementById('create_by').value = localStorage.getItem('user_id');
    document.getElementById('update_by').value = localStorage.getItem('user_id');
</script>

@endsection