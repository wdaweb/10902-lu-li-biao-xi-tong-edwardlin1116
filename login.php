<?php
    include_once "base.php";
    if(!empty($_POST['acc']) && !empty($_POST['pw'])){
        $admin=new DB("admin");
        $acc=$_POST['acc'];
        $pw=$_POST['pw'];
        $chk=$admin->count(['acc'=>$acc,'pw'=>$pw]);
        if($chk>0){
            to("admin.php");
            $_SESSION['login']=$acc;
        }else{
            echo "<script>alert('帳號或密碼錯誤')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login">
        <form class="form" action="" method="post">
            <h2>登入</h2>
            <div class="group">
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="acc" placeholder="請輸入帳號">
            </div>
            <div class="group">
                <label for="pw">密碼</label>
                <input type="password" name="pw" id="pw" placeholder="請輸入密碼">
            </div>
            <div class="btn_group">
                <button class="btn">登入</button>
                <button class="btn">取消</button>
            </div>
        </form>
    </div>
</body>
</html>