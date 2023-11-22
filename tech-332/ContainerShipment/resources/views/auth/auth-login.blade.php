    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="format-detection" content="telephone=no">
        <title>Login</title>
        {{-- <link href='/support/images/avatar/logo.jpeg' rel="support/shortcut icon" type="image/jpeg" /> --}}
        @include('layout.template.style-css')
        {{-- <link rel="stylesheet" href="{{ asset('support/css/style.css') }}"> --}}
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
                                        <h4 class="text-center mb-4">Sign in your account</h4>
                                        <div class="text-center mb-3">
                                            <a href="#" class="">
                                                <img src="{{ asset('support/images/user.png') }}" width="150"
                                                    height="">
                                            </a>
                                        </div>
                                        <div>
                                            {{-- Alerts (if needed) --}}
                                            <form class="form-valide-with-icon needs-validation" id="loginForm">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Email</strong></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fas fa-envelope"></i>
                                                        </span>
                                                        <input type="email" class="form-control"
                                                            placeholder="hello@example.com" required=""
                                                            id="email">
                                                    </div>
                                                    {{-- Validation message for email --}}
                                                </div>

                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Password</strong></label>
                                                    <div class="input-group transparent-append">
                                                        <span class="input-group-text"> <i class="fa fa-lock"></i>
                                                        </span>
                                                        <input type="password" class="form-control"
                                                            placeholder="password" required="" id="password">
                                                        {{-- Validation message for password --}}
                                                        {{-- Show/Hide password feature --}}
                                                    </div>
                                                </div>

                                                {{-- <div class="row d-flex justify-content-between mt-4 mb-2">
                                                    <div class="mb-3">
                                                        <div class="form-check custom-checkbox ms-1">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="basic_checkbox_1">
                                                            <label class="form-check-label"
                                                                for="basic_checkbox_1">Remember my
                                                                preference</label>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary btn-block">Sign Me
                                                        In</button>
                                                </div>
                                            </form>
                                            <div class="new-account mt-3">
                                                <p>Don't have an account? <a class="text-primary"
                                                        href="{{ route('auth.register') }}">Sign
                                                        up</a>
                                                </p>
                                            </div>
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
            $('#loginForm').submit(function(event) {
                event.preventDefault(); // Mencegah form dari submit secara default

                var email = $('#email').val();
                var password = $('#password').val();

                $.ajax({
                    url: 'http://127.0.0.1:9000/api/login',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(login) {
                        // console.log(login);
                        if (login && login.length > 0 && login[0].id) {
                            localStorage.setItem('id', login[0].id)
                            localStorage.setItem('name', login[0].name)
                            localStorage.setItem('email', login[0].email)
                            localStorage.setItem('role_id', login[0].role_id)

                            Swal.fire({
                                    type: 'success',
                                    title: 'Login Successful',
                                    text: 'You have successfully logged in!',
                                })
                                .then(function() {
                                    window.location.href =
                                        'http://127.0.0.1:9000/h/dashboard';
                                })
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Login Failed',
                                text: 'Invalid email or password. Please try again.',
                            })
                        }
                    },
                    error: function(error) {
                        Swal.fire({
                            type: 'error',
                            title: 'Login Failed',
                            text: 'There was an error during login. Please try again later.',
                        })
                    }
                })
            })
        })
    </script>
