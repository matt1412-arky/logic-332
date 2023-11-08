function bacaData2() {
    var nama = $('#nama').val();
    var alamat = $('#alamat').val();
    var kota = $('#kota').val();
    var tgl_lahir = $('#tgl_lahir').val();

    let str = nama + "<br>";
        // str += gndr + "<br>";
        str += alamat + "<br>";
        str += kota + "<br>";
        str += tgl_lahir + "<br>";

    $('#viewData').html(str);
    
}

function bacaData3() {
    var nama = $('#nama').val();
    var alamat = $('#alamat').val();
    var kota = $('#kota').val();
    var tgl_lahir = $('#tgl_lahir').val();

    let str = nama + "<br>";
        // str += gndr + "<br>";
        str += alamat + "<br>";
        str += kota + "<br>";
        str += tgl_lahir + "<br>";

    $('#myModal').modal('show')
    $('.modal-title').html('Menampilkan Data Profil')
    $('.modal-body').html(str)
    
}


function bacaData4() {
    var nama = $('#nama').val();
    var alamat = $('#alamat').val();
    var kota = $('#kota').val();
    var tgl_lahir = $('#tgl_lahir').val();

    const profil = {
        'nama' :nama,
        'alamat' :alamat,
        'kota' :kota,
        'tgl_lahir' :tgl_lahir
    }
    console.log(profil)

    $.ajax({
        url:'http://localhost:8888/json/profil.json',
        type:'GET', //http method
        contentType:'application/json', //json data
        success: function(result) {
            console.log(result)
            var str = `<table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>City</th>
                        <th>Cell Phone</th>
                    </tr>
                </thead>
                <tbody>`
                for(i=0; i<result.length; i++) {
                    str += `<tr>
                                <td>${result[i].nama}</td>
                                <td>${result[i].city}</td>
                                <td>${result[i].cellPhone}</td>
                            </tr>`;
                }
                str += `</tbody>
                </table>`;

                $('#myModal').modal('show')
                $('.modal-title').html('Menampilkan Data json')
                $('.modal-body').html(str)
            }
    })
}