<?php
if($_POST['id'] === 'sanghyun'){
    if($_POST['password'] === '111111'){
        echo 'right';
    } else {
        echo 'password wrong';
    }   
} else {
    echo 'id wrong';
}
?>