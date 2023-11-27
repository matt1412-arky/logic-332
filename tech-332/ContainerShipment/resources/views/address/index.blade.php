@extends('layout.apps')
@section('title', 'Master :: Address')
@section('content')
    <div class="col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Master :: Address</h4>
                <div class="table-responsive mt-3">
                    <button type="button" class="btn light btn-success" style="float: right"
                        onclick="window.location.href='{{ route('home.form-address') }}'">Add New</button><br>

                    <table class="table table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>User Id</th>
                                <th>Street</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($addresses as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->user_id }}</td>
                                    <td>{{ $data->street }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>
                                        <a href="{{ route('home.edit-berth', $data->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('home.deleteForm-berth', $data->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($addresses->isEmpty())
                                <tr>
                                    <td colspan="9" class="text-center">No matching records found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if ($addresses->isEmpty())
                        <p class="small text-muted">Showing 0 to 0 of 0 results</p>
                    @elseif ($addresses->total() == $addresses->count())
                        <p class="small text-muted">Showing {{ $addresses->firstItem() }} to {{ $addresses->lastItem() }} of
                            {{ $addresses->total() }} results</p>
                    @else
                        <!-- Paginasi -->
                        <div class="mt-3">
                            {{ $address->links('pagination::bootstrap-5') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
