@extends('layout.apps')
@section('title', 'Master :: Cargo-Form')
@section('content')
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Master :: Cargo</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('home.create-cargo') }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Cargo</label>
                            <div class="col-sm-9">
                                <input type="text" name="cargo" size="50" maxlength="50" class="form-control"
                                    placeholder="Cargo">
                                <input type="hidden" id="create_by" name="create_by" class="form-control">
                                <input type="hidden" id="update_by" name="update_by" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Constmatl</label>
                            <div class="col-sm-9">
                                <input type="text" name="constmatl" size="10" maxlength="10" class="form-control"
                                    placeholder="Constmatl">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#create_by').val(localStorage.getItem('id'))
        $('#update_by').val(localStorage.getItem('id'))
    </script>
@endsection
