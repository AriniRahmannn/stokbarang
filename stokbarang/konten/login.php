<?php
    if (isset($_POST['submit'])) {
        $Username = $_POST['user'];
        $Password = $_POST['pass'];
    
        $sql = "SELECT * FROM login where Username = '$Username' and Password = sha1('$Password')";  
        $result = mysqli_query($koneksi, $sql);  
        $count = mysqli_num_rows($result);  
        
        if($count > 0){  
            $sesi = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $sesi['Username'];
            header("Location: ?menu=home");
        }  
        else{  
            echo  '<script>
                        window.location.href = "?menu=home";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        } 
}
?>

<div id="form">
     <h1>Login form</h1>
     <form name="form" action="" method="POST">
       <label>Username :</label>
       <input type="text" id="user" name="user"></br> </br>
       <label>Password  :</label>
       <input type="Password" id="pass" name="pass"></br> </br>
       <input type="submit" id="btn" value="Login" name="submit"/>
     </form>
    </div>