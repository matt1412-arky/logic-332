@extends('layouts.app')

@section('content')

<h3>
    Varian Page
    <button class="btn btn-success" onclick="openForm()" style="float: right;">+</button>
</h3>
<table id="tableVarian" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Category Name</th>
            <th>Initial</th>
            <th>Name</th>
            <th>Active</th>
            <th>Action</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="varianData">
    </tbody>
</table>
<script>
    loadData();

    function loadData() {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/varian',
            type: 'get',
            contentType: 'application/json',
            success: function(varian) {
                console.log(varian);
                var no = 1;
                var tableData = '';
                for (i = 0; i < varian.length; i++) {
                    var check = '';
                    if (varian[i].active) {
                        check = "checked";
                    }
                    tableData += `<tr> 
                <td>${no++} </td> 
                <td> ${varian[i].category.name} </td> 
                <td> ${varian[i].initial} </td> 
                <td> ${varian[i].name} </td> 
                <td> <input disabled type ="checkbox" id ="checkActive" ${check}> </td> 
                <td width = 5%> <button class="btn btn-warning" onclick="edit(${varian[i].id})">Edit</button> </td>
                <td> <button class="btn btn-danger" onclick="del(${varian[i].id})">Delete</button> </td> 
                </tr>`;
                }
                $('#varianData').html(tableData);
                let table = new DataTable('#tableVarian');
            }

        })
    }

    function openForm() {
        $.ajax({
            url: '/varian/form',
            type: 'get',
            contentType: 'html',
            success: function(varianForm) {
                console.log(varianForm);
                $('#myModal').modal('show');
                $('.modal-title').html("Tambah Varian");
                $('.modal-body').html(varianForm);
                $('#btnSimpan').show();
                $('#btnUpdate').hide();
                $('#btnDelete').hide();

                $.ajax({
                    url: 'http://127.0.0.1:8000/api/category',
                    type: 'get',
                    contentType: 'html',
                    success: function(category) {
                        var selectData = '';
                        for (i = 0; i < category.length; i++) {
                            selectData += `<option value="${category[i].id}">${category[i].name}</option>`;
                        }
                        $('#selectCategory').html(selectData);
                    },
                    error: function(error) {
                        console.error("Error fetching categories:", error);
                    }
                });
            },
            error: function(error) {
                console.error("Error fetching varianForm:", error);
            }

        });

    }

    function simpan() {
        var category_id = $('#selectCategory').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = document.getElementById('active');
        // var create_by = 1;
        // var updated_by = 1;

        var act = false;
        if (active.checked) {
            act = true;
        }

        const varian = {
            category_id: category_id,
            initial: initial,
            name: name,
            active: act,
            create_by: 1,
            updated_by: 1
        };

        $.ajax({
            url: 'http://127.0.0.1:8000/api/varian',
            type: 'post',
            data: JSON.stringify(varian),
            contentType: 'application/json',
            success: function(varian) {
                location.reload(1);
            },
            error: function(error) {
                console.error("Error saving varian:", error);
            }
        });
    }

    function edit(id_varian) {
        $.ajax({
            url: '/varian/form',
            type: 'get',
            contentType: 'html',
            success: function(varianForm) {
                console.log(varianForm);
                $('#myModal').modal('show');
                $('.modal-title').html("Edit Category");
                $('.modal-body').html(varianForm);
                $('#id').val(id_varian);
                $('#btnUpdate').val(id_varian);
                $('#btnSimpan').hide();
                $('#btnUpdate').show();
                $('#btnDelete').hide();

                $.ajax({
                    url: 'http://127.0.0.1:8000/api/varian/' + id_varian,
                    type: 'get',
                    contentType: 'application/json',
                    success: function(varian) {
                        $.ajax({
                            url: 'http://127.0.0.1:8000/api/category',
                            type: 'get',
                            contentType: 'json', // Correct content type to 'json'
                            success: function(categories) {
                                var selectData = '';
                                for (i = 0; i < categories.length; i++) {
                                    var category_id = categories[i].id === varian.category_id ? 'selected' : '';
                                    selectData += `<option value="${categories[i].id}" ${category_id}>${categories[i].name}</option>`;
                                }
                                $('#selectCategory').html(selectData);
                            },
                            error: function(error) {
                                console.error("Error fetching categories:", error);
                            }
                        });

                        $('#initial').val(varian.initial);
                        $('#name').val(varian.name);
                        $('#active').prop('checked', varian.active);
                    }
                });
            }
        });
    }


    function update(id_varian) {
        var category_id = $('#selectCategory').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = $('#active').prop('checked');

        const varian = {
            category_id: category_id,
            initial: initial,
            name: name,
            active: active,
            create_by: 1,
            updated_by: 1
        };

        $.ajax({
            url: 'http://127.0.0.1:8000/api/varian/' + id_varian,
            type: 'put',
            data: JSON.stringify(varian),
            contentType: 'application/json',
            success: function(updatedVarian) {
                console.log(updatedVarian);
                location.reload(true);
            },
        });
    }

    function del(id_varian) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/varian/' + id_varian,
            type: 'get',
            contentType: 'application/json',
            success: function(varian, category) {
                var str = `
                <span>Category Name :</span><span>${varian.category_id}</span><br>
                <span>initial :</span><span>${varian.initial}</span><br>
                <span>Name :</span><span>${varian.name}</span><br>
                <span>active :</span><span>${varian.active}</span><br>
                <span><button class="btn btn-danger" onclick="hapus(${id_varian})">Hapus</button></span><br>
            `;
                $('#myModal').modal('show');
                $('.modal-title').html("Hapus Category");
                $('.modal-body').html(str);
            }
        });
    }

    function hapus(id_varian) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/category/' + id_varian,
            type: 'delete',
            contentType: 'application/json',
            success: function(varian) {
                location.reload(1);
            }
        });

    }
</script>

@endsection