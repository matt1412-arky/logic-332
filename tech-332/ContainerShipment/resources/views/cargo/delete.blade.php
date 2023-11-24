@extends('layout.apps')
@section('title', 'Master :: Cargo-Delete')
@section('content')
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Delete Master :: Cargo</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @foreach ($cargo as $data)
                        <form action="{{ route('home.delete-cargo', $data->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Cargo</label>
                                <div class="col-sm-9">
                                    {{ $data->cargo }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Constmatl</label>
                                <div class="col-sm-9">
                                    {{ $data->constmatl }}
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
