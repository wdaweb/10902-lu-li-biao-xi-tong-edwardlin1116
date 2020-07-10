<?php 

//請參考add.php的註解，自行讀懂下列程式碼的功能

include_once '../base.php';
 
$table=$_POST['table'];
$db=new DB($table);

 foreach($_POST['id'] as $key=>$id){
     if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        $db->del($id);
     }else{
        $row=$db->find($id);

         switch($table){
            case "title":
               if(!empty($_POST['text'])){
                  $row['text']=$_POST['text'][$key];
               }
               $row['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "admin":
               $row['acc']=$_POST['acc'][$key];
               $row['pw']=$_POST['pw'][$key];
            break;
            case "about":
               $row['name']=$_POST['name'][$key];
               $row['year']=$_POST['year'][$key];
               $row['exp']=$_POST['exp'][$key];
               $row['country']=$_POST['country'][$key];
               $row['city']=$_POST['city'][$key];
               $row['phone']=$_POST['phone'][$key];
               $row['email']=$_POST['email'][$key];
               $row['status']=$_POST['status'][$key];
               $row['introduction']=$_POST['introduction'][$key];
            break;
            case "menu":
               $row['name']=$_POST['name'][$key];
               $row['href']=$_POST['href'][$key];
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "edu":
               $row['school']=$_POST['school'][$key];
               $row['year']=$_POST['year'][$key];
               $row['dep']=$_POST['dep'][$key];
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "exp":
               $row['title']=$_POST['title'][$key];
               $row['year']=$_POST['year'][$key];
               $row['content']=$_POST['content'][$key];
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "auto":
               $row['content']=$_POST['content'][$key];
               $row['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "job":
               $row['category']=$_POST['category'][$key];
               $row['property']=$_POST['property'][$key];
               $row['salary']=$_POST['salary'][$key];
               $row['place']=$_POST['place'][$key];
               $row['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "portf":
               $row['text']=$_POST['text'][$key];
               $row['href']=$_POST['href'][$key];
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            default:
               if(!empty($_POST['text'])){
                  $row['text']=$_POST['text'][$key];
               }
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
         }

         $db->save($row);
     }
 }

to("../admin.php?do=$table");

?>