<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>Data Mahasiswa</h2>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Employee ID</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->name }}</td>
                            <td>{{ $mhs->employee_id}}</td>
                            <td>{{ $emp->position}}</td>
                        </tr>                      
                    @endforeach
            </tbody>
        </table>
    </body>
</html>