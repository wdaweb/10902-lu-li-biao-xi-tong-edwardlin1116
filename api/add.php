<?php
include_once "../base.php";

$table=$_POST['table'];

$db=new DB($table);

$data=[];

if(!empty($_FILES['img']['tmp_name'])){

    $filename=$_FILES['img']['name'];

    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);
    
    $data['img']=$filename;
}

switch($table){
    case "title":
        $data['text']=$_POST['text'];
        $data['sh']=0;
    break;
    case "about":
        $data['name']=$_POST['name'];
        $data['year']=$_POST['year'];
        $data['exp']=$_POST['exp'];
        $data['country']=$_POST['country'];
        $data['city']=$_POST['city'];
        $data['phone']=$_POST['phone'];
        $data['email']=$_POST['email'];
        $data['status']=$_POST['status'];
        $data['introduction']=$_POST['introduction'];
    break;
    case "admin":
        $data["acc"]=$_POST['acc'];
        $data['pw']=$_POST['pw'];
    break;
    case "menu":
        $data["name"]=$_POST['name'];
        $data['href']=$_POST['href'];
        $data['sh']=1;
    break;
    case "edu":
        $data["school"]=$_POST['school'];
        $data['year']=$_POST['year'];
        $data['dep']=$_POST['dep'];
        $data['sh']=1;
    break;
    case "exp":
        $data["title"]=$_POST['title'];
        $data['year']=$_POST['year'];
        $data['content']=$_POST['content'];
        $data['sh']=1;
    break;
    case "auto":
        $data["content"]=$_POST['content'];
        $data['sh']=0;
    break;
    case "job":
        $data["category"]=$_POST['category'];
        $data["property"]=$_POST['property'];
        $data["salary"]=$_POST['salary'];
        $data["place"]=$_POST['place'];
        $data['sh']=0;
    break;
    case "portf":
        $data["text"]=$_POST['text'];
        $data['href']=$_POST['href'];
        $data['sh']=1;
    break;
    default:
        $data['text']=$_POST['text'];
        $data['sh']=1;
    break;
}

$db->save($data);

to("../admin.php?do=$table");
?>