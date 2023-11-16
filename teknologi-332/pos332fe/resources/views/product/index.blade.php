@extends('layouts.app')

@section('content')

<h3>
    Product Page
    <button class="btn btn-success" onclick="openForm()" style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
  <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
</svg></i></button>
</h3>

<table id="tableProduct" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Category</th>
            <th>Varian</th> 
            <th>Initial</th>
            <th>Product</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody id="productData">
    </tbody>
</table>
<script>
let table = new DataTable('#tableProduct');

    loadData();
    // openForm();

    function loadData() {
        $.ajax({
            url:'http://localhost:8000/api/product',
            type:'get',
            contentType:'application/json',
            success:function(product) {
                // console.log(product);
                var no = 1;
                var tableData = '';
                for(i=0; i<product.length; i++){
                    var check = '';
                    if(product[i].active){
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
                    <td><button class="btn btn-warning" onclick="edit(${product[i].id})"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill-gear" viewBox="0 0 16 16">
  <path d="M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z"/>
  <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Zm3.631-4.538c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
</svg></button></td>
                    <td><button class="btn btn-danger" onclick="del(${product[i].id})"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill-x" viewBox="0 0 16 16">
  <path d="M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z"/>
  <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
</svg></button></td>
                </tr>`;
              }
              $('#productData').html(tableData);
            }
        });
    }


    function getSelectCategory() {
        $.ajax({
            url:'http://localhost:8000/api/category',
            type:'get',
            contentType:'html',
            success:function(category) {
               var selectData = '';
               for (i=0; i <category.length; i++) {
                    selectData += `<option value="${category[i].id}">${category[i].name}</option>`
                }

                $('#selectCategory').html(selectData);
            }
        })
    }

    function getSelectVarian() {
        $.ajax({
            url:'http://localhost:8000/api/varian',
            type:'get',
            contentType:'html',
            success:function(varian) {
               var selectData = '';
               for (i=0; i <varian.length; i++) {
                    selectData += `<option value="${varian[i].id}">${varian[i].name}</option>`
                }

                $('#selectVarian').html(selectData);
            }
        })
    }

    function getSelectVarianByCategory(category_id) {
        $.ajax({
            url:'http://localhost:8000/api/varian/getbycategory/' + category_id,
            type:'get',
            contentType:'html',
            success:function(varian) {
               var selectData = '';
               for (i=0; i <varian.length; i++) {
                    selectData += `<option value="${varian[i].id}">${varian[i].name}</option>`
                }

                $('#selectVarian').html(selectData);
            }
        });
    }

    function openForm(){
        $.ajax({
            url:'/product/form',
            type:'get',
            contentType:'html',
            success:function(product) {
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
    
    function simpan(){
        var varian_id = $('#selectVarian').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var description = $('#description').val();
        var price = $('#price').val();
        var stock = $('#stock').val();
        

        const product = {
            varian_id:varian_id,
            initial:initial,
            name:name,
            description:description,
            price:price,
            stock:stock,
            create_by : 1,
            updated_by : 1
        }
        // console.log(product);
           

        $.ajax({
            url:'http://localhost:8000/api/product',
            type:'post',
            dataType :'json',
            data:product,
            success:function(product) {
                location.reload(1);
            },
            error:function(e) {
                console.log(e.responseText);
            }   
        });
    }

    function edit(id_product) {
        // console.log("" + id_product)
        $.ajax({
            url:'/product/form',
            type:'get',
            contentType:'html',
            success:function(productForm) {
                $('#myModal').modal('show');
                $('.modal-title').html('Edit product');
                $('.modal-body').html(productForm);

                getSelectCategory();
                getSelectVarian();

                $('#id').val(id_product);//get id product
                $('#btnUpdate').val(id_product);

                $('#btnSimpan').hide();
                $('#btnUpdate').show();
                

                $.ajax({
                    url:'http://localhost:8000/api/product/' + id_product,
                    type:'get',
                    contentType:'application/json',
                    success:function(product) {
                        // console.log(product);
                        $('#selectCategory').val(product.varian.category_id);
                        $('#selectVarian').val(product.varian_id);
                        $('#initial').val(product.initial);
                        $('#name').val(product.name);
                        $('#description').val(product.description);
                        $('#price').val(product.price);
                        $('#stock').val(product.stock);
                        if(product.active) {
                            $('#active').attr('checked', true);
                        } else {
                            $('#active').attr('checked', false);
                        }
                    }
                });
            }   
        });

    }

    function update(id_product){
        var category_id = $('#selectVarian').val();
        var varian_id = $('#selectVarian').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var description = $('#description').val();
        var price = $('#price').val();
        var stock = $('#stock').val();
        

        const product = {
            category_id:category_id,
            varian_id:varian_id,
            initial:initial,
            name:name,
            description:description,
            price:price,
            stock:stock,
            create_by : 1,
            updated_by : 1
        };
        // console.log(product);
           

        $.ajax({
            url:'http://localhost:8000/api/product/' + id_product,
            type:'put',
            dataType :'json',
            data:product,
            success:function(response) {
                location.reload(1);
            },
            error:function(e) {
                console.log(e.responseText);
            }   
        });
    }

    function del(id){
        $.ajax({
            url:'http://localhost:8000/api/product/' + id,
            type:'get',
            contentType:'application/json',
            success:function(product) {
                var str =`
                    <span>Category : </span><span>${product.varian.category.name}</span><br>
                    <span>Varian : </span><span>${product.varian.name}</span><br>
                    <span>Initial : </span><span>${product.initial}</span><br>
                    <span>Product : </span><span>${product.name}</span><br>
                    <span>Description : </span><span>${product.description}</span><br>
                    <span>Price: </span><span>${product.price}</span><br>
                    <span>Stock : </span><span>${product.stock}</span><br>
                    <span><button class="btn btn-danger" onclick="hapus(${id})">Hapus!</button></span><br>
                `;
                $('#myModal').modal('show');
                $('.model-title').html('Hapus product');
                $('.modal-body').html(str);
            
            }
        });
    }

    function hapus(id_product) {
        // console.log("->>>>>>>>>>>" + id);
        $.ajax({
            url:'http://localhost:8000/api/product/' + id_product,
            type:'delete',
            contentType:'application/json',
            success:function(product) { 
                // console.log(product);
                location.reload();
            }
        });
    }

</script>

@endsection