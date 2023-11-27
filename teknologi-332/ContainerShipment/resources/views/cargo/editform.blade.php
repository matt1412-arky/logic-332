@extends('layouts.app')

@section('title', 'Cargo')
@section('page-title', 'Edit Data Cargo')
@section('content')

@foreach($cargo as $data)
<form action="/cargo/editSave/{{$data->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" size="5" maxlength="5" value="{{$data->id}}">
    <table class="table table-dark">
        <tr>
            <td>Berth Number</td>
                <td>
                    <input type="text" name="berth_no" size="5" maxlength="5" class="form-control" value="{{$data->berth_no}}">
                    <input type="hidden" id="create_by" name="create_by" class="form-control" value="{{$data->create_by}}">
                    <input type="hidden" id="update_by" name="update_by" class="form-control" >
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

<script>
    // digunakan untuk memanggil localstorage dengan javascript
    let user_id = localStorage.getItem('user_id');
    // document.getElementById('create_by').value = user_id;
    document.getElementById('update_by').value = user_id;
    
</script>


@endsection