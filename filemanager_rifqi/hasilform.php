<?php



$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

if($uname=="rifqi" && $pwd=="123"){
    $_SESSION["user"] =$uname;
    header("Location: index.php");
}
else{
    session_unset();
session_destroy();
    echo "Gagal Login";
}

?>