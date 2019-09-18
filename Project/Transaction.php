<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction</title>
    <link rel="stylesheet" type="text/css" href=".css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        body{
            padding: 0;
            margin: 0;
            line-height: 1.5;
            color: #fff;
            font-family: Times;
        }
        .container{
            width: 80%;
            margin: auto;
        }
        #branding{
            width: 100%;
            min-height: 100px;
            background-color: #333;
            border-bottom: 2px orange solid;
        }
        .img{
            display: inline;
            float: left;
            margin-top: 10px;
        }
        .nav{
            float: right;
            margin-top: 20px;
        }
        ul li{
            display: inline;
            padding: 0px 10px 0px 10px;
            text-transform: uppercase;
        }

        a{
            color: #fff;
            text-decoration: none;
        }
        .bg-img{
            background: url('slide.jpg')no-repeat;
            background-size: cover;
            height: 650px;
            overflow: hidden;
        }
        h3{
            text-align: center;
            font-size: 60px;
            margin: 0;
            padding: 3rem 0;
        }
        .btn{
            border: none;
            border-radius: 50px;
            padding: 2rem 5rem;
            margin: 1rem 0 0;
            width: 200px;
            text-decoration: none;
            display: block;
            color: #fff;
            background: #aae;
            font-size: 2rem;
            text-transform: capitalize; 
            text-align: center;
        }
        #tran_1{
            float: left;
            margin-left: 20rem;
            transition: left 500ms ease-in-out;
        }
        #tran_2{
            float: right;
            transition: right 500ms ease-in-out;
        }
        footer{
            padding: 5px;
            background: #e8491d;
            text-align: center;
            color: #ffffff;
            border-top: #333 5px solid;
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
    <header>
        <div id="branding">
            <div class="container">
                <div class="img">
                    <img src="logo.png" alt="logo" height="80px" width="60px">
                </div>
                <div class="nav">
                    <nav>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href=".php"><i class="fa fa-bars"></i> Service</a></li>
                            <li><a href="index.php"><i class="fa fa-reply-all"></i> Make a complaint</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>        
    </header>
    <div class="bg-img">
        <div class="container">
            <h3>Please select an Option:</h3>
            <div class="tran">
                <div id="tran_1">
                    <a href="Withdraw.php" class="btn" id="Withdraw">withdraw</a><br><br>
                    <a href="balance.php" class="btn" id="view-work">check balance</a>
                </div>
                <div id="tran_2">
                    <a href="deposit.php" class="btn" id="view-work">Deposit</a><br><br>
                    <a href="#images" class="btn" id="view-work">Exit</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Wyne Web Design, Copyright &copy; 2019</p>
    </footer>
</body>
</html>