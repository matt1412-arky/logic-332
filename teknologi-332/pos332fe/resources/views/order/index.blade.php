@extends('layouts.app')

@section('content')

<h3>
    Order Page
</h3>

<table class="table table-striped">
        <tr>
            <td>
                <button class="btn btn-primary" onclick="newOrder()">New Order</button>
                <button class="btn btn-secondary">Paymen</button>
                <button class="btn btn-success" onclick="newTrans()">New Trans</button>
                <input type="text" id="header_id" size="5" style="float:right">
                <input type="text" id="reference" size="15" style="float:right">
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
    }
    
    function newOrder() {
        // console.log("+++++++++++++++++++")
        $.ajax({
            url:'http://localhost:8000/api/product',
            type:'get',
            contentType:'application/json',
            success:function(product) {
                console.log(product);
                var str = `<table class="table">
                    <tr>
                        <th>Select</th>
                        <th>Initial</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>
                `;
                for(i=0; i<product.length; i++) {
                    str += `
                        <tr>
                            <td><button class="btn btn-warning"><<</button></td>
                            <td>${product[i].initial}</td>
                            <td>${product[i].name}</td>
                            <td>${product[i].price}</td>
                            <td>${product[i].stock}</td>
                        </tr>
                    `;
                }
                str += `</table>`; 
                $('#myModal').modal('show');
                $('.modal-title').html('Choose Product');
                $('.modal-body').html(str);
            }
        });
    }
</script>

@endsection