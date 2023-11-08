function bacaData2(){
    var nama = $('#nama').val()
    var alamat = $("#alamat").val()
    var kota = $("#kota").val()
    var tglLahir = $("#tglLahir").val()
    var pekerjaan = $("#pekerjaan").val()

    var pendidikan = $("#pendidikan")
    var pendidikanString = ""
    for(var i = 0; i < pendidikan.length; i++){
        if(pendidikan[i].checked){
            console.log(pendidikan[i].val())
            pendidikanString += pendidikan[i].val() + ", "
        }
    }

    let str = nama + "<br>"
    str += alamat + "<br>"
    str += kota + "<br>"
    str += tglLahir + "<br>"

    str += pendidikanString + "<br>"

    str += pekerjaan + "<br>"

    console.log(str)

    $('#viewData').html(str);
}

function bacaData3(){
    var nama = $("#nama").val()
    var alamat = $("#alamat").val()
    var kota = $("#kota").val()
    var tglLahir = $("#tglLahir").val()
    var pekerjaan = $("#pekerjaan").val()

    var pendidikan = $("#pendidikan")
    var pendidikanString = ""
    for(var i = 0; i < pendidikan.length; i++){
        if(pendidikan[i].checked){
            console.log(pendidikan[i].val())
            pendidikanString += pendidikan[i].value + ", "
        }
    }

    let str = nama + "<br>"
    str += alamat + "<br>"
    str += kota + "<br>"
    str += tglLahir + "<br>"
    str += pendidikanString + "<br>"
    str += pekerjaan + "<br>"
    console.log(str)

    $('#myModal').modal('show');
    $('.modal-title').html("Menampilkan Data Profil");
    $('.modal-body').html(str);
}

function bacaData4(){
    var nama = $("#nama").val()
    var alamat = $("#alamat").val()
    var kota = $("#kota").val()
    var tglLahir = $("#tglLahir").val()
    var pekerjaan = $("#pekerjaan").val()

    const profil = {
        'nama': nama,
        'alamat': alamat,
        'kota': kota,
        'tglLahir': tglLahir,
        'pekerjaan': pekerjaan
    }
    console.log(profil)

    $.ajax({
        url:'http://localhost:9999/json/profil.json',
        type:'GET', //http method
        contentType:'application/json',  //json data
        success: function(result){
            console.log(result);
            var str = `
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>City</th>
                        <th>Cellphone</th>
                    </tr>
                </thead>
                <tbody>
            `;

            for(i = 0; i<result.length;i++){
                str += `
                <tr>
                    <td>${result[i].nama}</td>
                    <td>${result[i].city}</td>
                    <td>${result[i].cellphone}</td>
                </tr>
                `;
            }
            str += `
                </tbody>
            </table>
            `;

            $('#myModal').modal('show');
            $('.modal-title').html("Menampilkan Data JSON");
            $('.modal-body').html(str);
        }
    })
}