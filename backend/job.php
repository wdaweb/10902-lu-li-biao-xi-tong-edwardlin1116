<div style="width:99%; height:90%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">求職條件</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="30%">職類</td>
                    <td width="10%">工作性質</td>
                    <td width="10%">待遇</td>
                    <td width="30%">地點</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                    $table=$do;
                    $db=new DB($table);
                    $rows=$db->all();
                    foreach($rows as $row){
                        $isChk=($row['sh']==1)?'checked':'';
                ?>
                <tr class='cent'>
                    <td width="20%">
                        <input type="text" name="category[]" value="<?=$row['category'];?>">
                    </td>
                    <td width="20%">
                        <input type="text" name="property[]" value="<?=$row['property'];?>">
                    </td>
                    <td width="20%">
                        <input type="text" name="salary[]" value="<?=$row['salary'];?>">
                    </td>
                    <td width="20%">
                        <input type="text" name="place[]" value="<?=$row['place'];?>">
                    </td>
                    <td width="7%"><input type="radio" name="sh" value="<?=$row['id'];?>" <?=$isChk;?>> </td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/job.php?table=<?=$table;?>&#39;)"
                            value="新增工作資料"></td>
                    <input type="hidden" name="table" value='<?=$table;?>'>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>