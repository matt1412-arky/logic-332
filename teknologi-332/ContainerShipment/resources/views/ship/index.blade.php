@extends('layouts.app')

@section('title', 'Ship')
@section('page-title', 'Data Ship')
@section('content')

<style>
    
</style>

<button onclick="javascript:window.open('/ship/form','_self')" class="btn btn-primary" style="float:right;">+ Tambah Data</button>
<button onclick="javascript:window.open('/ship/pdf','_self')" class="btn btn-primary" style="float:right;">Export to PDF</button>
    
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Ship Name</th>
            <th>GRT</th>
            <th>NRT</th>
            <th>LOA</th>
            <th>Picture</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ship as $data)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->ship_name}}</td>
            <td>{{$data->grt}}</td>
            <td>{{$data->nrt}}</td>
            <td>{{$data->loa}}</td>
            <td><img src ="/photos/{{$data->image}}" onclick="javascript:window.open('/photos/{{$data->image}}', '_blank')" height="80"></td>
        </tr>
        @endforeach
    </tbody>
</table>

<p>Page : {{ $ship->currentPage() }}. Showing : {{ $ship->perPage()}}. Total : {{ $ship->total()}}</p>


<p>
    <button class="btn btn-dark" onclick="javascript:window.open('{{ $ship->previousPageUrl()}}','_self')">Previous</button>
    <button class="btn btn-dark" onclick="javascript:window.open('{{ $ship->nextPageUrl()}}','_self')">Next</button>
</p>
@endsection