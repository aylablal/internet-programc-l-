<?php
try
{
    $db=new PDO("mysql:host=localhost;dbname=boş;charset=utf8","root","");
    echo "kayıt başarılı";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}













?>