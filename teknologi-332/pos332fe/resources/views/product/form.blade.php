<input type="hidden" id="id">
<table class="table">
    <tr>
        <td>Category</td>
        <td>
            <select class="form-select" id="selectCategory" onclick="getSelectVarianByCategory(this.value)">
            </select>
        </td>
    </tr>
    <tr>
        <td>Varian *)</td>
        <td>
            <select class="form-select" id="selectVarian"> <!--onclick="getSelectCategory(this.value)"-->
            </select>
            <span id="varianMessage" class="valid"></span>
        </td>
    </tr>
    <tr>
        <td>Initial *)</td>
        <td><input type="text" id="initial" class="form-control" maxlength="5"></td>
        <span id="initialMessage" class="valid"></span>
    </tr>
    <tr>
        <td>Name *)</td>
        <td><input type="text" id="name" class="form-control" maxlength="30"></td>
        <span id="nameMessage" class="valid"></span>
    </tr>
    <tr>
        <td>Description</td>
        <td><input type="text" id="description" class="form-control" maxlength="30"></td>
        <span id="descMessage" class="valid"></span>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type="number" id="price" class="form-control" maxlength="30"></td>
        <span id="priceMessage" class="valid"></span>
    </tr>
    <tr>
        <td>Stock</td>
        <td><input type="number" id="stock" class="form-control" maxlength="30"></td>
        <span id="stockMessage" class="valid"></span>
    </tr>
    
    <tr>
        <td colspan="2" align="right">
            <input id="btnSimpan" type="button" class="btn btn-primary" onclick="simpan()" value="Simpan">
            <button id="btnUpdate" class="btn btn-warning" onclick="update(this.value)">Update</button>
        </td>
    </tr>
</table>
<script>
    
</script>