@extends('layout.apps')
@section('title', 'Master :: Berth-Delete')
@section('content')
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Delete Master :: Berth</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @foreach ($berth as $data)
                        <form action="{{ route('home.delete-berth', $data->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Berth Number : </label>
                                <div class="col-sm-9">
                                    {{ $data->berth_no }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Length : </label>
                                <div class="col-sm-9">
                                    {{ $data->length }}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
