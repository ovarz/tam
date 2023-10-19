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
		    <div class="ddb-column ddb-label">City</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info ddb-select">
			  <select class="ddb-content ddb-content-field">
                <option value="0">-- CHOOSE CITY --</option>
                <option value="1">Jakarta Utara</option>
                <option value="2">Jakarta Barat</option>
                <option value="3">Jakarta Pusat</option>
                <option value="4">Jakarta Timur</option>
                <option value="5">Jakarta Selatan</option>
              </select>
			  <?php require ($_SERVER['TAM'].'img/icon/select.svg')?>
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">City</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info ddb-select">
			  <select class="ddb-content ddb-content-field">
                <option value="0">-- CHOOSE DEALER --</option>
                <option value="1">AUTO2000 Daan Mogot</option>
                <option value="2">Astrido Toyota Harmoni</option>
                <option value="3">AUTO2000 Tebet Saharjo</option>
                <option value="4">Daya Toyota Cakung</option>
                <option value="5">AUTO2000 Yos Sudarso</option>
              </select>
			  <?php require ($_SERVER['TAM'].'img/icon/select.svg')?>
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Vehicle Type</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content ddb-content-disable">All New Kijang Innova Zenix</div>
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Number Plate</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content ddb-content-disable">B 0000 XXX</div>
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Name on STNK</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <input class="ddb-content ddb-content-field" type="text" value="Mr XXXXX">
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Problems with the car</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <textarea class="ddb-content ddb-content-field">AC Bocor</textarea>
			</div>
		  </div>
		  
		</div>
	    <div class="default-data-box">
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Type Service</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info ddb-select">
			  <select class="ddb-content ddb-content-field">
                <option value="0">-- CHOOSE TYPE SERVICE --</option>
                <option value="1">10000</option>
                <option value="2">20000</option>
                <option value="3">30000</option>
                <option value="4">40000</option>
                <option value="5">50000</option>
              </select>
			  <?php require ($_SERVER['TAM'].'img/icon/select.svg')?>
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Other Type Service</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <input class="ddb-content ddb-content-field" type="text">
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Date & Time Service</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <input class="ddb-content ddb-content-field" type="text" value="2023-08-08 08:00">
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Name</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <input class="ddb-content ddb-content-field" type="text" value="Mr AAAAA">
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Email</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <input class="ddb-content ddb-content-field" type="text" value="aaaaa@gmail.com">
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Phone Number</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <input class="ddb-content ddb-content-field" type="text" value="+62 800 0000 0000">
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