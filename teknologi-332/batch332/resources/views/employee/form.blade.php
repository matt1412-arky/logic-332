<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        
    <form action="simpan" method="post">
        {{ csrf_field()}}
        Name : <input type="text" name="name"><br>
        Employee ID : <input type="text" name="employee_id"><br>
        Position : <input type="text" name="position"><br>
        <input type="submit" value="Save">
    </form>

    </body>
</html>