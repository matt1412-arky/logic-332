@extends('layouts.app')

@section('title', 'User Address')
@section('page-title', 'Tabel User Address')
@section('content')

<style>
    
</style>

<button onclick="javascript:window.open('/address/form','_self')" class="btn btn-primary" style="float:right;">+</button>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>User ID</th>
            <th>Street</th>
            <th>Address</tH>
        </tr>
    </thead>
    <tbody>
        @foreach($address as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->street}}</td>
            <td>{{$data->address}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<p>Page : {{ $address->currentPage() }}. Showing : {{ $address->perPage()}}. Total : {{ $address->total()}}</p>


<p>
    <button class="btn btn-dark" onclick="javascript:window.open('{{$address->previousPageUrl()}}','_self')">Previous</button>
    <button class="btn btn-dark" onclick="javascript:window.open('{{ $address->nextPageUrl()}}','_self')">Next</button>
</p>

<script>
    function register() {
        $('#register').modal('show');

        $.ajax ({
            url:'http://127.0.0.1:8000/api/role',
            type:'get',
            contentType:'application/json',
            success:function(role) {
                var str = "";
                for(i=0; i<role.length; i++) {
                    str += `<option value="${role[i].id}">${role[i].name}</option>`;
                }
                $('#role_id').html(str);
            }
        });
    }
</script>

@endsection