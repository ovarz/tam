<?php 
  $page='lfleet';
  $nav='Vehicle Monitoring';
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
	
	
	
	<section title="Vehicle Monitoring Detail" class="section-default">
	  <?php $st_back='yes'; $st_back_link='lfleet/vehicle-monitoring/'; $st_info='no'; require ($_SERVER['TAM'].'module/section-title.php')?>
	  
	  <?php  
	    $tab_array = array();
        $tab_array[]=array('tab_label'=>'Vehicle&nbspInfo','tab_curr'=>'yes','tab_link'=>'lfleet/vehicle-monitoring/detail.php');
        $tab_array[]=array('tab_label'=>'Customer&nbspInfo','tab_curr'=>'no','tab_link'=>'lfleet/vehicle-monitoring/detail.php');
        $tab_array[]=array('tab_label'=>'Value&nbspChain','tab_curr'=>'no','tab_link'=>'lfleet/vehicle-monitoring/detail.php');
        $tab_array[]=array('tab_label'=>'Reminder','tab_curr'=>'no','tab_link'=>'lfleet/vehicle-monitoring/detail.php');
        $tab_array[]=array('tab_label'=>'History','tab_curr'=>'no','tab_link'=>'lfleet/vehicle-monitoring/detail.php');
		$tab_class='vehicle-monitoring';
	    require ($_SERVER['TAM'].'module/default-tab.php')
	  ?>
	  
	  <div class="default-data vehicle-monitoring-data">
	    <div class="default-data-box">
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content">Tunas Toyota Pasar Minggu</div>
			</div>
		  </div>
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content">Tunas Toyota Pasar Minggu</div>
			</div>
		  </div>
		  
		</div>
	    <div class="default-data-box">
		
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content">Tunas Toyota Pasar Minggu</div>
			</div>
		  </div>
		  
		  <div class="ddb-row">
		    <div class="ddb-column ddb-label">Subscription Start Date</div>
		    <div class="ddb-column ddb-separator">:</div>
		    <div class="ddb-column ddb-info">
			  <div class="ddb-content">Off <?php require ($_SERVER['TAM'].'img/icon/alert.svg')?></div>
			</div>
		  </div>
		  
		</div>
	  </div>
	  
	  
	</section>
	
	
	
	<div class="bottom-button-list">
	  <button title="Immobilizer" class="btn bbl-button open-popup">
	    Immobilizer Off
	  </button>
	  <button title="ODOmeter" class="btn bbl-button open-popup">
	    ODOmeter
	  </button>
	  <button title="BookingService" class="btn bbl-button open-popup">
	    Booking Service
	  </button>
	</div>
	
  </div>
</div>



<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>