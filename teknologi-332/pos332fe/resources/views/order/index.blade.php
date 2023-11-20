@extends('layouts.app')

@section('content')

<h3>
    Order Page
</h3>

<table class="table table-striped">
        <tr>
            <td>
                <button class="btn btn-primary" onclick="newOrder()" disabled id="newOrder">New Order</button>
                <button class="btn btn-danger" disabled id="payment" onclick="payment()">Paymen</button>
                <button class="btn btn-success" onclick="newTrans()" id="newTrans">New Trans</button>
                <input type="text" id="header_id" size="5" style="float:right">
                <input type="text" id="reference" size="15" style="float:right">
            </td>
            
        </tr>
        <tr>
            <td style="padding: 5px;">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Product</td>
                            <td align="right">Price</td>
                            <td align="right">Quantity</td>
                            <td align="right">Amount</td>
                            <td align="right">Remove</td>
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
        const orderHeaderData = {
                reference:new Date().getTime(),
                amount:0,
                create_by:1,
                updated_by:1
        };

        $.ajax({
            url:'http://localhost:8000/api/orderheader',
            type:'post',
            dataType:'json',
            data:orderHeaderData,
            success:function(orderheader) {
                console.log(orderheader);
                $('#reference').val(orderheader.reference);
                $('#header_id').val(orderheader.id);
            }
        });

        $('#newOrder').attr('disabled', false);
        $('#payment').attr('disabled', false);
        $('#newTrans').attr('disabled', true);
    }

    function getProductName(id) {
        var name = '';
        $.ajax({
            url:'http://localhost:8000/api/product/'+id,
            type:'get',
            contentType:'application/json',
            async:false,
            success:function(product) {
                console.log(product);
                name =  product.name;
            }
        });
        return name;
    }

    function loadOrderDetail() {
        $.ajax({
            url:'http://localhost:8000/api/orderdetail/getByHeaderId/'+$('#header_id').val(),
            type:'get',
            contentType:'application/json',
            success:function(orderdetail) {
                var orderData = '';
                var qtyTemp = 1;
                var totalBelanja = 0; 
                for(i=0; i<orderdetail.length; i++){
                    qtyTemp = orderdetail[i].price * orderdetail[i].quantity;
                    var ordId = orderdetail[i].id;
                    var proId = orderdetail[i].product_id;
                    var qty = orderdetail[i].quantity;

                    orderData += `
                        <tr>
                            <td>${getProductName(orderdetail[i].product_id)}</td>
                            <td align="right">${formatter.format(orderdetail[i].price)}</td>
                            <td align="right">${orderdetail[i].quantity}</td>
                            <td align="right">${formatter.format(qtyTemp)}</td>
                            <td align="right"><button class="btn btn-danger" onclick="del(${ordId}, ${proId}, ${qty})"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></button></td>
                        </tr>    
                    `;
                    totalBelanja += qtyTemp;
                }
                orderData += `
                    <tr>
                        <td>Total belanja</td>
                        <td colspan ="3" align="right">
                            ${formatter.format(totalBelanja)}
                            <input type="hidden" id="totalBelanja" value="${totalBelanja}">
                        </td>
                        <td></td>
                    </tr>
                    
                `;
                $('#orderData').html(orderData);
            }
        });
    }
    
    function newOrder() {
        // console.log("+++++++++++++++++++")
        $.ajax({
            url:'http://localhost:8000/api/product',
            type:'get',
            contentType:'application/json',
            success:function(product) {
                console.log(product);
                var str = `
                <span>Quantity : </span><span><input type ="text"  id="qty" value="1" size="3"></span>
                <span style="float:right"><input type ="text" id="textSearch" size="10" onchange="search(this.value)"></span>
                <span style="float:right">Search : &nbsp; </span>
                <table class="table">
                <thead>
                    <tr>
                        <td>Select</td>
                        <td>Initial</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Stock</td>
                    </tr>
                </thead>
                <tbody id= "productData">
                `;
                for(i=0; i<product.length; i++) {
                    str += `
                        <tr>
                            <td><button class="btn btn-success" value="${product[i].id}_${product[i].price}" onclick="addOrder(this.value)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg></button></td>
                            <td>${product[i].initial}</td>
                            <td>${product[i].name}</td>
                            <td>${product[i].price}</td>
                            <td>${product[i].stock}</td>
                        </tr>
                    `;
                }
                str += `</tbody></table>`; 
                $('#myModal').modal('show');
                $('.modal-title').html('Choose Product');
                $('.modal-body').html(str);
            }
        });
    }

    function search(textSearch) {
        var url = "";
        if(textSearch) url = 'http://localhost:8000/api/product/search/'+textSearch;
            else url = 'http://localhost:8000/api/product';
        $.ajax({
            url:url,
            type:'get',
            contentType:'application/json',
            success:function(product) {
                console.log(product);
                var str = "";
                for(i=0; i<product.length; i++) {
                    str += `
                        <tr>
                            <td><button class="btn btn-success" value="${product[i].id}_${product[i].price}" onclick="addOrder(this.value)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg></button></td>
                            <td>${product[i].initial}</td>
                            <td>${product[i].name}</td>
                            <td>${product[i].price}</td>
                            <td>${product[i].stock}</td>
                        </tr>
                    `;
                }
                $('#productData').html(str);
            }
        });  
    }

    function reduceStock(id, qty) {
        $.ajax({
            url:'http://localhost:8000/api/product/reduceStock/'+id+'/'+qty,
            type:'get',
            contentType:'application/json',
            success:function(product) {
                console.log(product);
            }
        });   
    
    }

    function increaseStock(id, qty) {
        $.ajax({
            url:'http://localhost:8000/api/product/increaseStock/'+id+'/'+qty,
            type:'get',
            contentType:'application/json',
            success:function(product) {
                console.log(product);
            }
        });   
    
    }

    function addOrder(id_price) {
        var splitIdPrice = id_price.split("_");
        console.log(splitIdPrice);
        var qty = $('#qty').val();
        // var price = $('#quantity').val() * splitIdPrice([1]);
        var header_id = $('#header_id').val();

        const dataOrder = {
            header_id: header_id,
            product_id: splitIdPrice[0],
            quantity: qty,
            price: splitIdPrice[1],
            create_by: 1,
            updated_by: 1
        };
        console.log(dataOrder);
        
        $.ajax({
            url:'http://localhost:8000/api/orderdetail',
            type:'post',
            dataType:'json',
            data:dataOrder,
            success:function(orderdetail) {
                console.log(orderdetail);
                reduceStock(orderdetail.product_id, orderdetail.quantity);
            },error:function(e){
                console.log(orderdetail);
            }
        });

        loadOrderDetail();
    }

    function del(ordId, proId, qty) {
        $.ajax({
            url:'http://localhost:8000/api/orderdetail/'+ordId,
            type:'delete',
            contentType:'application/json',
            success:function(result){
                console.log(result);
                increaseStock(proId, qty);
                loadOrderDetail();
            }
        });
    }

    function payment() {
        var reference = $('#reference').val();
        var header_id = $('#header_id').val();
        var amount = $('#totalBelanja').val();
        var form = `
            Reference : <input type="text" disabled id="ref" value="${reference}" class="form-control">
            Amount : <input type="text" disabled id="amo" value="${amount}" class="form-control">
            Pay Money : <input type="text" id="payMoney" class="form-control" onchange="change()">
            Change : <input type="text" disabled id="change" class="form-control"><br> 
            <button class="btn btn-danger btn-lg btn-block" onclick="pay()">Pay!</button>
        `;

        $('#myModal').modal('show');
        $('.modal-title').html('Payment');
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
        var header_id = $('#header_id').val();
        var amount = $('#amo').val();
        var payMoney = $('#payMoney').val();
        var change = $('#change').val();
        var form = `
            Reference : <input type="text" disabled id="ref2" value="${reference}" class="form-control">
            Amount : <input type="text" disabled id="amo2" value="${amount}" class="form-control">
            Pay Money : <input type="text" disabled id="payMoney2" class="form-control" onchange="change()">
            Change : <input type="text" disabled id="change2" class="form-control"><br>
            <button class="btn btn-primary" onclick="javascript:location.reload()">Close</button>
        `;

        $('#myModal2').modal('show');
        $('.modal-title2').html('Struck Pembayaran');
        $('.modal-body2').html(form);

        $('#ref2').val(reference);
        $('#amo2').val(amount);
        $('#payMoney2').val(payMoney);
        $('#change2').val(change);
    

    //update data amount di table order header
        const orderheader = {
            reference:reference,
            amount:amount,
            create_by: 1,
            updated_by: 1
        };

        $.ajax({
            url:'http://localhost:8000/api/orderheader/'+header_id,
            type:'put',
            dataType:'json',
            data:orderheader,
            success:function(result) {
                console.log(result);
            },error:function(e) {
                console.log(e.responseText);
            }
        });
    }

</script>

@endsection