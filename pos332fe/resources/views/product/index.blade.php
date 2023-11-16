@extends('layouts.app')

@section('content')

<h3>
    Product Page
    <button class="btn btn-success" onclick="openForm()" style="float: right;">+</button>
</h3>
<table id="tableVarian" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Category</th>
            <th>varian</th>
            <th>Initial</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody id="varianData">
    </tbody>
</table>
<script>
    loadData();

    function loadData() {
        $.ajax({
            url: 'http://localhost:8000/api/product',
            type: 'get',
            contentType: 'application/json',
            success: function(product) {
                var no = 1;
                var tableData = '';
                for (i = 0; i < product.length; i++) {
                    var check = '';
                    if (product[i].active) {
                        check = 'checked';
                    }
                    tableData += `<tr>
                    <td>${no++}</td>
                    <td>${product[i].varian.category.name}</td>
                    <td>${product[i].varian.name}</td>
                    <td>${product[i].initial}</td>
                    <td>${product[i].name}</td>
                    <td>${product[i].description}</td>
                    <td>${product[i].price}</td>
                    <td>${product[i].stock}</td>
                    <td><button class="btn btn-warning" onclick="edit(${product[i].id})">U</button></td>
                    <td><button class="btn btn-danger" onclick="del(${product[i].id})">D</button></td>
                </tr>`;
                }
                $('#varianData').html(tableData);
                new DataTable('#tableVarian');
            }
        });
    }

    function getSelectCategory() {
        $.ajax({
            url: 'http://localhost:8000/api/category',
            type: 'get',
            contentType: 'html',
            success: function(category) {
                var selectData = '';
                for (i = 0; i < category.length; i++) {
                    selectData += `<option value="${category[i].id}">${category[i].name}</option>`
                }

                $('#selectCategory').html(selectData);
            }
        });
    }

    function getSelectVarian() {
        $.ajax({
            url: 'http://localhost:8000/api/varian',
            type: 'get',
            contentType: 'html',
            success: function(varian) {
                var selectData = '';
                for (i = 0; i < category.length; i++) {
                    selectData += `<option value="${category[i].id}">${category[i].name}</option>`
                }

                $('#selectCategory').html(selectData);
            }
        });
    }

    function getSelectVarianByCategory(cat_id) {
        $.ajax({
            url: 'http://localhost:8000/api/varian/getbycategory/' + cat_id,
            type: 'get',
            contentType: 'html',
            success: function(varian) {
                var selectData = '';
                for (i = 0; i < varian.length; i++) {
                    selectData += `<option value="${varian[i].id}">${varian[i].name}</option>`
                }

                $('#selectVarian').html(selectData);
            }
        });
    }



    function openForm() {
        $.ajax({
            url: '/product/form',
            type: 'get',
            contentType: 'html',
            success: function(product) {
                console.log(product);
                $('#myModal').modal('show');
                $('.modal-title').html('Tambah product');
                $('.modal-body').html(product);

                $('#btnSimpan').show();
                $('#btnUpdate').hide();

                getSelectCategory();
            }
        });
    }

    function simpan() {
        var varian_id = $('#selectVarian').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var description = $('#description').val();
        var price = $('#price').val();
        var stock = $('#stock').val();
        // var create_by = 1;
        // var updated_by = 1;

        const product = {
            varian_id: varian_id,
            initial: initial,
            name: name,
            description: description,
            price: price,
            stock: stock,
            create_by: 1,
            updated_by: 1
        };

        $.ajax({
            url: 'http://127.0.0.1:8000/api/product',
            type: 'post',
            data: JSON.stringify(product),
            contentType: 'application/json',
            success: function(product) {
                location.reload();
            },
        });
    }

    function edit(id_product) {
        $.ajax({
            url: '/product/form',
            type: 'get',
            contentType: 'html',
            success: function(productForm) {
                console.log(productForm);
                $('#myModal').modal('show');
                $('.modal-title').html("Edit Category");
                $('.modal-body').html(productForm);
                $('#id').val(id_product);
                $('#btnUpdate').val(id_product);
                $('#btnSimpan').hide();
                $('#btnUpdate').show();
                $('#btnDelete').hide();
                getSelectCategory();

                $.ajax({
                    url: 'http://127.0.0.1:8000/api/product/' + id_product,
                    type: 'get',
                    contentType: 'application/json',
                    success: function(product) {
                        $('#initial').val(product.initial);
                        $('#name').val(product.name);
                        $('#description').val(product.description);
                        $('#price').val(product.price);
                        $('#stock').val(product.stock);
                    }
                });
            }
        });
    }

    function update(id_product) {
        var varian_id = $('#selectVarian').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var description = $('#description').val();
        var price = $('#price').val();
        var stock = $('#stock').val();
        // var create_by = 1;
        // var updated_by = 1;

        const product = {
            varian_id: varian_id,
            initial: initial,
            name: name,
            description: description,
            price: price,
            stock: stock,
            create_by: 1,
            updated_by: 1
        };

        $.ajax({
            url: 'http://127.0.0.1:8000/api/product/' + id_product,
            type: 'put',
            data: product,
            dataType: 'json',
            success: function(updatedProduct) {
                console.log(updatedProduct);
                location.reload(true);
            },
            error: function(error) {
                console.log(error.responseText);
            }
        });
    }

    function del(id_product) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/product/' + id_product,
            type: 'get',
            contentType: 'application/json',
            success: function(product) {
                var str = `
                <span>Varian :</span><span>${product.varian.name}</span><br>
                <span>initial :</span><span>${product.initial}</span><br>
                <span>Name :</span><span>${product.name}</span><br>
                <span>Description :</span><span>${product.description}</span><br>
                <span>Price :</span><span>${product.price}</span><br>
                <span>Stock :</span><span>${product.stock}</span><br>
                <span><button class="btn btn-danger" onclick="hapus(${id_product})">Hapus</button></span><br>
            `;
                $('#myModal').modal('show');
                $('.modal-title').html("Hapus Product");
                $('.modal-body').html(str);
            }
        });
    }

    function hapus(id_product) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/product/' + id_product,
            type: 'delete',
            contentType: 'application/json',
            success: function(varian) {
                location.reload(1);
            }
        });

    }
</script>

@endsection