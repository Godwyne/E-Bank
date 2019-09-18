<?php
		session_start();
		if($_SESSION['user'])
		{
            $user=$_SESSION['user'];
        }
		else
		{
			header("location:index.php");
        }
        
		mysql_connect("localhost", "root", "") or die(mysql_error());
        mysql_select_db("account")or die("Cannot connect to database");

        $balance=0;
        $result = mysql_query("SELECT * FROM Amount WHERE user = '$user'");
        while ($row = mysql_fetch_array($result)) {
            $balance = $balance + $row['amount'];
        }
        if ($_POST['submit']) {
            $amount =mysql_real_escape_string($_POST['amount']);

            if ($amount > $balance) {
                Print '<script>alert("Insufficient Funds!!!");</script>';
                Print '<script>window.location.assign("balance.php");</script>';
                exit ("You have insufficient funds!");
            }
            $amount=(-$amount);
            mysql_query("INSERT * INTO amount (amount, user) VALUES ('$amount', '$user')");
            Print '<script>alert("Successful Withdrawal!!!");</script>';
			Print '<script>window.location.assign("balance.php");</script>'; 
        }  
        else {
            header("location:Transaction.php");
        }
		?>