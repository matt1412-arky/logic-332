<h3>Ship Report</h3>

<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Ship Name</th>
            <th>GRT</th>
            <th>NRT</th>
            <th>LOA</th>
            <th>Img</th>
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
                    <img src="support/photos/{{ $data->img }}" alt="img" height="80">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
