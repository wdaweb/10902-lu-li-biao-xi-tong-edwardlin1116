<?php
include_once "base.php";

if(empty($_SESSION['login'])){
?>
    <script>
        alert('非法登入，請重新登入');
        location.href = 'index.php?do=login'
    </script>
<?php
}

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>個人履歷管理系統</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
    <style>
    body{
        background: url("img/background/backend-bg.jpg") no-repeat center center / cover;
    }
    </style>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <div id="main">
        <?php
            $title=new DB('title') ;
            $ti=$title->find(['sh'=>1]);
        ?>
        <a title="<?=$ti['text'];?>" href="index.php">
            <div class="ti" style="background:url(&#39;img/carousel/<?=$ti['img'];?>&#39;); background-size:cover;"></div>
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <span class="t botli">後台管理選單</span>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=title">
                        <div class="mainmu">圖片管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=about">
                        <div class="mainmu">個人簡介 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=skill">
                        <div class="mainmu">專業技能 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=edu">
                        <div class="mainmu">學歷 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=exp">
                        <div class="mainmu">工作經歷 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=job">
                        <div class="mainmu">求職條件 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=auto">
                        <div class="mainmu">自傳 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=portf">
                        <div class="mainmu">作品集 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin">
                        <div class="mainmu">管理者帳號管理 </div>
                    </a>
                </div>
                
            </div>
            <div class="di"
                style="height:663px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><button onclick="location.replace(&#39;api/logout.php&#39;)"
                                    style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php
				    $do=(!empty($_GET['do']))?$_GET['do']:'title';
				    $file='backend/'.$do.".php";
				    if(file_exists($file)){
				    	include $file;
				    }else{
				    	include 'backend/title.php';
				    }
				?>
            </div>
        
        </div>
        
    </div>
</body>
</html>