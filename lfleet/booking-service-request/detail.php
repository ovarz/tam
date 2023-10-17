<?php 
  $page='lfleet';
  $nav='Booking Service Request';
  $navParent='L-Fleet';
  $arrPageList = require ('../../inc/base.php')
?>
<?php require ($_SERVER['TAM'].'inc/sample.php')?>
<?php require ($_SERVER['TAM'].'inc/meta.php')?>
<h1 class="hide">Job Report <?php echo $page; ?></h1>



<div class="rancak-container">
  <?php require ($_SERVER['TAM'].'inc/nav.php')?>
  <div class="rancak-content">
  
    <?php require ($_SERVER['TAM'].'inc/header.php')?>
	
	
	
	<section title="Booking Service Request Detail" class="section-default">
	  <?php $st_back='yes'; $st_back_link='lfleet/booking-service-request/'; $st_info='no'; require ($_SERVER['TAM'].'module/section-title.php')?>
	  
	  <div class="default-data default-data-input booking-service-request-data">
	    <div class="default-data-box">
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content ddb-content-disable">Tunas Toyota Pasar Minggu</div>
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info ddb-select">
			  <select class="ddb-content ddb-content-field">
                <option value="1">Tunas Toyota Pasar Minggu</option>
                <option value="2">AUTO2000 Mangga Dua</option>
                <option value="3">Astrindo Toyota Harmoni</option>
                <option value="4">AUTO2000 Kalimalang</option>
                <option value="5">Astrindo Toyota Kelapa Gading</option>
              </select>
			  <?php require ($_SERVER['TAM'].'img/icon/select.svg')?>
			</div>
		  </div>
		  
		</div>
	    <div class="default-data-box">
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <input class="ddb-content ddb-content-field" type="text" value="Tunas Toyota Pasar Minggu">
			</div>
		  </div>
		  
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content ddb-content-disable">Tunas Toyota Pasar Minggu</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	  
	  
	</section>
	
	
	
	<div class="bottom-button-list">
	  <a title="Immobilizer" class="btn bbl-button" href="lfleet/booking-service-request/">
	    Submit
	  </a>
	</div>
	
  </div>
</div>



<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>