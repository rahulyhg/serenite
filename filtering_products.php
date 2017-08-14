<?php

include_once "sm-admin/sm-admin/lib/sm-constant.php";

include_once "sm-admin/sm-admin/lib/sm-connection.php";

include_once "sm-admin/sm-admin/lib/mainFunctions.php";

        $rConnection = dbConnection();

        $type=$_POST["product_type"];

        $sql="select * from `main` where type='$type' and (`group_id`, `id`) IN ( SELECT  `group_id`, MIN(`id`) FROM  `main` GROUP BY `group_id`)";

        if(isset($_POST['size']))

            {

                 $size=$_POST['size'];

                    $sql.=" and `size` in (";

                      for ($i=0;$i<count($size)-1;$i++) {

                           # code...

                           $sql.="'".$size[$i]."',";

                    }

                     $sql.="'".$size[$i]."')";

            }

            if(isset($_POST['comfortlevel']))

                {

                       $comfortlevel=$_POST['comfortlevel'];

                         $sql.=" and `comfort_level` in (";

                      for ($i=0;$i<count($comfortlevel)-1;$i++) {

                           # code...

                           $sql.="'".$comfortlevel[$i]."',";

                    }

                     $sql.="'".$comfortlevel[$i]."')";

                }
                 if(isset($_POST['min_price'])&&isset($_POST['max_price']))
                {
                    $min=$_POST['min_price'];
                    $max=$_POST['max_price'];
                    if($min!=''&&$max!=' ')
                    $sql.=" and `price` between '".$min."' and '".$max."'";
                }

                if($type=='pillows')

                {

                if(isset($_POST['pillowtype']))

                {

                     $pillowtype=$_POST['pillowtype'];

                     $sql.=" and `pillow_type` in (";

                      for ($i=0;$i<count($pillowtype)-1;$i++) {

                           # code...

                           $sql.="'".$pillowtype[$i]."',";

                    }

                     $sql.="'".$pillowtype[$i]."')";

                }

              }
                 if($type=='decor')

                {

                if(isset($_POST['category']))

                {

                     $category=$_POST['category'];

                     $sql.=" and `category` in (";

                      for ($i=0;$i<count($category)-1;$i++) {

                           # code...

                           $sql.="'".$category[$i]."',";

                    }

                     $sql.="'".$category[$i]."')";

                }

              }


              if($type=='mattress')

              {

                if(isset($_POST['mattresstype']))

                {

                     $mattresstype=$_POST['mattresstype'];

                     $sql.=" and `mattress_type` in (";

                      for ($i=0;$i<count($mattresstype)-1;$i++) {

                           # code...

                           $sql.="'".$mattresstype[$i]."',";

                    }

                     $sql.="'".$mattresstype[$i]."')";

                }

                if(isset($_POST['material']))

                {

                     $material=$_POST['material'];

                     $sql.=" and `material` in (";

                      for ($i=0;$i<count($material)-1;$i++) {

                           # code...

                           $sql.="'".$material[$i]."',";

                    }

                     $sql.="'".$material[$i]."')";

                }

              }

                if(isset($_POST['brand']))

                    {

                         $brand=$_POST['brand'];

                    $sql.=" and `Product_Brand` in (";

                      for ($i=0;$i<count($brand)-1;$i++) {

                           # code...

                           $sql.="'".$brand[$i]."',";

                    }

                     $sql.="'".$brand[$i]."')";

                 }

                 $sql.=";";
               $rResultSet = mysqli_query($rConnection , $sql);

         dbConnectionClose($rConnection);

        if($rResultSet !='') {

            $aData = array();

            while($aRow = mysqli_fetch_assoc($rResultSet)) {

                $aData[] = $aRow;

            }

              foreach($aData as $row)

                {
               

                    ?>
              

                      <a href="<?php echo 'singleproduct.php?id='.$row['group_id'];?>" ><div class="product-grid love-grid">

                        <div class="more-product"><span> </span></div>                      

                        <div class="product-img b-link-stripe b-animate-go  thickbox">

                            <img src="sm-admin/<?php echo $row['pf_url']; ?>" class="img-responsive" alt=""/>

                            <div class="b-wrapper">

                            <h4 class="b-animate b-from-left  b-delay03">                           

                            <button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
                          

                            </h4>

                            </div>

                        </div>                      

                        <div class="product-info simpleCart_shelfItem">

                            <div class="product-info-cust">

                              <center>  <h4><?php echo $row['title'] ;?></h4>

                                <span class="item_price">Rs.<?php echo $row['price'] ;?></span></a>

                                <select class="item_quantity" id="quantity_<?php echo $row['group_id'] ;?>">

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                </select>

                                <button class="item_add items" onclick ="gettotal('<?php echo $row["group_id"] ;?>')">Add To Cart</button>
                                
                                  &nbsp;&nbsp;<a href="cart.php" onclick="add('<?php echo $row["group_id"] ;?>')" class="item_add">Buy Now</a></center>

                            </div>                              

                            <div class="clearfix"> </div>

                        </div>

                    </div>  

                    <?php

                          }

                      }

                    ?>