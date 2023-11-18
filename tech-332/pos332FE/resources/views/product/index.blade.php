@extends('layouts.app')

@section('content')
    <h3>
        Product Page
        <button class="btn btn-success" onclick="openModal()" style="float: right">+</button>
    </h3>
    <table class="table table-hover table-dark" id="tableProduct">
        <thead>
            <tr>
                <th>No</th>
                <th>Category</th>
                <th>Variant</th>
                <th>Initial</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="productData">

        </tbody>
    </table>

    <script>
        loadData();

        function loadData() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/product',
                type: 'GET',
                contentType: 'application / json',
                success: function(data) {
                    // console.log(data);
                    var tableData = '';
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        tableData +=
                            `<tr>
                            <td>${no++}</td> 
                            <td>${data[i].variant.category.name}</td>
                            <td>${data[i].variant.name}</td>
                            <td>${data[i].initial}</td>
                            <td>${data[i].name}</td>
                            <td>${data[i].description}</td>
                            <td>${data[i].price}</td>
                            <td>${data[i].stock}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning" onclick="edit(${data[i].id})"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-danger" onclick="del(${data[i].id})"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>`;
                    }
                    $('#productData').html(tableData);
                    $('#tableProduct').DataTable();
                }
            });
        }

        function getSelectVariant(category_id) {
            // console.log('>>> >>> >>> ' +
            //     category_id);
            $.ajax({
                url: 'http://127.0.0.1:8000/api/variant/getByCatId/' + category_id,
                type: 'GET',
                contentType: 'application/json',
                success: function(data) {
                    // console.log(data);
                    var option = '';
                    for (var i = 0; i < data.length; i++) {
                        option += `<option value="${data[i].id}">${data[i].name}</option>`;
                    }
                    $('#variant').html(option);
                },
                error: function() {
                    console.error('Failed to load variants based on category');
                }
            });
        }

        function openModal() {
            $.ajax({
                url: 'http://127.0.0.1:9000/product/form',
                type: 'GET',
                contentType: 'html',
                success: function(data) {
                    $('#mymodal').modal('show');
                    $('.modal-title').html('Add Product');
                    $('.modal-body').html(data);

                    $('#btnSimpan').show();
                    $('#btnUpdate').hide();

                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/category',
                        type: 'GET',
                        contentType: 'application/json',
                        success: function(data) {
                            var option = '';
                            for (var i = 0; i < data.length; i++) {
                                option += `<option value="${data[i].id}">${data[i].name}</option>`;
                            }
                            $('#category').html(option);
                        },
                        error: function() {
                            console.error('Failed to load categories');
                        }
                    });

                },
                error: function() {
                    console.error('Failed to load product form');
                }
            });
        }

        function simpan() {
            var variant = $('#variant').val();
            var category = $('#category').val();
            var initial = $('#initial').val();
            var name = $('#name').val();
            var description = $('#description').val();
            var price = $('#price').val();
            var stock = $('#stock').val();

            $.ajax({
                url: 'http://127.0.0.1:8000/api/product',
                type: 'POST',
                data: {
                    variant_id: variant,
                    category_id: category,
                    initial: initial,
                    name: name,
                    description: description,
                    price: price,
                    stock: stock
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
                url: 'http://127.0.0.1:9000/product/form',
                type: 'GET',
                contentType: 'html',
                success: function(data) {
                    $('#mymodal').modal('show');
                    $('.modal-title').html('Edit Product');
                    $('.modal-body').html(data);
                    $('#id').val(id); // Set id product
                    $('#btnUpdate').val(id);

                    $('#btnSimpan').hide();
                    $('#btnUpdate').show();

                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/product/' + id,
                        type: 'GET',
                        contentType: 'application/json',
                        success: function(productData) {
                            $.ajax({
                                url: 'http://127.0.0.1:8000/api/variant',
                                type: 'GET',
                                contentType: 'application/json',
                                success: function(variantData) {
                                    var option = '';
                                    for (var i = 0; i < variantData.length; i++) {
                                        var selected = (variantData[i].id ===
                                                productData.variant_id) ? 'selected' :
                                            '';
                                        option +=
                                            `<option value="${variantData[i].id}" ${selected}>${variantData[i].name}</option>`;
                                    }
                                    $('#variant').html(option);

                                    // Check if productData.variantData is defined before accessing its properties
                                    if (productData.variant && productData.variant
                                        .category_id) {
                                        $.ajax({
                                            url: 'http://127.0.0.1:8000/api/category',
                                            type: 'GET',
                                            contentType: 'application/json',
                                            success: function(categoryData) {
                                                var option = '';
                                                for (var i = 0; i <
                                                    categoryData.length; i++
                                                    ) {
                                                    var selected = (
                                                            categoryData[i]
                                                            .id ===
                                                            productData
                                                            .variant
                                                            .category_id
                                                        ) ?
                                                        'selected' :
                                                        '';
                                                    option +=
                                                        `<option value="${categoryData[i].id}" ${selected}>${categoryData[i].name}</option>`;
                                                }
                                                $('#category').html(option);
                                            },
                                            error: function() {
                                                console.error(
                                                    'Failed to load categories'
                                                    );
                                            }
                                        });
                                    }

                                    $('#initial').val(productData.initial);
                                    $('#name').val(productData.name);
                                    $('#description').val(productData.description);
                                    $('#price').val(productData.price);
                                    $('#stock').val(productData.stock);
                                },
                                error: function() {
                                    alert('Failed Load Variant');
                                }
                            });
                        },
                        error: function() {
                            alert('Failed Load Data Product');
                        }
                    });
                },
                error: function() {
                    alert('Failed Load Form');
                }
            });
        }


        function update(id) {
            var variant = $('#variant').val();
            var initial = $('#initial').val();
            var name = $('#name').val();
            var description = $('#description').val();
            var price = $('#price').val();
            var stock = $('#stock').val();

            $.ajax({
                url: 'http://127.0.0.1:8000/api/product/' + id,
                type: 'PUT',
                data: {
                    variant_id: variant,
                    initial: initial,
                    name: name,
                    description: description,
                    price: price,
                    stock: stock
                },
                success: function() {
                    loadData();

                    alert('Successfully Update Data');
                    $('#mymodal').modal('hide');
                },
                error: function() {
                    alert('Failed Update Data');
                }
            })
        }

        function del(id) {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/product/' + id,
                type: 'GET',
                contentType: 'application/json',
                success: function(data) {
                    var str = `
                                <span>Category Name : </span><span>${data.variant.category.name}</span><br>
                                <span>Variant Name : </span><span>${data.variant.name}</span><br>
                                <span>Initial : </span><span>${data.initial}</span><br>
                                <span>Name : </span><span>${data.name}</span><br>
                                <span>Description : </span><span>${data.description}</span><br>
                                <span>Price : </span><span>${data.price}</span><br>
                                <span>Stock : </span><span>${data.stock}</span><br>
                                <span><button class="btn btn-danger" onclick="hapus(${id})" style="float:right;">Delete</button></span><br>
                              `;

                    $('#mymodal').modal('show');
                    $('.modal-title').html('Delete Product');
                    $('.modal-body').html(str);
                }
            })
        }

        function hapus(id) {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/product/' + id,
                type: 'DELETE',
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
