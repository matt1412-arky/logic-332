@extends('layouts.app')
@section('page-title', 'Master::Address')
@section('title', 'Master::Address')
@section('content')

<br>
<br>

<table width="100%" class="table table-primary table-striped">
    <tr>
        <td width="50%">
            Name : <input type="text" id="name" class="form-control"><br>
            Email : <input type="text" id="email" class="form-control"><br>
            Password : <input type="text" id="password" class="form-control"><br>
            Password-Confirm : <input type="text" id="pass-con" class="form-control"><br>
            Role : <select name="role_id" id="role_id"></select>
        </td>

        <td width="50%">
            <table>
                <tr>
                    <td>Street 1 : <input type="text" id="street1" class="form-control"> </td>
                </tr>
                <tr>
                    <td>Address 1 : <input type="text" id="address1" class="form-control"> </td>
                </tr>
                <tr>
                    <td>Street 2 : <input type="text" id="street2" class="form-control"> </td>
                </tr>
                <tr>
                    <td>Address 2 : <input type="text" id="address2" class="form-control"> </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2"><button class="btn btn-primary" onclick="simpan()">Save All</button></td>
    </tr>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/role',
            type: 'GET',
            contentType: 'application/json',
            success: function(roles) {
                var str = "";
                for (var i = 0; i < roles.length; i++) {
                    str += `<option value="${roles[i].id}">${roles[i].name}</option>`;
                }
                $('#role_id').html(str);
            }
        });
    });

    function saveAddress(_data = {}, user_id) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/useraddress/create/' + user_id,
            type: 'post',
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
            password_confirm: password_confirm,
            role_id: role_id,
            create_by: 1
        };

        if (password_confirm == password) {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/user',
                type: 'post',
                dataType: 'json',
                data: userdata,
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
                },
                error: function(e) {
                    console.log(e.responseText);
                }
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Password Anda Tidak sama",
            });
        }
    }
</script>

@endsection