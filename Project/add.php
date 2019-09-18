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
        if ($_POST['submit']) {
            $amount = mysql_real_escape_string($_POST['amount']);
            mysql_connect("localhost", "root", "") or die(mysql_error());
            mysql_select_db("account")or die("Cannot connect to database");
            mysql_query("INSERT * INTO amount (amount, user) VALUES ('$amount', '$user')");
            Print '<script>alert("Successful Deposit Made.");</script>';
            Print '<script>window.location.assign("balance.php");</script>';
        }
        else {
            header("location:Transaction.php");
        }
		?>