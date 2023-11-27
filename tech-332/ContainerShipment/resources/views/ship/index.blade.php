@extends('layout.apps')
@section('title', 'Master :: Ship')
@section('content')
    <div class="col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Master :: Ship</h4>
                <div class="table-responsive mt-3">
                    <button type="button" class="btn light btn-success" style="float: right"
                        onclick="window.location.href='{{ route('home.form-ship') }}'">Add New</button>
                    <button type="button" class="btn light btn-primary" style="float: right"
                        onclick="window.location.href='{{ route('home.printpdf-ship') }}'">Print PDF</button><br>

                    <table class="table table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Ship Name</th>
                                <th>GRT</th>
                                <th>NRT</th>
                                <th>LOA</th>
                                <th>Img</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ship as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->ship_name }}</td>
                                    <td>{{ $data->grt }}</td>
                                    <td>{{ $data->nrt }}</td>
                                    <td>{{ $data->loa }}</td>
                                    <td>
                                        <img src="/support/photos/{{ $data->img }}" alt="img" height="80"
                                            onclick="window.open('/support/photos/{{ $data->img }}','_blank')">
                                    </td>
                                    <td>
                                        {{-- <a href="{{ route('home.edit-ship', $data->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('home.deleteForm-ship', $data->id) }}"
                                            class="btn btn-danger">Delete</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                            @if ($ship->isEmpty())
                                <tr>
                                    <td colspan="9" class="text-center">No matching records found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if ($ship->isEmpty())
                        <p class="small text-muted">Showing 0 to 0 of 0 results</p>
                    @elseif ($ship->total() == $ship->count())
                        <p class="small text-muted">Showing {{ $ship->firstItem() }} to {{ $ship->lastItem() }} of
                            {{ $ship->total() }} results</p>
                    @else
                        <!-- Paginasi -->
                        <div class="mt-3">
                            {{ $ship->links('pagination::bootstrap-5') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
