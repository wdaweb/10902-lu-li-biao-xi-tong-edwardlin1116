<h3 class="cent">新增標題區圖片</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">個人照：</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td style="text-align:right">名字：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td style="text-align:right">年齡：</td>
            <td><input type="text" name="year"></td>
        </tr>
        <tr>
            <td style="text-align:right">年資：</td>
            <td><input type="text" name="exp"></td>
        </tr>
        <tr>
            <td style="text-align:right">國家：</td>
            <td><input type="text" name="country"></td>
        </tr>
        <tr>
            <td style="text-align:right">城市：</td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td style="text-align:right">手機號碼：</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td style="text-align:right">Email：</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td style="text-align:right">狀態：</td>
            <td><input type="text" name="status"></td>
        </tr>
        <tr>
            <td style="text-align:right">簡介：</td>
            <td>
            <textarea type="text" name="introduction"></textarea></td>
        </tr>
    </table>
    <div style="width:100px;margin:auto">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>