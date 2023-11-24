@extends('layout.apps')
@section('title', 'Master :: Cargo')
@section('content')
    <div class="col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Master :: Cargo</h4>
                <div class="table-responsive mt-3">
                    <button type="button" class="btn light btn-success" style="float: right"
                        onclick="window.location.href='{{ route('home.form-cargo') }}'">Add New
                    </button><br>

                    <table class="table table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Cargo</th>
                                <th>Constmatl</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cargo as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->cargo }}</td>
                                    <td>{{ $data->constmatl }}</td>
                                    <td>
                                        <a href="{{ route('home.edit-cargo', $data->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('home.deleteForm-cargo', $data->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($cargo->isEmpty())
                                <tr>
                                    <td colspan="9" class="text-center">No matching records found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if ($cargo->isEmpty())
                        <p class="small text-muted">Showing 0 to 0 of 0 results</p>
                    @elseif ($cargo->total() == $cargo->count())
                        <p class="small text-muted">Showing {{ $cargo->firstItem() }} to {{ $cargo->lastItem() }} of
                            {{ $cargo->total() }} results</p>
                    @else
                        <!-- Paginasi -->
                        <div class="mt-3">
                            {{ $cargo->links('pagination::bootstrap-5') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
