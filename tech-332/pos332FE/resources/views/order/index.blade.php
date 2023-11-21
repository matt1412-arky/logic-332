@extends('layouts.app')

@section('content')
    <h3>
        Order Page
        <button class="btn btn-success" onclick="openModal()" style="float: right">+</button>
    </h3>
    <table class="table table-hover table-dark">
        <tr>
            <td>
                <button class="btn btn-dark btn-outline-light" onclick="newOrder()" disabled id="newOrder">New Order</button>
                <button class="btn btn-dark btn-outline-light" onclick="newPayment()" disabled id="payment">Payment</button>
                <button class="btn btn-dark btn-outline-light" onclick="newTrans()" id="newTrans">New Trans</button>
                <input type="text" id="header_id" size="5" style="float: right">
                <input type="text" id="reference" size="15" style="float: right">
            </td>
        </tr>
        <tr>
            <td class="px-2">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody id="orderData">

                    </tbody>
                </table>
            </td>
        </tr>
    </table>

    <script>
        function newTrans() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/orderheader',
                type: 'POST',
                dataType: 'json',
                data: {
                    reference: new Date().getTime(),
                    amount: 0
                },
                success: function(data) {
                    $('#reference').val(data.reference);
                    $('#header_id').val(data.id);
                    $('#newOrder').prop('disabled', false);
                    $('#payment').prop('disabled', false);
                    $('#newTrans').prop('disabled', true);
                }
            })
        }

        function newOrder() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/product',
                type: 'GET',
                contentType: 'application/json',
                success: function(data) {
                    var option = ` 
                                    <span>Quantity : </span> 
                                    <span>
                                        <input type="text" id="qty" value="1" size="1">
                                    </span>
                                    <table class="table table-hover table-dark" id="productTable">
                                        <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Initial</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                 `;

                    for (var i = 0; i < data.length; i++) {
                        option += `
                                    <tr>
                                        <td>
                                            <button class="btn btn-success" 
                                            value="${data[i].id}_${data[i].price}" onclick="addOrder(this.value)">
                                            <i class="bi bi-star"></i></button>
                                        </td>
                                        <td>${data[i].initial}</td>
                                        <td>${data[i].name}</td>
                                        <td>${data[i].price}</td>
                                        <td>${data[i].stock}</td>
                                    </tr>
                                  `;
                    }

                    option += `</tbody></table>`;
                    $('#mymodal').modal('show');
                    $('.modal-title').html('New Order');
                    $('.modal-body').html(option);
                    $('#productTable').DataTable({
                        "searching": true,
                        "paging": false,
                        "info": false,
                        "ordering": false
                    });
                }
            })
        }

        // function search(term) {
        //     $.ajax({
        //         url: 'http://127.0.0.1:8000/api/product/search/' + term,
        //         type: 'GET',
        //         contentType: 'application/json',
        //         success: function(data) {
        //             var option = '';

        //             for (var i = 0; i < data.length; i++) {
        //                 option += `
    //             <tr>
    //                 <td>
    //                     <button class="btn btn-success" 
    //                     value="${data[i].id}_${data[i].price}" onclick="addOrder(this.value)">
    //                     <i class="bi bi-star"></i></button>
    //                 </td>
    //                 <td>${data[i].initial}</td>
    //                 <td>${data[i].name}</td>
    //                 <td>${data[i].price}</td>
    //                 <td>${data[i].stock}</td>
    //             </tr>
    //         `;
        //             }

        //             $('#productTable tbody').html(option);
        //         },
        //         error: function(error) {
        //             console.log(error);
        //         }
        //     });
        // }

        // // Ketika nilai input pencarian berubah, panggil fungsi search()
        // $('#search').on('input', function() {
        //     var term = $(this).val();
        //     search(term);
        // });


        function getProductName(id) {
            var name = '';
            $.ajax({
                url: 'http://127.0.0.1:8000/api/product/' + id,
                type: 'GET',
                contentType: 'application/json',
                async: false,
                success: function(data) {
                    name = data.name;
                }
            })
            return name;
        }

        function loadOrderDetail() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/orderdetail/getbyheaderid/' + $('#header_id').val(),
                type: 'GET',
                contentType: 'application/json',
                success: function(data) {
                    var option = '';
                    var qtyTemp = 1;
                    var totalBelanja = 0;
                    for (var i = 0; i < data.length; i++) {
                        qtyTemp = data[i].price * data[i].qty;
                        option +=
                            `
                                <tr>
                                    <td>${getProductName(data[i].product_id)}</td>
                                    <td>${formatCurrency.format(data[i].price)}</td>
                                    <td>${data[i].qty}</td>
                                    <td>${formatCurrency.format(qtyTemp)}</td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteOrder(${data[i].id},${data[i].qty},${data[i].product_id})">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            `;
                        totalBelanja += qtyTemp;
                    }
                    option +=
                        `
                            <tr>
                                <td colspan="3"><strong>Total Belanja</strong></td>
                                <td>
                                    <strong>${formatCurrency.format(totalBelanja)}</strong>
                                    <input type="hidden" id="totalBelanja" value="${totalBelanja}">
                                </td>
                            </tr>
                        `;
                    $('#orderData').html(option);

                    // Periksa jumlah item setelah perubahan
                    if (data.length === 0) {
                        // Sembunyikan elemen total belanja jika tidak ada item
                        $('#orderData tr:last-child').hide();
                    } else {
                        // Tampilkan kembali elemen total belanja jika ada 1 lebih dari satu item
                        $('#orderData tr:last-child').show();
                    }
                }
            })
        }

        function addOrder(id_price) {
            var id = id_price.split('_')[0];
            var price = id_price.split('_')[1];
            var header_id = $('#header_id').val();
            var qty = $('#qty').val();

            $.ajax({
                url: 'http://127.0.0.1:8000/api/orderdetail',
                type: 'POST',
                dataType: 'json',
                data: {
                    header_id: header_id,
                    product_id: id,
                    price: price,
                    qty: qty
                },
                success: function() {
                    // Mengurangi stok saat pesanan ditambahkan
                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/product/' + id + '/reduceStock/' + qty,
                        type: 'PATCH',
                        success: function() {
                            loadOrderDetail();
                            $('#mymodal').modal('hide');
                        },
                        error: function(e) {
                            alert('Failed Add Order');
                        }
                    });
                },
                error: function(e) {
                    alert('Failed Add Order');
                }
            });
        }

        function deleteOrder(orderDetailId, qty, productId) {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/orderdetail/' + orderDetailId,
                type: 'DELETE',
                success: function() {
                    // Menambah stok saat order dihapus
                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/product/' + productId + '/increaseStock/' + qty,
                        type: 'PATCH',
                        success: function() {
                            loadOrderDetail();
                        },
                        error: function(e) {
                            alert('Failed Delete Order');
                        }
                    });
                },
                error: function(e) {
                    alert('Failed Delete Order');
                }
            });
        }

        function newPayment() {
            var reference = $('#reference').val();
            var header_id = $('#header_id').val();
            var amount = $('#totalBelanja').val();
            var form = `
                                Reference : 
                                <input type="text" class="form-control" id="reference" value="${reference}" disabled>
                            
                                Amount : 
                                <input type="text" class="form-control" id="amount" value="${amount}" disabled>
                        
                                Pay Money : 
                                <input type="text" class="form-control" id="payMoney" onchange="change()">
                            
                                Change Money :
                                <input type="text" class="form-control" id="changeMoney" disabled> <br>
                            <button class="btn btn-success btn-block" onclick="pay()">Pay!</button>
                       `;

            $('#mymodal').modal('show');
            $('.modal-title').html('Payment');
            $('.modal-body').html(form);
        }

        function change() {
            var amount = parseFloat($('#amount').val().replace(/[^\d.-]/g, ''));
            var pay = parseFloat($('#payMoney').val().replace(/[^\d.-]/g, ''));

            if (!isNaN(amount) && !isNaN(pay)) {
                var change = pay - amount;
                if (change >= 0) {
                    $('#changeMoney').val(change);
                } else {
                    $('#changeMoney').val('');
                    alert('Jumlah pembayaran tidak mencukupi.');
                }
            } else {
                $('#changeMoney').val('');
                alert('Silakan masukkan jumlah pembayaran yang valid.');
            }
        }

        function pay() {
            var reference = $('#reference').val();
            var header_id = $('#header_id').val();
            var amount = $('#amount').val();
            var payMoney = $('#payMoney').val();
            var changeMoney = $('#changeMoney').val();

            var form = `
                            Reference : 
                            <input type="text" class="form-control" id="reference" value="${reference}" disabled>
                            Amount : 
                            <input type="text" class="form-control" id="amount" value="${formatCurrency.format(amount)}" disabled>
                            Pay Money : 
                            <input type="text" class="form-control" id="payMoney" value="${formatCurrency.format(payMoney)}" disabled>
                            Change Money :
                            <input type="text" class="form-control" id="changeMoney" value="${formatCurrency.format(changeMoney)}" disabled> <br>
                            <button class="btn btn-success btn-block">Close</button>
                       `;

            $('#mymodal').modal('show');
            $('.modal-title').html('Payment: Terimakasih!');
            $('.modal-body').html(form);
            // Melakukan update ke dalam tabel orderheader hanya untuk amount
            $.ajax({
                url: 'http://127.0.0.1:8000/api/orderheader/' + header_id,
                type: 'PATCH',
                dataType: 'json',
                data: {
                    amount: amount
                },
                success: function(data) {
                    // Berhasil melakukan update, bisa ditambahkan pesan atau tindakan lanjutan
                    location.reload(1);
                    alert('Payment Success.');
                },
                error: function(e) {
                    alert('Failed to update order header.');
                    // console.log(e.responseText);
                }
            });
        }
    </script>
@endsection
