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
                new DataTable('#tableVarian', {
                    info: false,
                    ordering: false,
                    paging: true,
                    searching: false,
                    language: {
                        info: "menampilkan _START_sampai_END_dari_total_TOTAL_",
                        paginate: {
                            "previous": "sebelumnya",
                            "next": "selanjutnya"
                        }
                    },
                    lengthMenu: [3, 6, 9, 12]
                })
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
                for (i = 0; i < varian.length; i++) {
                    selectData += `<option value="${varian[i].id}">${varian[i].name}</option>`
                }

                $('#selectVarian').html(selectData);
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
                $('#btnDelete').hide();

                getSelectCategory();
                getSelectVarian();
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
        $('#btnSimpan').show();
        $('#btnUpdate').hide();
        $('#btnDelete').hide();
        // var create_by = 1;
        // var updated_by = 1;
        // if (!varian_id) {
        //     $('#varianMessage').html('Varian harus di isi');
        // } else if (initial.length < 3 || initial.length > 5) {
        //     $('#iniMessage').html('initial harus di isi')
        // } else if (name.length < 3 || name.length > 30) {
        //     $('#namMessage').html('Nama harus di isi')
        // } else if (description.length < 10 | description.length > 50) {
        //     $('#desMessage').html('initial harus di isi')
        // } else if (price.length < 3 || price.length > 50) {
        //     $('#priMessage').html('initial harus di isi')
        // } else if (stock.length < 0 || stock.length > 5) {
        //     $('#stoMessage').html('initial harus di isi')
        // } else {}
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
                let timerInterval;
                Swal.fire({
                    title: "Berhasil di Save",
                    text: "You clicked the button!",
                    icon: "success",
                    html: "I will close in <b></b> milliseconds.",
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                            timer.textContent = `${Swal.getTimerLeft()}`;
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                        location.reload();
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log("I was closed by the timer");
                    }
                });
                // Swal.fire({

                //     timer: 2000,
                //     timerProgressBar: true,
                // });
                // 

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
                        console.log(product.responseText)
                        $.ajax({
                            url: 'http://127.0.0.1:8000/api/varian',
                            type: 'get',
                            contentType: 'json',
                            success: function(varian) {
                                var selectData = '';
                                for (let i = 0; i < varian.length; i++) {
                                    var varian_id = varian[i].id === product.varian_id ? 'selected' : '';
                                    selectData += `<option value="${varian[i].id}" ${varian_id}>${varian[i].name}</option>`;
                                }
                                $('#selectVarian').html(selectData);

                                // Now fetch categories using product.category_id
                                $.ajax({
                                    url: 'http://127.0.0.1:8000/api/category',
                                    type: 'get',
                                    contentType: 'json',
                                    success: function(categories) {
                                        var selectCategoryData = '';
                                        for (let i = 0; i < categories.length; i++) {
                                            var category_id = categories[i].id === product.varian.category_id ? 'selected' : '';
                                            selectCategoryData += `<option value="${categories[i].id}" ${category_id}>${categories[i].name}</option>`;
                                        }
                                        $('#selectCategory').html(selectCategoryData);
                                    },
                                    error: function(error) {
                                        console.error("Error fetching categories:", error);
                                    }
                                });
                            },
                            error: function(error) {
                                console.error("Error fetching varian:", error);
                            }
                        });

                        $('#initial').val(product.initial);
                        $('#name').val(product.name);
                        $('#description').val(product.description);
                        $('#price').val(product.price);
                        $('#stock').val(product.stock);
                    },
                    error: function(error) {
                        console.error("Error fetching product:", error);
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
                <span>Category :</span><span>${product.varian.category.name}</span><br>
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
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Show another Swal.fire before the ajax call
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                }).then(() => {
                    // Make the AJAX call to delete the product
                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/product/' + id_product,
                        type: 'delete',
                        contentType: 'application/json',
                        success: function(varian) {
                            location.reload(1);
                        }
                    });
                });
            }
        });
    }
</script>

@endsection