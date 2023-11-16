function bacaData2(){
    var nama = $("#nama").val()
    var alamat = $("#alamat").val()
    var kota = $("#kota").val()
    var tgl_lahir = $("#tgl_lahir").val()
    var pekerjaan = $("#pekerjaan").val()

    var pendidikan = $("#pendidikan")
    var pendidikanString = ""
    for(var i = 0; i < pendidikan.length; i++){
        if(pendidikan[i].checked){
            console.log(pendidikan[i].value)
            pendidikanString += pendidikan[i].value + ", "
        }
    }

    let str = nama + "<br>"
    str += alamat + "<br>"
    str += kota + "<br>"
    str += tgl_lahir + "<br>"

    str += pendidikanString + "<br>"

    str += pekerjaan + "<br>"

    console.log(str)

    $('#viewData').innerHTML = str;
}

function bacaData3(){
    var nama = $("#nama").val()
    var alamat = $("#alamat").val()
    var kota = $("#kota").val()
    var tgl_lahir = $("#tgl_lahir").val()
    var pekerjaan = $("#pekerjaan").val()

    var pendidikan = $("#pendidikan")
    var pendidikanString = ""
    for(var i = 0; i < pendidikan.length; i++){
        if(pendidikan[i].checked){
            console.log(pendidikan[i].value)
            pendidikanString += pendidikan[i].value + ", "
        }
    }

    let str = nama + "<br>"
    str += alamat + "<br>"
    str += kota + "<br>"
    str += tgl_lahir + "<br>"
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
    var tgl_lahir = $("#tgl_lahir").val()
    var pekerjaan = $("#pekerjaan").val()

    const profil = {
        'nama':nama,
        'alamat':alamat,
        'kota':kota,
        'tgl_lahir':tgl_lahir,
        'pekerjaan':pekerjaan
    }
    console.log(profil);
    $('#myModal').modal('show');
        $('.modal-title').html("Menampilkan Data Profil");
        $('.modal-body').html(str);
}

$.ajax({
    url: 'http://localhost:8888/json/profil.json',
    type: 'GET',
    contentType: 'application/json',
    success: function(result) {
        console.log(result);
        var str = `<table class = "table table-primary">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>City</th>
                    <th>Cell Phone</th>
                </tr>
            </thead>
            <tbody>`;
        
        for (var i = 0; i < result.length; i++) {
            str += `<tr>
                <td>${result[i].nama}</td>
                <td>${result[i].city}</td>
                <td>${result[i].cellPhone}</td>
            </tr>`;
        }
        
        str += `</tbody></table>`;

        $('#myModal').modal('show');
        $('.modal-title').html("Menampilkan Data Profil");
        $('.modal-body').html(str);
    }
});
