<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Container Shipment - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-gradient-primary">

        <div class="modal" id="register" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
              <div class="container">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group row">
                                                    <input type="text" class="form-control form-control-user" id="name"
                                                        placeholder="Full Name">
                                            </div>
                                            <div class="form-group row">
                                                <input type="email" class="form-control form-control-user" id="email"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="password" placeholder="Password">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="pass-confirm" placeholder="Repeat Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">    
                                                <select id="role_id" class="form-select">
                                                </select>
                                            </div>
                                            <a href="#simpan" type="submit" onclick="create()" class="btn btn-primary btn-user btn-block">
                                                Register Account
                                            </a>
                                        </form>
                                         <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="http://127.0.0.1:8000/">Already have an account? Login!</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        </div>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->                      
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SIGN IN</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="user_email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="user_password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="#login" onclick="cekLogin()" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#register" onclick="register()">Create an Account!</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>

<script>
    function register() {
        $('#register').modal('show');

        $.ajax ({
            url:'http://127.0.0.1:8000/api/role',
            type:'get',
            contentType:'application/json',
            success:function(role) {
                var str = "";
                for(i=0; i<role.length; i++) {
                    str += `<option value="${role[i].id}">${role[i].name}</option>`;
                }
                $('#role_id').html(str);
            }
        });
    }

    function simpan() {
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var pass_confirm = $('#pass-confirm').val();
        var role_id = $('#role_id').val();

        const userdata = {
            name:name,
            email:email,
            password:password,
            role_id:role_id,
            create_by:1
        }
        console.log(userdata);

        if(pass_confirm == password){
        $.ajax ({
            url:'http://127.0.0.1:8000/api/user',
            type:'post',
            dataType:'json',
            data:userdata,
            success:function(user) {
                    console.log(user);
                    location.replace('/index')
                },error:function(e) {
                console.log(e.responseText);
                }
            });
        } else {
            console.log('Password tidak ditemukan')
        }
            
    }

    function create() {
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var pass_confirm = $('#pass-confirm').val();
        var role_id = $('#role_id').val();

        const userdata = {
            name:name,
            email:email,
            password:password,
            role_id:role_id,
            create_by:1
        }
        console.log(userdata);

        if(pass_confirm == password){
        $.ajax ({
            url:'http://127.0.0.1:8000/api/create',
            type:'post',
            dataType:'json',
            data:userdata,
            success:function(user) {
                    console.log(user);
                    location.replace('/')
                },error:function(e) {
                console.log(e.responseText);
                }
            });
        } else {
            console.log('Password tidak ditemukan')
        }
            
    }

    function cekLogin() {
        var user_email = $('#user_email').val();
        var user_password = $('#user_password').val();

        const userData={
            email:user_email,
            password:user_password
        }


        $.ajax ({
            url:'http://127.0.0.1:8000/api/login',
            type:'post',
            dataType:'json',
            data:userData,
            success:function(user) {
                    console.log(user);
                    localStorage.setItem('user_id', user[0].id);
                    localStorage.setItem('user_name', user[0].name);
                    localStorage.setItem('user_password', user[0].password);
                    localStorage.setItem('role_id', user[0].role_id);
                    
                    location.replace('/index')
                },error:function(e) {
                console.log(e.responseText);
                }
            });
    }

</script>