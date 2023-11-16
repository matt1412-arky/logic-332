@extends('layouts.app')

@section('content')

<h3>
    Varian Page
    <button class="btn btn-success" onclick="openForm()" style="float:right">+</button>
</h3>

<table id="tableCategory" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Category</th>
            <th>Initial</th>
            <th>Name</th>
            <th>Active</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody id="varianData">
    </tbody>
</table>
<script>
let table = new DataTable('#tableCategory');

    loadData();
    // openForm();

    function loadData() {
        $.ajax({
            url:'http://localhost:8000/api/varian',
            type:'get',
            contentType:'application/json',
            success:function(varian) {
                // console.log(varian);
                var no = 1;
                var tableData = '';
                for(i=0; i<varian.length; i++){
                    var check = '';
                    if(varian[i].active){
                        check = 'checked';
                    }
                tableData += `<tr>
                    <td>${no++}</td>
                    <td>${varian[i].category.name}</td>
                    <td>${varian[i].initial}</td>
                    <td>${varian[i].name}</td>
                    <td><input disable type ="checkbox" id="checkActive" ${check}></td>
                    <td><button class="btn btn-warning" onclick="edit(${varian[i].id})">U</button></td>
                    <td><button class="btn btn-danger" onclick="del(${varian[i].id})">D</button></td>
                </tr>`;
              }
              $('#varianData').html(tableData);
            }
        });
    }


    function getselectCategory() {
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
        });
    }

    function openForm(){
        $.ajax({
            url:'/varian/form',
            type:'get',
            contentType:'html',
            success:function(varian) {
                console.log(varian);
                $('#myModal').modal('show');
                $('.modal-title').html('Tambah Varian');
                $('.modal-body').html(varian);

                $('#btnSimpan').show();
                $('#btnUpdate').hide();

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
                });
            }   
        });
    }
    
    function simpan(){
        var category_id = $('#selectCategory').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = document.getElementById('active');
        
        var act = false;
        if(active.checked) {
            act = true;
        }

        const varian = {
            category_id:category_id,
            initial:initial,
            name:name,
            active:act,
            create_by : 1,
            updated_by : 1
        }
        // console.log(varian);
           

        $.ajax({
            url:'http://localhost:8000/api/varian',
            type:'post',
            dataType :'json',
            data:varian,
            success:function(varian) {
                location.reload(1);
            },
            error:function(e) {
                console.log(e.responseText);
            }   
        });
    }

    function edit(id_varian) {
        console.log("" + id_varian)
        $.ajax({
            url:'/varian/form',
            type:'get',
            contentType:'html',
            success:function(varianForm) {
                // console.log(varianForm);
                $('#myModal').modal('show');
                $('.modal-title').html('Edit Varian');
                $('.modal-body').html(varianForm);

                $('#id').val(id_varian);//get id varian
                $('#btnUpdate').val(id_varian);

                $('#btnSimpan').hide();
                $('#btnUpdate').show();
                
                $.ajax({
                    url:'http://localhost:8000/api/varian/' + id_varian,
                    type:'get',
                    contentType:'application/json',
                    success:function(varian) {
                        // console.log(varian);
                        getselectCategory();
                        $('#selectCategory').val(varian.category_id);
                        $('#initial').val(varian.initial);
                        $('#name').val(varian.name);
                        if(varian.active) {
                            $('#active').attr('checked', true);
                        } else {
                            $('#active').attr('checked', false);
                        }
                    }
                })
            }   
        });

    }

    function update(){
        var id_varian = $('#id').val();
        var category_id = $('#selectCategory').val();
        var initial = $('#initial').val();
        var name = $('#name').val();
        var active = document.getElementById('active');
        
        var act = false;
        if(active.checked) {
            act = true;
        }

        const varian = {
            category_id:category_id,
            initial:initial,
            name:name,
            active:act,
            create_by: 1,
            updated_by: 1
        };
        console.log(varian);
           

        $.ajax({
            url:'http://localhost:8000/api/varian/' + id_varian,
            type:'put',
            dataType :'json',
            data:varian,
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
            url:'http://localhost:8000/api/varian/' + id,
            type:'get',
            contentType:'application/json',
            success:function(varian) {
                var str =`
                    <span>Category : </span><span>${varian.category.name}</span><br>
                    <span>Initial : </span><span>${varian.initial}</span><br>
                    <span>Name : </span><span>${varian.name}</span><br>
                    <span>Active : </span><span>${varian.active}</span><br>
                    <span><button class="btn btn-danger" onclick="hapus(${id})">Hapus!</button></span><br>
                `;
                $('#myModal').modal('show');
                $('.model-title').html('Hapus Varian');
                $('.modal-body').html(str);
            
            }
        });
    }

    function hapus(id) {
        // console.log("->>>>>>>>>>>" + id);
        $.ajax({
            url:'http://localhost:8000/api/varian/' + id,
            type:'delete',
            contentType:'application/json',
            success:function(varian) { 
                // console.log(varian);
                location.reload();
            }
        });
    }

</script>

@endsection