<?php 
  $page='home';
  $nav='Dashboard';
  $navParent='';
  $arrPageList = require ('inc/base.php')
?>
<?php require ($_SERVER['TAM'].'inc/meta.php')?>
<h1 class="hide">Job Report <?php echo $page; ?></h1>
<style><?php require ($_SERVER['TAM'].'css/login.css')?></style>



            <style>
			  .pagelist{min-height:100vh; display:flex; align-items:center; justify-content:center;}
              .pagelist ul{padding-left:18px;}
              .pagelist > ul{list-style:disc;}
              .pagelist > ul > li > ul{list-style:circle;}
              .pagelist-row{padding:7px 0; display:block;}
            </style>

            <div class="pagelist">
              <ul>
                <li>
                  <a class="pagelist-row" href="">Halaman Login</a>
                </li>
                <li>
                  <a class="pagelist-row" href="home.php">Halaman Dashboard</a>
                </li>
                <li>
                  <a class="pagelist-row" href="faq/">Halaman F.A.Q</a>
                </li>
                <li>
                  <div class="pagelist-row">Halaman L-Fleet</div>  
                  <ul>
                    <li><a class="pagelist-row" href="lfleet/vehicle-monitoring/">Halaman Vehicle Monitoring</a></li>
                    <li><a class="pagelist-row" href="lfleet/vehicle-monitoring/detail.php">Halaman Detail Vehicle Monitoring</a></li>
                    <li><a class="pagelist-row" href="lfleet/booking-service-request/detail.php">Halaman Detail Booking Service Request</a></li>
				  </ul>
				</li>
			  </ul>
			</div>



<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>