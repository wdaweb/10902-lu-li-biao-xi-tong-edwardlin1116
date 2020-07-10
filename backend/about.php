<div style="width:99%; height:90%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">個人簡介</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="20%">個人照</td>
                    <td width="5%">姓名</td>
                    <td width="5%">年齡</td>
                    <td width="5%">工作經歷</td>
                    <td width="5%">國家</td>
                    <td width="5%">城市</td>
                    <td width="5%">電話</td>
                    <td width="10%">email</td>
                    <td width="5%">狀態</td>
                    <td width="20%">簡介</td>
                    <td></td>
                </tr>
                <?php
                    $table = $do;
                    $db = new DB($table);
                    $rows = $db->find(1);                    
                ?>
                <tr>
                    <td width="20%"><img src='img/about/<?=$rows['img'];?>' style="width:100px"></td>
                    <td width="5%"><input type="text" name="name[]" value="<?=$rows['name'];?>"> </td>
                    <td width="5%"><input type="text" name="year[]" value="<?=$rows['year'];?>"> </td>
                    <td width="5%"><input type="text" name="exp[]" value="<?=$rows['exp'];?>"> </td>
                    <td width="5%"><input type="text" name="country[]" value="<?=$rows['country'];?>"> </td>
                    <td width="5%"><input type="text" name="city[]" value="<?=$rows['city'];?>"> </td>
                    <td width="5%"><input type="text" name="phone[]" value="<?=$rows['phone'];?>"> </td>
                    <td width="10%"><input type="text" name="email[]" value="<?=$rows['email'];?>"> </td>
                    <td width="5%"><input type="text" name="status[]" value="<?=$rows['status'];?>"> </td>
                    <td width="20%"><textarea style="width:90%;height:50px;" name="introduction[]"><?=$rows['introduction'];?></textarea></td>
                    <td><input type="button" value="更新圖片"
                            onclick="op('#cover','#cvr','modal/upload_about.php?id=<?=$row['id'];?>&table=<?=$table;?>')">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$rows['id'];?>">
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/about.php?table=<?=$table;?>&#39;)"
                            value="新增個人資料"></td>
                    <input type="hidden" name="table" value='<?=$table;?>'>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>