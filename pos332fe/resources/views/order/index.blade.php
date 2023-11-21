@extends('layouts.app')

@section('content')

<h3>
    Order Page
    <!-- <button class="btn btn-success" onclick="openForm()" style="float: right;">+</button> -->
</h3>
<table id="tableOrder" class="table table-striped">
    <tr>
        <td>
            <button class="btn btn-primary" disabled onclick="newOrder()" id="newOrder">New Order</button>
            <button class="btn btn-danger" disabled id="payment" onclick="payment()">Payment</button>
            <button class="btn btn-success" onclick="newTrans()" id="newTrans">New Trans</button>
            <input type="text" id="header_id" size="5" style="float: right;" placeholder="Header ID">
            <input type="text" id="reference" size="15" style="float: right;" placeholder="Reference">
        </td>
    </tr>
    <tr>
        <td style="padding: 5px;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody id="orderData">
                    <!-- Data produk akan ditampilkan di sini -->
                </tbody>
            </table>
        </td>
    </tr>
</table>


<script>
    function newTrans() {
        const orderHeaderData = {
            reference: new Date().getTime(),
            amount: 0,
        }
        $.ajax({
            url: 'http://127.0.0.1:8000/api/orderheader',
            type: 'post',
            dataType: 'json',
            data: orderHeaderData,
            success: function(orderheader) {
                console.log(orderheader);
                $('#reference').val(orderheader.reference);
                $('#header_id').val(orderheader.id);
            }
        })
        $('#newOrder').attr('disabled', false);
        $('#payment').attr('disabled', false);
        $('#newTrans').attr('disabled', true);
    }

    function getProductById(id) {
        var name = '';
        $.ajax({
            url: 'http://127.0.0.1:8000/api/product/' + id,
            type: 'get',
            contentType: 'application/json',
            async: false,
            success: function(product) {
                name = product.name;
            }
        })
        return name;
    }

    function loadOrderDetail() {
        var totalBelanja = 0;
        var qtyTemp = 1;
        $.ajax({
            url: 'http://127.0.0.1:8000/api/orderdetail/getByHeaderId/' + $('#header_id').val(),
            type: 'get',
            contentType: 'application/json',
            success: function(orderdetail) {
                var orderData = '';
                for (i = 0; i < orderdetail.length; i++) {
                    var ordId = orderdetail[i].id;
                    var proId = orderdetail[i].product_id;
                    var qty = orderdetail[i].quantity
                    var qtyTemp = orderdetail[i].price * orderdetail[i].quantity;
                    orderData += `
                    <tr>
                        <td>${getProductById(orderdetail[i].product_id)}</td>
                        <td>${formatter.format(orderdetail[i].price)}</td>
                        <td>${orderdetail[i].quantity}</td>
                        <td>${formatter.format(qtyTemp)}</td>
                        <td><button id="btnDelete" class="btn btn-danger" onclick ="hapusPesanan(${ordId},${proId},${qty})">Delete</button></td>
                    </tr>
                `;
                    totalBelanja += qtyTemp;
                }
                // totalBelanja = formatter.format(totalBelanja);
                orderData += `
                <tr>
                <td>Total Belanja</td>
                <td colspan = '3' align ="right">${totalBelanja}</td>
                ${formatter.format(totalBelanja)}
                <input type ="hidden" id="totalBelanja" value="${totalBelanja}">
                `
                $('#orderData').html(orderData);

            }
        });
    }

    function reduceStock(id, qty) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/product/reduceStock/' + id + '/' + qty,
            type: 'get',
            contentType: 'application/json',
            success: function(product) {
                console.log(product);

            }
        })
    }

    function increasesStock(id, qty) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/product/increasesStock/' + id + '/' + qty,
            type: 'get',
            contentType: 'application/json',
            success: function(product) {
                console.log(product);
            }
        })
    }

    function newOrder() {

        $.ajax({
            url: 'http://127.0.0.1:8000/api/product',
            type: 'get',
            contentType: 'application/json',
            success: function(products) {
                console.log(products);
                var str = `
                <div class="row">
                    <div class="col-md-6">
                        <span>Quantity:</span>
                        <span><input type="text" class="form-control" id="qty"></span>
                    </div>
                    <div class="col-md-6">
                        <span>Search:</span>
                        <span><input type="text" class="form-control" id="textSearch" onchange="search(this.value)"></span>
                    </div>
                </div>

                <br>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Initial</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>
                    <thead>
                    <tbody id="productData">
                    `;


                for (var i = 0; i < products.length; i++) {
                    if (products[i].stock > 0) {
                        str += `

                        <tr>
                            <td><button class="btn btn-warning" value='${products[i].id}_${products[i].price}' onclick='addOrder(this.value)'><<</button></td>
                            <td>${products[i].initial}</td>
                            <td>${products[i].name}</td>
                            <td>${products[i].price}</td>
                            <td>${products[i].stock}</td>
                        </tr>`;
                    }


                }

                str += `
                </tbody>
                </table>`;

                $('#myModal').modal('show');
                $('.modal-title').html("Choose Product");
                $('.modal-body').html(str);
            },
        });
    }


    function addOrder(id_price) {
        var splitIdPrice = id_price.split('_');
        console.log(splitIdPrice);

        var qty = $('#qty').val();
        var price = splitIdPrice[1];
        var header_id = $('#header_id').val();

        const dataOrder = {
            header_id: header_id,
            product_id: splitIdPrice[0],
            quantity: qty,
            price: splitIdPrice[1]
        }
        console.log(dataOrder);
        $.ajax({
            url: 'http://127.0.0.1:8000/api/orderdetail',
            type: 'post',
            dataType: 'json',
            data: dataOrder,
            success: function(orderdetail) {
                console.log(orderdetail);
                loadOrderDetail();
                reduceStock(orderdetail.product_id, orderdetail.quantity);
                newOrder();

            },
            error: function(error) {
                console.log(error.responseText);

            }
        });
    }

    function hapusPesanan(ordId, proId, qty) {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/orderdetail/' + ordId,
            type: 'delete',
            contentType: 'application/json',
            success: function(orderdetail) {
                loadOrderDetail();
                increasesStock(proId, qty);
            },
            error: function(error) {
                console.log(error.responseText);
            }
        });
    }

    function payment() {
        var header_id = $('#header_id').val()
        var reference = $('#reference').val();
        var amount = $('#totalBelanja').val();
        var form = `
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Reference</th>
                        <td><input type="text" disabled id="ref" value="${reference}" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row">Amount</th>
                        <td><input type="text" disabled id="amo" value="${amount}" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row">Pay Money</th>
                        <td><input type="text" id="payMoney" class="form-control" onchange="change()"></td>
                    </tr>
                    <tr>
                        <th scope="row">Change</th>
                        <td><input type="text" disabled id="change" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-danger btn-block" onclick="pay()">Pay!!!</button>
        `;

        $('#myModal').modal('show');
        $('.modal-title').html("Pembayaran");
        $('.modal-body').html(form);
    }

    function change() {
        var amount = $('#amo').val();
        var payMoney = $('#payMoney').val();
        var change = payMoney - amount;
        $('#change').val(change);
    }

    function pay() {
        var reference = $('#reference').val();
        var amount = $('#amo').val();
        var payMoney = $('#payMoney').val();
        var change = $('#change').val();
        var header_id = $('#header_id').val()

        var form1 = `
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Reference</th>
                        <td><input type="text" disabled id="ref2" value="${reference}" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row">Amount</th>
                        <td><input type="text" disabled id="amo2" value="${amount}" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row">Pay Money</th>
                        <td><input type="text" disabled id="payMoney2" value="${payMoney}" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row">Change</th>
                        <td><input type="text" disabled id="change2" value="${change}" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-danger btn-block" onclick="javascript:location.reload()">CLose</button>
        `;

        $('#myModal').modal('show');
        $('.modal-title').html("Success Payment");
        $('.modal-body').html(form1);


        const orderheader = {
            reference: reference,
            amount: amount,

        }
        $.ajax({
            url: 'http://127.0.0.1:8000/api/orderheader/' + header_id,
            type: 'put',
            dataType: 'json',
            data: orderheader,
            success: function(result) {
                console.log(result);
            },
            error: function(error) {
                console.log(error.responseText);
            }

        })
    }

    function search(id) {
        var str = "";
        var url = id ? 'http://127.0.0.1:8000/api/product/search/' + id : 'http://127.0.0.1:8000/api/product';

        $.ajax({
            url: url,
            type: 'get',
            contentType: 'application/json',
            success: function(products) {
                console.log(products);

                for (var i = 0; i < products.length; i++) {
                    if (products[i].stock > 0) {
                        str += `
                        <tr>
                            <td><button class="btn btn-warning" value='${products[i].id}_${products[i].price}' onclick='addOrder(this.value)'><<</button></td>
                            <td>${products[i].initial}</td>
                            <td>${products[i].name}</td>
                            <td>${products[i].price}</td>
                            <td>${products[i].stock}</td>
                        </tr>`;
                    }
                }

                $('#productData').html(str);
            },
            error: function(error) {
                console.log(error.responseText);
            }
        });
    }
</script>
@endsection