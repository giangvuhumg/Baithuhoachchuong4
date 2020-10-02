<?php
    if(isset($_POST["btnGhi"])){
        $userName = $_POST["userName"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        $moTaNgan = $_POST["moTaNgan"];
        echo "<p>Chào mừng ".$userName." đến với chúng tôi</p>";
        echo "<p>$pass</p>";
        echo "<p>$email</p>";
        echo "<p>$moTaNgan</p>";
    }    
?>
<br>
<a href="login.html">Trở lại</a>