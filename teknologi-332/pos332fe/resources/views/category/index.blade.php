@extends('layouts.app')

@section('content')

<h3>
    Category Page
    <button class="btn btn-success" onclick="openForm()" style="float:right">+</button>
</h3>

<table id= "tableCategory" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Initial</th>
            <th>Name</th>
            <th>Active</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody id="categoryData">
    </tbody>
</table>
<script>
    let table = new DataTable('#tableCategory');

    loadData();
    // openForm();

    function loadData() {
        $.ajax({
            url:'http://localhost:8000/api/category',
            type:'get',
            contentType:'application/json',
            success:function(category) {
                console.log(category);
                var no = 1;
                var tableData = '';
                for(i=0; i<category.length; i++){
                    var check = '';
                    if(category[i].active){
                        check = 'checked';
                    }
                tableData += `<tr>
                    <td>${no++}</td>
                    <td>${category[i].initial}</td>
                    <td>${category[i].name}</td>
                    <td><input disable type ="checkbox" id="checkActive" ${check}></td>
                    <td><button class="btn btn-warning" onclick="edit(${category[i].id})">U</button></td>
                    <td><button class="btn btn-danger" onclick="del(${category[i].id})">D</button></td>
                </tr>`;
              }
              $('#categoryData').html(tableData);
            }
        });
    }


    function openForm(){
        $.ajax({
            url:'/category/form',
            type:'get',
            contentType:'html',
            success:function(categoryForm) {
                console.log(categoryForm);
                $('#myModal').modal('show');
                $('.modal-title').html('Tambah Category');
                $('.modal-body').html(categoryForm);
                $('#btnSimpan').show();
                $('#btnUpdate').hide();
            }   
        });
    }
    
    function simpan(){
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = document.getElementById('active');
        
        var act = false;
        if(active.checked) {
            act = true;
        }

        const category = {
            initial:initial,
            name:name,
            active:act
        }
        console.log(category);
           

        $.ajax({
            url:'http://localhost:8000/api/category',
            type:'post',
            dataType :'json',
            data:category,
            success:function(response) {
                location.reload(1);
            },
            error:function(e) {
                console.log(e.responseText);
            }   
        });
    }

    function edit($id_category) {
        $.ajax({
            url:'/category/form',
            type:'get',
            contentType:'html',
            success:function(categoryForm) {
                console.log(categoryForm);
                $('#myModal').modal('show');
                $('.modal-title').html('Edit Category');
                $('.modal-body').html(categoryForm);
                $('#id').val($id_category);//get id category

                $('#btnUpdate').val($id_category);
                $('#btnSimpan').hide();
                $('#btnUpdate').show();
                
                $.ajax({
                    url:'http://localhost:8000/api/category/' + $id_category,
                    type:'get',
                    contentType:'application/json',
                    success:function(category) {
                        console.log(category)
                        $('#initial').val(category.initial);
                        $('#name').val(category.name);
                        if(category.active) {
                            $('#active').attr('checked', true);
                        } else {
                            $('#active').attr('checked', false);
                        }
                    }
                })
            }   
        });

    }

    function update($id_category){
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = document.getElementById('active');
        
        var act = false;
        if(active.checked) {
            act = true;
        }

        const category = {
            initial:initial,
            name:name,
            active:act
        }
        console.log(category);
           

        $.ajax({
            url:'http://localhost:8000/api/category/' + $id_category,
            type:'put',
            dataType :'json',
            data:category,
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
            url:'http://localhost:8000/api/category/' + id,
            type:'get',
            contentType:'application/json',
            success:function(category) {
                var str =`
                    <span>Initial : </span><span>${category.initial}</span><br>
                    <span>Name : </span><span>${category.name}</span><br>
                    <span>Active : </span><span>${category.active}</span><br>
                    <span><button class="btn btn-danger" onclick="hapus(${id})">Hapus!</button></span><br>
                `;
                $('#myModal').modal('show');
                $('.model-title').html('Hapus Category');
                $('.modal-body').html(str);
            
            }
        });
    }

    function hapus(id) {
        $.ajax({
            url:'http://localhost:8000/api/category/' + id,
            type:'delete',
            contentType:'application/json',
            success:function(category) { 
                console.log(category);
                location.reload();
            }
        });
    }

</script>

@endsection