@extends('layout.apps')
@section('title', 'Master :: Address-Form')
@section('content')
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Master :: Address</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form class="form-valide-with-icon needs-validation" id="addFormAddress" novalidate>
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Input your name" id="nama">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Street 1</label>
                                <input type="text" class="form-control" placeholder="Street 1" id="street1">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Address 1</label>
                                <input type="text" class="form-control" placeholder="Address 1" id="address1">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="password">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Street 2</label>
                                <input type="text" class="form-control" placeholder="Street 2" id="street2">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Password Confirmation</label>
                                <input type="password" class="form-control" placeholder="Password Confirmation"
                                    id="password-confirm">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Address 2</label>
                                <input type="text" class="form-control" placeholder="Address 2" id="address2">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Role</label>
                                <select id="role" class="default-select form-control wide" style="display: none;">
                                    <option selected="">Choose...</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save All</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
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
        })

        function saveAddress(_data = {}, user_id) {
            $.ajax({
                url: 'http://127.0.0.1:9000/api/useraddress/create/' + user_id,
                type: 'POST',
                dataType: 'json',
                data: _data,
                success: function(useraddress) {
                    console.log(useraddress);
                },
                error: function(e) {
                    console.log(e.responseText);
                }
            });
        }

        $('#addFormAddress').submit(function(event) {
            event.preventDefault();

            var name = $('#nama').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var password_confirm = $('#password-confirm').val();
            var role_id = $('#role').val();

            // console.log(name);
            // console.log(email);
            // console.log(password);
            // console.log(password_confirm);
            // console.log(role_id);

            if (password_confirm == password) {
                $.ajax({
                    url: 'http://127.0.0.1:9000/api/user',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        name: name,
                        email: email,
                        password: password,
                        password_confirmation: password_confirm,
                        role_id: role_id,
                        create_by: 1
                    },
                    success: function(user) {
                        console.log(user);

                        const user_id = user.id; // Assuming your API returns the user ID upon creation

                        const addressData1 = {
                            street: $('#street1').val(),
                            address: $('#address1').val()
                        };
                        saveAddress(addressData1, user_id);

                        const addressData2 = {
                            street: $('#street2').val(),
                            address: $('#address2').val()
                        };
                        saveAddress(addressData2, user_id);

                        Swal.fire({
                            type: 'success',
                            title: 'Success Add Data',
                            text: 'Data has been added successfully.',
                        }).then(function() {

                            window.location.href =
                                'http://127.0.0.1:9000/h/address';
                        })
                    },
                    error: function(e) {
                        console.log(e.responseText);
                    }
                })
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Failed Add Data',
                    text: 'Password confirmation does not match. Please make sure the passwords match.',
                });
            }
        })
    </script>
@endsection
