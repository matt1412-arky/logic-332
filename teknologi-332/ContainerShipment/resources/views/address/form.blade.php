@extends('layouts.app')

@section('title', 'User Address')
@section('page-title', 'Form User Address')
@section('content')

<!-- <form action="/address/create" method="post">
    {{ csrf_field() }} -->
    <table width="100%" class="table table-dark">
        <tr>
            <td width = "50%">

                Name :    <input type="text" id="name" class="form-control"><br>
                Email :    <input type="text" id="email" class="form-control" ><br>
                Password:    <input type="password" id="password" class="form-control" ><br>
                Password Confirm:    <input type="password" id="pass-confirm" class="form-control" ><br>
                Role:    <select id="role_id"></select>
                </td>
                <td width = "50%">

                <table width = "100%">
                    <tr>
                        <td>Street1:    <input type="text" id="street1" class="form-control" ></td>
                    </tr>
                    <tr>
                        <td>Address1:    <input type="text" id="address1" class="form-control" ></td>
                    </tr>
                    <tr>
                        <td>Street2:    <input type="text" id="street2" class="form-control" ></td>
                    </tr>
                    <tr>
                        <td>Address2:    <input type="text" id="address2" class="form-control" ></td>
                    </tr>
                </table>
                    <tr>
                        <td colspan="2"> 
                            <button type="submit" class="btn btn-danger" onclick="simpan()">Save</button>
                        </td>
                    </tr>
        </tr>
    </table>
</form>

<script>
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

    function saveAddress(_data = {}, user_id ) {
        $.ajax ({
        url:'http://127.0.0.1:8000/api/useraddress/create/'+user_id,
        type:'post',
        dataType:'json',
        data:_data,
        success:function(useraddress) {
           console.log(useraddress);
        },
          error:function(e) {
        console.log(e.responseText);
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
            url:'http://127.0.0.1:8000/api/create',
            type:'post',
            dataType:'json',
            data:userdata,
            success:function(user) {
                    console.log(user);

                    const addressData1 = {
                        street  : $('#street1').val(),
                        address : $('#address1').val()
                    } 
                    saveAddress(addressData1, user.id);

                    const addressData2 = {
                        street  : $('#street2').val(),
                        address : $('#address2').val()
                    } 
                    saveAddress(addressData2, user.id);
                    
                },
                error:function(e) {
                    console.log(e.responseText);
                }
            });
        } else {
            console.log('Password tidak ditemukan')
        }
            
    }

</script>

@endsection