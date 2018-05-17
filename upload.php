<?php 
 
header("Content-Type:text/html;charset=UTF-8");
if(is_uploaded_file($_FILES['file']['tmp_name'])){
    move_uploaded_file($_FILES['file']['tmp_name'], "./drag_uploads/".iconv("UTF-8", "GBK", $_FILES['file']['name']));
    echo '1';
}
 
 ?>