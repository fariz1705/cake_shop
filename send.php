<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $cake = $_POST['cake'];
    $message = $_POST['message'];
    $no_wa = $_POST['noWa'];
    $text = "Halo, saya $name. Saya ingin memesan $cake. $message";
    $url = "https://wa.me/$no_wa?text=".urlencode($text);
    header("location: $url");
}else{
    echo "<script>window.history.back();</script>";
}
?>
