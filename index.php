<?php include 'header.php';?>
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog modal-md">
      <div class = "modal-content">
         
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
         
         <div class = "modal-body"    style=" background: linear-gradient(to bottom, #0d7ec4 0%,#0a76b9 19%,#035b98 52%,#045a93 100%);">
            <div class="content">
			<div class="wrap">
				<div class="content-grid">
			<p><img src="images/top.png" style="margin-top: 50px" href="products.php?type=mattress" title=""></p>
				</div>
				<div class="grid">
		<p><img src="express.png" title=""></p>
								<div class="clear"></div>
								</div>
		<div class="clear"></div>
		<div class="footer">
		<p>Copyright © 2017 Serenite By Nagpal's All rights reserved</p>
		</div>
		<div class="clear"></div>
		</div>
		</div>
		<div class="clear"></div>
         </div>
         
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
</div><!-- /.modal -->
<!---->
<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <?php
        $type = "banner";
        $okie = aGetAllMainByType($type);
        if(is_array($okie)){
          foreach ($okie as $key => $value) {
      ?>
       <li><img src="sm-admin/<?php echo $value['pf_url']; ?>" alt=""></li>
      <?php
        }
      }
      ?>
				</ul>
		 </div>
	 </div>
</div>
<!---->
<div class="brands">
	 <div class="container">
		 <div class="brands-head">
			 <h3>OUR BRANDS</h3>
		 </div>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
			 
			 <?php
        $type = "logos";
        $okie = aGetAllMainByType($type);
        if(is_array($okie)){
          foreach ($okie as $key => $value) {
      ?>
                 <li>
                                     <a href="#l"><img src="sm-admin/<?php echo $value['pf_url']; ?>"alt=""/></a>		 
				 </li>
      <?php
        }
      }
      ?>
		    </ul>
	 </div>
	 </div>
</div>


<div class="bottom_content">
	 <div class="container">
             <div class="sofas">
                <div class="sofa grid embed-responsive embed-responsive-4by3 "
                style="margin-top:33px" >
              
                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_wcs7ixyDbY" style="height:400px;width:100%;position:relative;"></iframe>
                
                </div>
             </div>
	
         </div>
</div>
<!---->
<div class="new">
	 <div class="container">
		 <h3>Catalog</h3>
		 <div class="new-products">
		 <div class="new-items">
			 <div class="item1">
				 <a href="products.php?type=mattress"><img src="images/s1.jpg" alt=""/></a>
				 <div class="item-info">
					 <h4><a href="products.php?type=mattress">Express Delivery</a></h4>
				 </div>
			 </div>
			 <div class="item4">
				 <a href="products.php?type=mattress"><img src="images/s4.jpg" alt=""/></a>
				  <div class="item-info4">
					 <h4><a href="products.php?type=mattress">Mattress</a></h4>
				 </div>			 
			 </div>
		 </div>
		 <div class="new-items new_middle">
			 <div class="item2">			 
				 <div class="item-info2">
					 <h4><a href="rent_a_matress.php">Rent a Mattress</a></h4>
				 </div>
				 <a href="rent_a_matress.php"><img  src="images/s2.jpg" alt=""/></a>
			 </div>
			 <div class="item5">	
				 <a href="interior_design.php"><img src="images/s5.jpg" alt=""/></a>
				 <div class="item-info5">
					 <h4><a href="interior_design.php">Interior Design</a></h4>
				 </div>	
			 </div>
		 </div>		  
		 <div class="new-items new_last">
			 <div class="item3">	
				 <a href="corporate_purchase.php"><img src="images/s3.jpg" alt=""/></a>
				 <div class="item-info3">
					 <h4><a href="corporate_purchase.php">Corporate Purchase</a></h4>
				 </div>			 
			 </div>
			 <div class="item6">	
				 <a href="partner_with_us.php"><img src="images/s6.jpg" alt=""/></a>
				 <div class="item-info6">
					 <h4><a href="partner_with_us.php">Partner with us</a></h4>
				 </div>
				 				 
			 </div>
		 </div>
		 <div class="clearfix"></div>	
		 </div>
	 </div>		 
</div>
<!---->
<!---->
<!---->




<?php include 'footer.php';
if(!isset($_SESSION['page_load']))
$_SESSION['page_load']=1;
?>

<script type="text/javascript">
if(<?php echo $_SESSION['page_load'];?>)
{
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
	<?php $_SESSION['page_load']=0; ?>
}
</script>