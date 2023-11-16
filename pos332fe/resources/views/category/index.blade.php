@extends('layouts.app')

@section('content')

<h3>
    Category Page
    <button class="btn btn-success" onclick="openForm()" style="float: right;">+</button>
</h3>
<table id="tableCategory" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Initial</th>
            <th>Name</th>
            <th>Active</th>
            <th>Action</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="categoryData">
    </tbody>
</table>
<script>
    loadData();


    function loadData() {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/category',
            type: 'get',
            contentType: 'application/json',
            success: function(category) {
                console.log(category);
                var no = 1;
                var tableData = '';
                for (i = 0; i < category.length; i++) {
                    var check = '';
                    if (category[i].active) {
                        check = "checked";
                    }
                    tableData += `<tr> 
                    <td>${no++} </td> 
                    <td> ${category[i].initial} </td> 
                    <td> ${category[i].name} </td> 
                    <td> <input disabled type ="checkbox" id ="checkActive" ${check}> </td> 
                    <td width = 5%> <button class="btn btn-warning" onclick="edit(${category[i].id})">Edit</button> </td>
                    <td> <button class="btn btn-danger" onclick="del(${category[i].id})">Delete</button> </td> 
                    </tr>`;
                }
                $('#categoryData').html(tableData);
                let table = new DataTable('#tableCategory');
            }

        })
    }

    function openForm() {
        $.ajax({
            url: '/category/form',
            type: 'get',
            contentType: 'html',
            success: function(categoryForm) {
                console.log(categoryForm);
                $('#myModal').modal('show');
                $('.modal-title').html("Tambah Category");
                $('.modal-body').html(categoryForm);
                $('#btnSimpan').show();
                $('#btnUpdate').hide();
                $('#btnDelete').hide();
            }
        })
    }

    function simpan() {
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = document.getElementById('active'); // Perbaiki di sini

        var act = false;
        if (active.checked) {
            act = true;
        }

        const category = {
            initial: initial,
            name: name,
            active: act
        };

        console.log('heee', category);

        $.ajax({
            url: 'http://127.0.0.1:8000/api/category',
            type: 'post',
            data: JSON.stringify(category),
            contentType: 'application/json',
            success: function(category) {
                loadData();
                location.reload(1);
                $('#myModal').modal('hide');

            }
        });
    }

    function edit($id_category) {
        $.ajax({
            url: '/category/form',
            type: 'get',
            contentType: 'html',
            success: function(categoryForm) {
                console.log(categoryForm);
                $('#myModal').modal('show');
                $('.modal-title').html("Edit Category");
                $('.modal-body').html(categoryForm);
                $('#id').val($id_category);
                $('#btnUpdate').val($id_category);
                $('#btnSimpan').hide();
                $('#btnUpdate').show();
                $('#btnDelete').hide();

                $.ajax({
                    url: 'http://127.0.0.1:8000/api/category/' + $id_category + '?orderBy=id_category',
                    type: 'get',
                    contentType: 'application/json',
                    success: function(category) {
                        $('#initial').val(category.initial);
                        $('#name').val(category.name);
                        if (category.active) {
                            $('#active').prop('checked', true);
                        } else {
                            $('#active').prop('checked', false);
                        }
                    }
                });
            }
        });
    }

    function update($id_category) {
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = document.getElementById('active');

        var act = false;
        if (active.checked) {
            act = true;
        }

        const category = {
            initial: initial,
            name: name,
            active: act
        };

        $.ajax({
            url: 'http://127.0.0.1:8000/api/category/' + $id_category + '?orderBy=id_category',
            type: 'put',
            data: JSON.stringify(category),
            contentType: 'application/json',
            success: function(updatedCategory) {
                console.log(updatedCategory);
                location.reload(true);
            },
            error: function(error) {
                console.log("Error during update:", error);
            }
        });
    }

    function del($id_category) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/category/' + $id_category,
            type: 'get',
            contentType: 'application/json',
            success: function(category) {
                var str = `
                <span>initial :</span><span>${category.initial}</span><br>
                <span>Name :</span><span>${category.name}</span><br>
                <span>active :</span><span>${category.active}</span><br>
                <span><button class="btn btn-danger" onclick="hapus(${$id_category})">Hapus</button></span><br>
            `;
                $('#myModal').modal('show');
                $('.modal-title').html("Hapus Category");
                $('.modal-body').html(str);
            }
        });
    }

    function hapus($id_category) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/category/' + $id_category,
            type: 'delete',
            contentType: 'application/json',
            success: function(category) {
                location.reload(1);
            }
        });

    }
</script>

@endsection