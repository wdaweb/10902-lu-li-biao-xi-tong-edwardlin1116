<h3 class="cent">新增學校名稱</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">學校名稱：</td>
            <td><input type="text" name="school"></td>
        </tr>
        <tr>
            <td style="text-align:right">期間：</td>
            <td><input type="text" name="year"></td>
        </tr>
        <tr>
            <td style="text-align:right">科系：</td>
            <td><input type="text" name="dep"></td>
        </tr>
    </table>
    <div style="width:100px;margin:auto">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>