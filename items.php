<html>
    <head>
        <title>save money save life</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="header">
        <div class="head">
            <h1>SHOPEE</h1>
        </div><!--head-->
        <div class="nav">
        <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="products.html">Products</a></li>
                  <li><a href="contact.html">Contact</a></li>
        </ul>    
        </div><!--nav-->
        <?php 
        $item=$_POST['p'];
        if ($item==300)
        {
        
           echo '<img src="images/bag.jpeg">';
            echo'<div class="name">cute girls bag pack</div>';
            echo'<div class="price">discont price : '.$item.'</div>';

            echo'<form method="post" action="cart.php"><button type="submit"  name="p" placeholder="add to cart" value="'.$item.'"> add to cart </button></form>';
        }
        if ($item==451)
        {
        
           echo '<img src="images/bag2.jpeg">';
            echo'<div class="name">cute girls bag pack</div>';
            echo'<div class="price">discont price : '.$item.'</div>';

            echo'<form method="post" action="cart.php"><button type="submit"  name="p" placeholder="add to cart" value="'.$item.'"> add to cart </button></form>';
        }
        if ($item==398)
        {
        
           echo '<img src="images/bag3.jpeg">';
            echo'<div class="name">cute girls bag pack</div>';
            echo'<div class="price">discont price : '.$item.'</div>';

            echo'<form method="post" action="cart.php"><button type="submit"  name="p" placeholder="add to cart" value="'.$item.'"> add to cart </button></form>';
        }
        if ($item==297)
        {
        
           echo '<img src="images/shirt.jpeg">';
            echo'<div class="name">cotton shirt</div>';
            echo'<div class="price">discont price : '.$item.'</div>';

            echo'<form method="post" action="cart.php"><button type="submit"  name="p" placeholder="add to cart" value="'.$item.'"> add to cart </button></form>';
        }
        if ($item==299)
        {
        
           echo '<img src="images/buds.jpeg">';
            echo'<div class="name">apple airpods (first copy)</div>';
            echo'<div class="price">discont price : '.$item.'</div>';

            echo'<form method="post" action="cart.php"><button type="submit"  name="p" placeholder="add to cart" value="'.$item.'"> add to cart </button></form>';
        }
        if ($item==349)
        {
        
           echo '<img src="images/slippers.jpeg">';
            echo'<div class="name">apple airpods (first copy)</div>';
            echo'<div class="price">discont price : '.$item.'</div>';

            echo'<form method="post" action="cart.php"><button type="submit"  name="p" placeholder="add to cart" value="'.$item.'"> add to cart </button></form>';
        }
        ?>
    </div><!--header-->
</html>