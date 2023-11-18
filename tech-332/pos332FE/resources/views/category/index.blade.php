@extends('layouts.app')

@section('content')
    <h3>
        Category Page
        <button class="btn btn-success" onclick="openModal()" style="float: right">+</button>
    </h3>
    <table class="table table-hover table-dark" id="tableCategory">
        <thead>
            <tr>
                <th>No</th>
                <th>Initial</th>
                <th>Name</th>
                <th>Active</th>
                <th>Action</th>
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
                type: 'GET',
                contentType: 'application / json',
                success: function(data) {
                    // console.log(data);
                    var tableData = '';
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        var checkboxHtml = data[i].active ? '<input type="checkbox" checked disabled>' :
                            '<input type="checkbox" disabled>';
                        tableData +=
                            `<tr>
                                    <td>${no++}</td> 
                                    <td>${data[i].initial}</td>
                                    <td>${data[i].name}</td>
                                    <td>${checkboxHtml}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-warning" onclick="edit(${data[i].id})"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" onclick="del(${data[i].id})"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>`;
                    }
                    $('#categoryData').html(tableData);
                    $('#tableCategory').DataTable();
                }
            });
        }

        function openModal() {
            $.ajax({
                url: 'http://127.0.0.1:9000/category/form',
                type: 'GET',
                contentType: 'html',
                success: function(data) {
                    $('#mymodal').modal('show');
                    $('.modal-title').html('Add Category');
                    $('.modal-body').html(data);

                    $('#btnSimpan').show();
                    $('#btnUpdate').hide();
                }
            });
        }

        function simpan() {
            var initial = $('#initial').val();
            var name = $('#name').val();
            var active = $('#active').is(':checked');

            $.ajax({
                url: 'http://127.0.0.1:8000/api/category',
                type: 'POST',
                data: {
                    initial: initial,
                    name: name,
                    active: active
                },
                success: function() {
                    loadData();

                    alert('Successfully Add Data');
                    $('#mymodal').modal('hide');
                },
                error: function() {
                    alert('Failed Add Data');
                }
            });
        }

        function edit(id) {
            $.ajax({
                url: 'http://127.0.0.1:9000/category/form',
                type: 'GET',
                contentType: 'html',
                success: function(data) {
                    $('#mymodal').modal('show');
                    $('.modal-title').html('Edit Category');
                    $('.modal-body').html(data);
                    $('#id').val(id); //get id category
                    $('#btnUpdate').val(id);

                    $('#btnSimpan').hide();
                    $('#btnUpdate').show();

                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/category/' + id,
                        type: 'GET',
                        contentType: 'application/json',
                        success: function(data) {
                            $('#initial').val(data.initial);
                            $('#name').val(data.name);
                            $('#active').prop('checked', data.active);
                        }
                    })
                }
            });
        }

        function update(id) {
            var initial = $('#initial').val();
            var name = $('#name').val();
            var active = $('#active').is(':checked');

            $.ajax({
                url: 'http://127.0.0.1:8000/api/category/' + id,
                type: 'PUT',
                data: {
                    initial: initial,
                    name: name,
                    active: active
                },
                success: function() {
                    loadData();

                    alert('Successfully Update Data');
                    $('#mymodal').modal('hide');
                },
                error: function() {
                    alert('Failed Update Data');
                }
            });
        }

        function del(id) {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/category/' + id,
                type: 'GET',
                contentType: 'application/json',
                success: function(data) {
                    var str = `
                            <span>Initial : </span><span>${data.initial}</span><br>
                            <span>Name : </span><span>${data.name}</span><br>
                            <span>Active : </span><span>${data.active}</span><br>
                            <span><button class="btn btn-danger" onclick="hapus(${id})" style="float:right;">Delete</button></span><br>                            
                    `;

                    $('#mymodal').modal('show');
                    $('.modal-title').html('Delete Category');
                    $('.modal-body').html(str);
                }
            });
        }

        function hapus(id) {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/category/' + id,
                type: 'DELETE',
                contentType: 'application/json',
                success: function() {
                    loadData();
                    $('#mymodal').modal('hide');

                    alert('Successfully Delete Data');
                },
                error: function() {
                    alert('Failed Delete Data');
                }
            })
        }
    </script>
@endsection
