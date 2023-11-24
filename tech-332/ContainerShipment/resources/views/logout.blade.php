<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title>Logout</title>
    <link href='/support/vendor/sweetalert2/dist/sweetalert2.min.css' rel="stylesheet">
</head>

<body>
    <script src='/support/vendor/sweetalert2/dist/sweetalert2.min.js'></script>
    <script>
        Swal.fire({
            title: 'Are you sure you want to logout?',
            text: 'You will be logged out of the current session.',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Logout',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                localStorage.removeItem('id');
                localStorage.removeItem('name');
                localStorage.removeItem('email');
                localStorage.removeItem('role_id');
                window.location.href = 'http://127.0.0.1:9000';
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Logout Failed',
                    text: 'There was an error during logout. Please try again later.'
                }).then(function() {
                    window.location.href =
                        'http://127.0.0.1:9000/h/dashboard';
                })
            }
        });
    </script>
</body>

</html>
