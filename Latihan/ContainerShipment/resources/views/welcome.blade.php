<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="modal" id="register" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login-area">
                        <div class="container">
                            <div class="login-box ptb--10">
                                <form>
                                    <div class="login-form-head">
                                        <h4>Sign up</h4>
                                        <p>Hello there, Sign up and Join with Us</p>
                                    </div>
                                    <div class="login-form-body">
                                        <div class="form-gp">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name">
                                            <i class="ti-user"></i>
                                            <div class="text-danger"></div>
                                        </div>
                                        <div class="form-gp">
                                            <label for="email">Email address</label>
                                            <input type="email" id="email">
                                            <i class="ti-email"></i>
                                            <div class="text-danger"></div>
                                        </div>
                                        <div class="form-gp">
                                            <label for="password">Password</label>
                                            <input type="password" id="password">
                                            <i class="ti-lock"></i>
                                            <div class="text-danger"></div>
                                        </div>
                                        <div class="form-gp">
                                            <label for="pass-con">Password Confirm</label>
                                            <input type="password" id="pass-con">
                                            <i class="ti-lock"></i>
                                            <div class="text-danger"></div>
                                        </div>
                                        <div class="form-gp">
                                            <select id="role_id" class="form-control" aria-placeholder="Role">

                                            </select>
                                        </div>
                                        <div class="submit-btn-area">
                                            <button id="form_submit_register" onclick="simpan()">Submit <i class="ti-arrow-right"></i></button>
                                        </div>
                                        <div class="form-footer text-center mt-5">
                                            <p class="text-muted">Don't have an account? <a href="login.html">Sign in</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form>
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Hello there, Sign in and start managing your Admin Template</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Log in with <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="" onclick="register()">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

    <!-- bootstrap 4 js -->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/metisMenu.min.js"></script>
    <script src="/assets/js/jquery.slimscroll.min.js"></script>
    <script src="/assets/js/jquery.slicknav.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script>
        function register() {
            $('#register').modal('show');
        }

        $.ajax({
            url: 'http://127.0.0.1:8000/api/role',
            type: 'GET',
            contentType: 'application/json',
            success: function(role) {
                var str = "";
                for (var i = 0; i < role.length; i++) {
                    str += `<option value="${role[i].id}">${role[i].name}</option>`;
                }
                $('#role_id').html(str);
            }
        });

        function simpan() {
            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var password_confirm = $('#pass-con').val();
            var role_id = $('#role_id').val();

            const userdata = {
                name: name,
                email: email,
                password: password,
                role_id: role_id,
                create_by: 1
            }
            if (password_confirm == password) {
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/user',
                    type: 'post',
                    dataType: 'json',
                    data: userdata,
                    contentType: 'application/json',
                    success: function(user) {
                        console.log(user);
                        // location.replace('/');
                    },
                    error: function(e) {
                        console.log(e.responseText)
                    }
                });
            } else {
                console.log("password salah")
            }

        }
    </script>
</body>

</html>