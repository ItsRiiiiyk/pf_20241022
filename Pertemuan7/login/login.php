<?php  
// cek tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

    //  cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
        
        // jika benar, redirect ke hamalan admin
        header("Location: admin.php");
        exit;

    }   else{
            // jika salah, tampilkan pesan kesalahan
            $error = true;
    }
}

?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if( isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah!></p>
    <?php endif; ?>

    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="username">Username :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
        
    </form>
    
</body>
</html>