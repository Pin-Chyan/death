<?php
	session_start();
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
		$_SESSION['total_items'] = 0;
        $_SESSION['total_price'] = '0.00';
        include("cart_func.php");
	}
?>

<link rel="stylesheet" href="styles/style.css">
<html>
    <head>
        <title>
            Home Page
        </title>
    </head>
    <body class="background" style="min-width: 1000px;">
    <!-- nav bar start -->
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="store.php">Store</a></li>
        <li><a href="login.php"><?php if (isset($_SESSION['name'])) {echo $_SESSION['name'];} else {echo "Sign-in";} ?></a></li>
        <li><a href="cart.php" style="float:right; color:#fc7e37;">
			<img src="images/cart.png" style="height:20px; margin: 0 10px;
			padding:0;" alt="cart">My Cart (<?=$_SESSION['total_items'];?>) - R<?=$_SESSION['total_price'];?></a></li>
        <li><a href="admin.php">AdminTest</a></li>
    </ul>
    <!-- nar bar end -->

    <!-- icons bar end -->
    <div class="wrapper">
        <div class="left">
        <img style="width: 1100px; height: 1000px;" src = "https://images2.alphacoders.com/246/246622.jpg">
        </div>
        <div class="right">
            <div class="h1_page">
             <ul>
                  <li id="h_button"><a href="store.php">Store</a></li>
               </ul>
            </div>
            <div class="h2_page">
             <ul>
                <li id="h_button"><a href="login.php">Log-In</a></li>
            </ul>
            </div>    
        </div>        
    </div>
    <!-- icons bar end -->
    </body>
</html>