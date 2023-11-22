@extends('layout.apps')
@section('title', 'Dashboard')
@section('content')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $('#name').html(localStorage.getItem('name'))
    </script>
@endsection
