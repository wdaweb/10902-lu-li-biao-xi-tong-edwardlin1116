<div style="width:99%; height:90%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">作品集</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">圖片</td>
                    <td width="12%">文字</td>
                    <td width="12%">連結</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $table = $do;
                    $db = new DB($table);
                    $rows = $db->all($row['sh']=1);
                    foreach ($rows as $row) {
                        $isChk = ($row['sh'] == 1) ? 'checked' : '';
                ?>
                <tr>
                    <td width="45%"><img src='img/portfolio/<?=$row['img'];?>' style="width:100px;height:100px"></td>
                    <td width="23%"><input type="text" name="text[]" value="<?=$row['text'];?>"> </td>
                    <td width="23%"><input type="text" name="href[]" value="<?=$row['href'];?>"> </td>
                    <td width="7%"><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>> </td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <td><input type="button" value="更新圖片"
                            onclick="op('#cover','#cvr','modal/upload_portf.php?id=<?=$row['id'];?>&table=<?=$table;?>')">
                    </td>
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
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/portf.php?table=<?=$table;?>&#39;)"
                            value="新增作品"></td>
                    <input type="hidden" name="table" value='<?=$table;?>'>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>