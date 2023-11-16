<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>Data Employees</h2>

        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Employee ID</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($employee as $emp)
                        <tr>
                            <td>{{ $emp->name }}</td>
                            <td>{{ $emp->employee_id}}</td>
                            <td>{{ $emp->position}}</td>
                        </tr>                      
                    @endforeach
            </tbody>
        </table>
    </body>
</html>