@extends('layout.apps')
@section('title', 'Master :: Berth')
@section('content')
    <div class="col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Master :: Berth</h4>
                <div class="table-responsive mt-3">
                    <button type="button" class="btn light btn-success" style="float: right"
                        onclick="window.location.href='{{ route('home.form-berth') }}'">Add New</button><br>

                    <table class="table table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Berth Number</th>
                                <th>Length</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berth as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->berth_no }}</td>
                                    <td>{{ $data->length }}</td>
                                    <td>
                                        <a href="{{ route('home.edit-berth', $data->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('home.deleteForm-berth', $data->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($berth->isEmpty())
                                <tr>
                                    <td colspan="9" class="text-center">No matching records found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if ($berth->isEmpty())
                        <p class="small text-muted">Showing 0 to 0 of 0 results</p>
                    @elseif ($berth->total() == $berth->count())
                        <p class="small text-muted">Showing {{ $berth->firstItem() }} to {{ $berth->lastItem() }} of
                            {{ $berth->total() }} results</p>
                    @else
                        <!-- Paginasi -->
                        <div class="mt-3">
                            {{ $berth->links('pagination::bootstrap-5') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
