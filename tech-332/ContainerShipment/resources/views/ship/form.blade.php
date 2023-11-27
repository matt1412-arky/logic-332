@extends('layout.apps')
@section('title', 'Master :: Ship-Form')
@section('content')
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Master :: Ship</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('home.create-ship') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Ship Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="ship_name" class="form-control" placeholder="Input Ship Name">
                                <input type="hidden" id="create_by" name="create_by" class="form-control">
                                {{-- <input type="hidden" id="update_by" name="update_by" class="form-control"> --}}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">GRT</label>
                            <div class="col-sm-9">
                                <input type="number" name="grt" class="form-control" placeholder="Input GRT">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">NRT</label>
                            <div class="col-sm-9">
                                <input type="number" name="nrt" class="form-control" placeholder="Input NRT">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">LOA</label>
                            <div class="col-sm-9">
                                <input type="number" name="loa" class="form-control" placeholder="Input LOA">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-file-input form-control" name="img">
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
        // $('#update_by').val(localStorage.getItem('id'))
    </script>
@endsection
