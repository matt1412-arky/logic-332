@extends('layout.apps')
@section('title', 'Master :: Berth-Form')
@section('content')
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Master :: Berth</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('home.create-berth') }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Berth Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="berth_no" size="5" maxlength="5" class="form-control"
                                    placeholder="Berth Number">
                                <input type="hidden" id="create_by" name="create_by" class="form-control">
                                <input type="hidden" id="update_by" name="update_by" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Length</label>
                            <div class="col-sm-9">
                                <input type="text" name="length" size="10" maxlength="10" class="form-control"
                                    placeholder="Length">
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
