<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <link href='/support/images/avatar/logo.jpeg' rel="support/shortcut icon" type="image/jpeg" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('support/css/style.css') }}">
    <link href='/support/vendor/sweetalert2/dist/sweetalert2.min.css' rel="stylesheet">

</head>

<body>
    <div class="authincation h-100">
        <div class="container h-100 my-auto">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <div class="text-center mb-3">
                                        <a href="#" class="">
                                            <img src="{{ asset('support/images/user.png') }}" width="200"
                                                height="" alt="logo">
                                        </a>
                                    </div>
                                    <div>
                                        {{-- Validation Messages --}}
                                        <form class="form-valide-with-icon needs-validation" id="registerForm"
                                            novalidate>
                                            <div class="mb-3">
                                                <label class="mb-1"><strong><span
                                                            class="text-danger">*</span>Name</strong></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Input your name" required="">
                                                </div>
                                                {{-- Validation message for name --}}
                                            </div>

                                            <div class="mb-3">
                                                <label class="mb-1"><strong><span
                                                            class="text-danger">*</span>Email</strong></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-envelope"></i></span>
                                                    <input type="email" class="form-control" id="email"
                                                        placeholder="hello@example.com" required="">
                                                </div>
                                                {{-- Validation message for email --}}
                                            </div>

                                            <div class="mb-3">
                                                <label class="mb-1"><strong><span
                                                            class="text-danger">*</span>Password</strong></label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="password" required="">
                                                </div>
                                                {{-- Validation message for password --}}
                                            </div>

                                            <div class="mb-3">
                                                <label class="mb-1"><strong><span class="text-danger">*</span>Password
                                                        Confirmation</strong></label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                    <input type="password" class="form-control" id="password-confirm"
                                                        placeholder="password" required="">
                                                </div>
                                                {{-- Validation message for password confirmation --}}
                                            </div>

                                            <div class="mb-3">
                                                <label class="mb-1"><strong><span
                                                            class="text-danger">*</span>Role</strong></label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"><i class="fas fa-user-tie"></i>
                                                    </span>
                                                    <select id="role" class="form-control">
                                                        <option value="">Select Role</option>
                                                        {{-- Options for role --}}
                                                    </select>
                                                </div>
                                                {{-- Validation message for role --}}
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Sign
                                                    Up</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src='/support/vendor/sweetalert2/dist/sweetalert2.min.js'></script>

<script>
    $(document).ready(function() {
        // Ketika halaman dimuat, ambil data dari URL dan tambahkan ke dalam dropdown
        $.ajax({
            url: 'http://127.0.0.1:9000/api/role',
            type: 'GET',
            contentType: 'application/json',
            success: function(role) {
                var str = '';
                for (var i = 0; i < role.length; i++) {
                    str += `<option value="${role[i].id}">${role[i].name}</option>`;
                }
                $('#role').append(str); // Tambahkan opsi ke dalam dropdown dengan id 'role'
            },
            error: function(e) {
                console.log(e.responseText);
            }
        });

        // Fungsi simpan untuk mengirim data ke API saat tombol "Sign Up" ditekan
        $('#registerForm').submit(function(event) {
            event.preventDefault(); // Mencegah form dari submit secara default

            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var pass_confirm = $('#password-confirm').val();
            var role = $('#role').val();

            if (pass_confirm == password) {
                $.ajax({
                    url: 'http://127.0.0.1:9000/api/user',
                    type: 'POST',
                    data: {
                        name: name,
                        email: email,
                        password: password,
                        pass_confirm: pass_confirm,
                        role_id: role,
                        create_by: 1
                    },
                    success: function(user) {
                        // console.log(user);
                        Swal.fire({
                            type: 'success',
                            title: 'Registration Successful',
                            text: 'You have successfully registered!',
                        }).then(function() {
                            window.location.href =
                                'http://127.0.0.1:9000/auth/login';
                        });
                    },
                    error: function(e) {
                        Swal.fire({
                            type: 'error',
                            title: 'Registration Failed',
                            text: 'There was an error during registration. Please try again later.',
                        });
                    }
                });
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Registration Failed',
                    text: 'Password confirmation does not match. Please make sure the passwords match.',
                });
            }
        });
    });
</script>
