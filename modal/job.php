<h3 class="cent">新增求職條件</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">職類：</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td style="text-align:right">工作性質：</td>
            <td><input type="text" name="year"></td>
        </tr>
        <tr>
            <td style="text-align:right">待遇：</td>
            <td><input type="text" name="year"></td>
        </tr>
        <tr>
            <td style="text-align:right">地點：</td>
            <td><input type="text" name="year"></td>
        </tr>        
    </table>
    <div style="width:100px;margin:auto">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>