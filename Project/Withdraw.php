<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Withdraw</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <style>
            
            body{
                background: url('withdraw.png') no-repeat 0 0;
                background-size: 100%;
                color: #ffffff;
                line-height: 1.5;
            }
            form{
                transition: all 500ms ease-in-out;
            }
            #box{
                width: 30%;
                margin: 0 auto;
                border: none;
                border-radius: 5px;
                background: orangered;
                min-height: 100px;
                padding: 20px;
                transition: all 500ms ease-in-out;
                box-shadow:30px 0px 40px rgba(0, 0, 0, 0.1),
                -30px 0px 40px rgba(0, 0, 0, 0.1); 
            }
            h1{
                color: #000;
            }
            a{
                float: right;
                margin-top: -40px;
                color: #333;
                text-decoration: none;
            }
            input[type=submit]{
                padding: 10px;
            }
            input[type = submit]:hover{
                background: green;
                border: none;
                font-weight: bold;
                transition: background 500ms ease;
            }
        </style>
    </head>
    <?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
    <body>
        <div class="container">
            <h1>
                <Center>The Withdraw Page <i class="fa fa-book"></i></Center>
            </h1>
            <a href="Transaction.php"><i class="fa fa-shield"></i> click here to go back</a>
            <hr>
            <form action="minus.php" method="POST">
                <div id="box">
                    <p><b>How much would you like to withdraw?</b> <input type="number" name="amount" required="required" placeholder="N00.00"></p>
                    <center><input type="submit" class="button" value="WITHDRAW MONEY"></center>
                </div> 
            </form> 
        </div>
    </body>
</html>