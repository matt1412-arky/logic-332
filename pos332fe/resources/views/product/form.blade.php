<input type="hidden" id="id">
<table class="table">
    <tr>
        <td>Category</td>
        <td>
            <select id="selectCategory" onclick="getSelectVarianByCategory(this.value)">
            </select>
        </td>
    </tr>
    <tr>
        <td>Varian</td>
        <td>
            <select id="selectVarian">
            </select>
        </td>
    </tr>
    <tr>
        <td>Initial</td>
        <td><input type=" text" id="initial" class="form-control" maxlength="5">
        </td>
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
        <td>price</td>
        <td><input type="number" id="price" class="form-control"></td>
    </tr>
    <tr>
        <td>stock</td>
        <td><input type="text" id="stock" class="form-control" maxlength="30"></td>
    </tr>
    <!-- <tr>
        <td>Create_by</td>
        <td><input type="text" id="create_by" class="form-control"></td>
    </tr>
    <tr>
        <td>Updated_by</td>
        <td><input type="text" id="updated_by" class="form-control"></td>
    </tr> -->
    <tr>
        <td colspan="2"><input id="btnSimpan" type="button" class="btn btn-primary" onclick="simpan()" value="simpan" style="float: right;"></td>
        <button id="btnUpdate" class="btn btn-success" onclick="update(this.value)">Update</button>
        <!-- <td colspan="2"><input id="btnUpdate" type="button" class="btn btn-success" onclick="update()" value="update" style="float: right;"></td> -->
        <!-- <td colspan="2"><input id="btnDelete" type="button" class="btn btn-danger" onclick="hapus()" value="delete" style="float: right;"></td> -->
        <button id="btnDelete" class="btn btn-danger" onclick="hapus(this.value)">Update</button>
    </tr>
</table>