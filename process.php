<?php 		
			include_once 'connect.php';
            $connect = new connect();
            $connect->start();
            $connect->logRe();

            $ip = getenv("REMOTE_ADDR");
        
            if(isset($_POST["randPro"])){
                $product_query = "SELECT * FROM product ORDER BY RAND() LIMIT 0,6";
                $result = mysqli_query($connect->getConn(),$product_query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        $pro_id = $row['id'];
                        $pro_cat   = $row['category'];
                        $pro_name = $row['name'];
                        $pro_price = $row['price'];
                        $pro_image = $row['image'];

                        echo '<div class="col-md-4 text-center">
                                    <div class="product">
                                        <div class="product-grid" style="background-image:url(data:image/jpeg;base64,'.base64_encode($pro_image).');">
                                                <div class="inner">
                                                    <p>
                                                    <a href="#" class="icon" id="add" pid="'.$pro_id.'"><i class="icon-shopping-cart"></i></a>
                                                    <a href="#" class="icon" id="detail" pid="'.$pro_id.'"><i class="icon-eye"></i></a>
                                                    </p>
                                                </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="single.php">'.$pro_name.'</a></h3>
                                            <span class="price">'.$pro_price.' Baht</span>
                                        </div>
                                    </div>
                                </div>';  
                    }
                }
            }

            if(isset($_POST["shirts"])){
                $product_query = "SELECT * FROM product WHERE category = 'top' ";
                $result = mysqli_query($connect->getConn(),$product_query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        $pro_id = $row['id'];
                        $pro_cat   = $row['category'];
                        $pro_name = $row['name'];
                        $pro_price = $row['price'];
                        $pro_image = $row['image'];

                        echo '<div class="col-md-4 text-center" id="prod">
                                    <div class="product">
                                        <div class="product-grid" style="background-image:url(data:image/jpeg;base64,'.base64_encode($pro_image).');">
                                                <div class="inner">
                                                    <p>
                                                    <a href="#" class="icon" id="add" pid="'.$pro_id.'"><i class="icon-shopping-cart"></i></a>
                                                    <a href="#" class="icon" id="detail" pid="'.$pro_id.'"><i class="icon-eye"></i></a>
                                                    </p>
                                                </div>
                                        </div>
                                
                                        <div class="desc">
                                            <h3><a href="single.php">'.$pro_name.'</a></h3>
                                            <span class="price">'.$pro_price.' Baht</span>
                                        </div>
                                    </div>
                                </div>';  
                    }
                }
            }

            if(isset($_POST["skirts"])){
                $product_query = "SELECT * FROM product WHERE category = 'skirts' ";
                $result = mysqli_query($connect->getConn(),$product_query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        $pro_id = $row['id'];
                        $pro_cat   = $row['category'];
                        $pro_name = $row['name'];
                        $pro_price = $row['price'];
                        $pro_image = $row['image'];

                        echo '<div class="col-md-4 text-center" id="prod">
                                    <div class="product">
                                        <div class="product-grid" style="background-image:url(data:image/jpeg;base64,'.base64_encode($pro_image).');">
                                                <div class="inner">
                                                    <p>
                                                    <a href="#" class="icon" id="add" pid="'.$pro_id.'"><i class="icon-shopping-cart"></i></a>
                                                    <a href="#" class="icon" id="detail" pid="'.$pro_id.'"><i class="icon-eye"></i></a>
                                                    </p>
                                                </div>
                                        </div>
                                
                                        <div class="desc">
                                            <h3><a href="single.php">'.$pro_name.'</a></h3>
                                            <span class="price">'.$pro_price.' Baht</span>
                                        </div>
                                    </div>
                                </div>';  
                    }
                }
            }

            if(isset($_POST["dress"])){
                $product_query = "SELECT * FROM product WHERE category = 'dress' ";
                $result = mysqli_query($connect->getConn(),$product_query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        $pro_id = $row['id'];
                        $pro_cat   = $row['category'];
                        $pro_name = $row['name'];
                        $pro_price = $row['price'];
                        $pro_image = $row['image'];

                        echo '<div class="col-md-4 text-center" id="prod">
                                    <div class="product">
                                        <div class="product-grid" style="background-image:url(data:image/jpeg;base64,'.base64_encode($pro_image).');">
                                                <div class="inner">
                                                    <p>
                                                    <a href="#" class="icon" id="add" pid="'.$pro_id.'"><i class="icon-shopping-cart"></i></a>
                                                    <a href="#" class="icon" id="detail" pid="'.$pro_id.'"><i class="icon-eye"></i></a>
                                                    </p>
                                                </div>
                                        </div>
                                
                                        <div class="desc">
                                            <h3><a href="single.php">'.$pro_name.'</a></h3>
                                            <span class="price">'.$pro_price.' Baht</span>
                                        </div>
                                    </div>
                                </div>';  
                    }
                }
            }
            
            if(isset($_POST["pants"])){
                $product_query = "SELECT * FROM product WHERE category = 'pants' ";
                $result = mysqli_query($connect->getConn(),$product_query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        $pro_id = $row['id'];
                        $pro_cat   = $row['category'];
                        $pro_name = $row['name'];
                        $pro_price = $row['price'];
                        $pro_image = $row['image'];

                        echo '<div class="col-md-4 text-center" id="prod">
                                    <div class="product">
                                        <div class="product-grid" style="background-image:url(data:image/jpeg;base64,'.base64_encode($pro_image).');">
                                                <div class="inner">
                                                    <p>
                                                    <a href="#" class="icon" id="add" pid="'.$pro_id.'"><i class="icon-shopping-cart"></i></a>
                                                    <a href="#" class="icon" id="detail" pid="'.$pro_id.'"><i class="icon-eye"></i></a>
                                                    </p>
                                                </div>
                                        </div>
                                
                                        <div class="desc">
                                            <h3><a href="single.php">'.$pro_name.'</a></h3>
                                            <span class="price">'.$pro_price.' Baht</span>
                                        </div>
                                    </div>
                                </div>';  
                    }
                }
            }
            
            if(isset($_POST["addToCart"])){

                $p_id = $_POST["proID"];
                
                if(isset($_SESSION["u_email"])){
                    $user_id = $_SESSION["u_email"];

                    $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user = '$user_id'";
                    $run_query = mysqli_query($connect->getConn(),$sql);
                    $count = mysqli_num_rows($run_query);
                    if($count > 0){
                        echo '<script>alert("Already Added This Product");</script>';                   
                    }
                    else {
                        $sql = "INSERT INTO `cart`
                        (`p_id`, `ip`, `user`, `qty`) 
                        VALUES ('$p_id','$ip','$user_id','1')";
                        if(mysqli_query($connect->getConn(),$sql)){
                            echo "";
                        }
                    }
                }
                else{
                    echo '<script>window.location.href="login.php";</script>';
                }
            }
         $pid ="";
            if(isset($_POST['getDetail'])){
                 
                 $p_id = $_POST["proID"];
                 $pid = $p_id;
                   if(isset($_SESSION["u_email"])){
                    $user_id = $_SESSION["u_email"];
                    echo "<script>
                    window.location.href='single.php';
                </script>";
                   
                }
                else{
                    echo '<script>window.location.href="login.php";</script>';
                }
            }
               
            if(isset($_POST['deta'])){
                $product_query = "SELECT * FROM product WHERE id = '$pid' ";
                $result = mysqli_query($connect->getConn(),$product_query);
                $row = mysqli_fetch_array($result);
                    $pro_id = $row['id'];
                    $pro_cat   = $row['category'];
                    $pro_name = $row['name'];
                    $pro_price = $row['price'];
                    $pro_image = $row['image'];
                    $pro_des = $row['description'];
    
                 echo '<div id="fh5co-product">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="product-image">
                        <img src="data:image/jpeg;base64,'.base64_encode($pro_image).'"/>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>'.$pro_name.'</h2>
                            <p>
                                <a href="#" class="btn btn-primary btn-outline btn-lg" id="add">Add to Cart</a>
                                <a href="#" class="btn btn-primary btn-outline btn-lg" id="like" pid="'.$pro_id.'">❤ Love</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="fh5co-tabs">
                        <ul class="fh5co-tab-nav">
                            <li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Details</span></a></li>
                            <li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Specification</span></a></li>
                            <li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Feedback &amp; Ratings</span></a></li>
                        </ul>

                        <!-- Tabs -->
                        <div class="fh5co-tab-content-wrap">

                            <div class="fh5co-tab-content tab-content active" data-tab-content="1">
                                <div class="col-md-10 col-md-offset-1">
                                    <span class="price">'.$pro_price.' Baht</span>
                                    <h2>'.$pro_name.'</h2>
                                    <p>'.$pro_des.'</p>

                                    <p></p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="uppercase">Keep it simple</h2>
                                            <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h2 class="uppercase">Less is more</h2>
                                            <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="fh5co-tab-content tab-content" data-tab-content="2">
                                <div class="col-md-10 col-md-offset-1">
                                    <h3>Product Specification</h3>
                                    <ul>
                                        <li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
                                        <li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
                                        <li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
                                        <li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
                                    </ul>
                                    <ul>
                                        <li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
                                        <li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
                                        <li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
                                        <li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="fh5co-tab-content tab-content" data-tab-content="3">
                                <div class="col-md-10 col-md-offset-1">
                                    <h3>Happy Buyers</h3>
                                    <div class="feed">
                                        <div>
                                            <blockquote>
                                                <p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>
                                            </blockquote>
                                            <h3>&mdash; Louie Knight</h3>
                                            <span class="rate">
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>
                                            </blockquote>
                                            <h3>&mdash; Joefrey Gwapo</h3>
                                            <span class="rate">
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                                <i class="icon-star2"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>'; 
    }
             if (isset($_POST["getLike"])) {        
                $p_id = $_POST["proID"];

                if(isset($_SESSION["u_email"])){
                    $user_id = $_SESSION["u_email"];

                    $sql = "SELECT * FROM wishlist WHERE wish_id = '$p_id' AND wish_user = '$user_id'";
                    $run_query = mysqli_query($connect->getConn(),$sql);
                    $count = mysqli_num_rows($run_query);
                    if($count > 0){
                        echo '<script>alert("Already Liked This Product");</script>';                   
                    }
                    else {
                        $sql = "INSERT INTO wishlist (wish_id,wish_user,ip) VALUES ('$p_id','$user_id','$ip')";
                        if(mysqli_query($connect->getConn(),$sql)){
                            echo "";
                        }
                    }
                }
                else{
                    echo '<script>window.location.href="login.php";</script>';
                }
            }   
             if (isset($_POST["getL"])){

              $sql = "SELECT a.id,a.name,a.price,a.image,a.description,b.wish_id FROM product a,wishlist b WHERE a.id=b.wish_id AND b.wish_user='$_SESSION[u_email]'";

                $result = mysqli_query($connect->getConn(),$sql);
                if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_array($result)){
                        $pro_id = $row['id'];
                        $pro_name = $row['name'];
                        $pro_price = $row['price'];
                        $pro_image = $row['image'];
                        $pro_des = $row['description'];


                        echo '<div class="product">
                                    <div class="product-image">
                                        <img src="data:image/jpeg;base64,'.base64_encode($pro_image).'"  width="200" height="200"/>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-title">'.$pro_name.'</div>
                                        <p class="product-description">Product Description: '.$pro_des.'</p>
                                    </div>
                                    <div class="product-price">Price: '.$pro_price.' Baht</div>
                            </div>';
                    }
                }   
            }

            if (isset($_POST["count_item"])) {
                if (isset($_SESSION["u_email"])) {
                    $u_email = $_SESSION["u_email"];
                    $sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user = '$u_email'";
                }else{
                
                    $sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip = '$ip' AND user < 0";
                }

                $query = mysqli_query($connect->getConn(),$sql);
                $row = mysqli_fetch_array($query);
                echo $row["count_item"];
                exit();
            }

            if(isset($_POST["getCart"])){
                $sql = "SELECT a.id,a.name,a.price,a.image,a.description,b.p_id,b.qty FROM product a,cart b WHERE a.id=b.p_id 
                AND b.user='$_SESSION[u_email]'";

                $result = mysqli_query($connect->getConn(),$sql);
                if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_array($result)){
                        $pro_id = $row['id'];
                        $pro_name = $row['name'];
                        $pro_price = $row['price'];
                        $pro_image = $row['image'];
                        $pro_des = $row['description'];
                        $qty = $row["qty"];

                        echo '  <div class="product">
                                    <div class="product-image">
                                        <img src="data:image/jpeg;base64,'.base64_encode($pro_image).'"/>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-title">'.$pro_name.'</div>
                                        <p class="product-description">'.$pro_des.'</p>
                                    </div>
                                    <div class="product-price">'.$pro_price.'</div>
                                    <div class="product-quantity">
                                        <input type="number" value="'.$qty.'" min="1">
                                    </div>
                                    <div class="product-removal">
                                        <button class="remove-product" id="remove"  remove_id="'.$pro_id.'">
                                            Remove
                                        </button>
                                    </div>
                                    <div class="product-line-price">1</div>
                                </div>';
                    }
                }
            }

            if (isset($_POST["removeItemFromCart"])) {
                $remove_id = $_POST["rid"];

                $sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user = '$_SESSION[u_email]'";
        
                if(mysqli_query($connect->getConn(),$sql)){
                    echo "<script>
                           location.reload();
                    </script>";
                    exit();
                }
            }

            if(isset($_POST['searchBtn'])){
                $searching = $_POST['searchText'];
                $searching = preg_replace("#[^0-9a-z]#i","",$searching);
                $product_query = "SELECT * FROM product WHERE name LIKE '%$searching%'";
                $result = mysqli_query($connect->getConn(),$product_query);

                $check = mysqli_num_rows($result);
                if($check == 0){
                    echo "No match search";
                }
                else{
                     while($row = mysqli_fetch_array($result)){
                        $pro_name = $row['name'];

                        echo '<div>'.$pro_name.'</div>';
                    }
                }
            }
            
?>