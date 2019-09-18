<?php
    session_start();
    // Get values Passe from form in index.php 
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // To prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    // Connect to the server and select database
    mysql_connect("localhost", "root", "");
    mysql_select_db("account");

    // Query the database for user
    $result = mysql_query("SELECT * FROM `user` where username = '$username' and password = '$password'")
                or die("Failed to Query database".mysql_error());
    $numRows =  mysql_num_rows($result);
    // while($numRows > 0){
    //     if ($row['username'] == $username && $row['password'] == $password ){
    //         // $_SESSION['user'] = $username;
    //         // header("location:home.php");
    //         echo "Login Successful!!".$row['username'];
    //     }
    //     else{
    //         echo "Failed to Login";
    //     }
    //     if($row['username'] == $username)
    //     {
    //         if ($row['password'] == $password) {
    //             echo "login Successful";
    //         } else {
    //             echo "Incorrect Password";
    //         }
    //     } else{
    //         echo "Incorrect Username";
    //         echo "Failed to Login";
    //     }
    // }
    if($numRows > 0){
        while($row = mysql_fetch_array($result))
        {
            $row['username'] = $username;
            $row['password'] = $password;
        }
        if ($row['username'] = $username)
        {
            if ($row['password'] = $password) 
            {
                $_SESSION['user']= $username;
				header("location:transaction.php");
            } 
            else 
            {
                Print '<script>alert("Incorrect Password!");</script>';
				Print '<script>window.location.assign("index.php");</script>';
            }
            
        }
    }
    else {
        Print '<script>alert("Incorrect Username or Password!");</script>';
		Print '<script>window.location.assign("index.php");</script>';
    }

?>