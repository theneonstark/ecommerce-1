<?php
session_start();
if(isset($_SESSION['name'])){
    $con = mysqli_connect("localhost","root","","ecommerce");
    // $qurry=mysqli_query($con,"select * from new_product");
$data_product = mysqli_query($con, 'SELECT * FROM new_product');
$data_wood = mysqli_query($con, 'SELECT * FROM wood');
$data_art = mysqli_query($con, 'SELECT * FROM decor_art');
$data_room = mysqli_query($con, 'SELECT * FROM dining_room');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megumi shoplift</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css_admin_page/index.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="./logo_black.png" alt="">
        </div>
        <nav>
            <ul>
                <li onclick="drophome()">home<i class='bx bx-chevron-down' ></i></li>
                <!-- home dropdown -->
                <div class="dropdown">
                    <div class="dropdown-item">
                        <?php
                        $ab=['all products','bar furniture','decor art','dining room','headboards','lighting','living room'];
                        $count=0;
                        while($count<7){
                        ?>
                        <a href="#">
                            <?php echo $ab[$count];
                        ?>
                        </a>
                        <?php
                        $count++;
                        }
                        ?>
                    </div>
                </div>
                <li onclick="dropshop()">shops<i class='bx bx-chevron-down' ></i></li>
                <!-- shops dropdown -->
                <div class="dropdown_shop">
                    <div class="dropdown-content-item">
                        <div class="dropdown-item">
                            <h1>collection</h1>
                            <?php
                        $ab=['all products','bar furniture','decor art','dining room','headboards','lighting','living room'];
                        $count=0;
                        while($count<7){
                        ?>
                            <a href="#">
                                <?php echo $ab[$count];
                        ?>
                            </a>
                            <?php
                        $count++;
                        }
                        ?>
                        </div>
                        <div class="dropdown-item">
                            <h1>shop pages</h1>
                            <?php
                        $ab=['sidebar left','sidebar right','full width','full width - no filter','filter top','lighting','living room'];
                        $count=0;
                        while($count<7){
                        ?>
                            <a href="#">
                                <?php echo $ab[$count];
                        ?>
                            </a>
                            <?php
                        $count++;
                        }
                        ?>
                        </div>
                        <div class="dropdown-item">
                            <h1>product pages</h1>
                            <?php
                        $ab=['thumbnail left','thumbnail right','thumbnail top','thumbnail bottom','product variants','variants dropdown','gallery stacked'];
                        $count=0;
                        while($count<7){
                        ?>
                            <a href="#">
                                <?php echo $ab[$count];
                        ?>
                            </a>
                            <?php
                        $count++;
                        }
                        ?>
                        </div>
                        <div class="dropdown-item">
                            <h1>new product</h1>
                            <?php
                        $ab=['sidebar left','sidebar right','full width','full width - no filter','filter top','lighting','living room'];
                        $count=0;
                        while($count<7){
                        ?>
                            <a href="#">
                                <?php echo $ab[$count];
                        ?>
                            </a>
                            <?php
                        $count++;
                        }
                        ?>
                        </div>
                        <div class="dropdown-item">
                            <h1>new product</h1>
                            <?php
                            while($row_pro = mysqli_fetch_array($data_product)){
                                ?>
                            <div class="product_img_price">
                                <div class="product_img">
                                    <img src="./upload/<?php echo $row_pro['img']?>" alt="">
                                </div>
                                <div class="product_price">
                                    <h1>
                                        <?php echo $row_pro['name'];?>
                                    </h1>
                                    <h4>$
                                        <?php echo $row_pro['price'];?>.00
                                    </h4>
                                </div>
                            </div>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
                <li onclick="dropcollection()">collections<i class='bx bx-chevron-down' ></i></li>
                <!-- collections dropdown -->
                <div class="dropdown_coll">
                    <div class="dropdown_content_box">
                        <?php
                            while($row_wood= mysqli_fetch_array($data_wood)){
                            ?>
                        <div class="dropdown_box_item">
                            <div class="dropdown_box_img">
                                <img src="./upload/<?php echo $row_wood['image']?>" alt="">
                            </div>
                            <h1><?php echo $row_wood['image_name']?></h1>
                        </div>
                        <?php } ?>
                        <?php
                            while($row_art= mysqli_fetch_array($data_art)){
                        ?>
                        <div class="dropdown_box_item">
                            <div class="dropdown_box_img">
                                <img src="./upload/<?php echo $row_art['decor_img']?>" alt="">
                            </div>
                            <h1><?php echo $row_art['decor_name']?></h1>
                        </div>
                        <?php }?>
                        <?php
                            while($row_room= mysqli_fetch_array($data_room)){
                        ?>
                        <div class="dropdown_box_item">
                            <div class="dropdown_box_img">
                                <img src="./upload/<?php echo $row_room['dining_image'];?>" alt="">
                            </div>
                            <h1><?php echo $row_room['dining_name'];?></h1>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <li onclick="droppage()">pages<i class='bx bx-chevron-down' ></i></li>
                <!-- pages dropdown -->
                  <div class="dropdown_page">
                    <div class="dropdown_page_item ">
                        <?php 
                        $abc=['about us','contact us','F&Qs','Coming soon'];
                        $num=0;
                        while($num<4){
                        ?>
                        <a href="#"><?php echo $abc[$num]?></a>
                        <?php
                        $num ++;
                        }
                        ?>
                    </div>
                 </div> 
                <li onclick='dropblogs()'>blogs<i class='bx bx-chevron-down' ></i></li>
                <!-- blogs dropdown -->
                <div class="dropdown_blog">
                    <div class="dropdown_blog_item ">
                        <?php 
                        $abc=['sidebar left','sidebar right','all product','list'];
                        $num=0;
                        while($num<4){
                        ?>
                        <a href="#"><?php echo $abc[$num]?></a>
                        <?php
                        $num ++;
                        }
                        ?>
                    </div>
                 </div> 
                <li><a href="">contact us</a></li>
            </ul>
        </nav>
        <div class="search_shop">
            <i class="bx bx-search"></i>
            <i class='bx bxs-shopping-bags'></i>
            <div class="shoping_bag">
                <a href="">shoping cart</a>
                <a href="">$0.00</a>
            </div>
        </div>
    </header>

    <script src="dropdown.js"></script>

</body>

</html>

<?php
}else{
    header("location: admin_page/loging.php");
}
?>