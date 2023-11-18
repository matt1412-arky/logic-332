<input type="hidden" id="id">
<table class="table table-hover table-dark">
    <tr>
        <td>Category</td>
        <td>
            <select id="category" onclick="getSelectVariant(this.value)">
            </select>
        </td>
    </tr>
    <tr>
        <td>Variant</td>
        <td>
            <select id="variant">
            </select>
        </td>
    </tr>
    <tr>
        <td>Initial</td>
        <td><input type="text" id="initial" class="form-control" maxlength="5"></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type="text" id="name" class="form-control" maxlength="30"></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><input type="text" id="description" class="form-control"></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type="number" id="price" class="form-control" maxlength="8"></td>
    </tr>
    <tr>
        <td>Stock</td>
        <td><input type="number" id="stock" class="form-control"></td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <input type="button" class="btn btn-primary" id="btnSimpan" onclick="simpan()" value="Save">
            <button class="btn btn-primary" id="btnUpdate" onclick="update(this.value)">Update</button>
    </tr>
</table>
