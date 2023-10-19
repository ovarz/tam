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
		
		  <?php  
			$ddb_array = array();
			$ddb_array[]=array('ddb_label'=>'Number Plate','ddb_content'=>'B 0000 XXX');
			$ddb_array[]=array('ddb_label'=>'VIN','ddb_content'=>'XXXXXXXXXXXXXXXXX');
			$ddb_array[]=array('ddb_label'=>'Brand','ddb_content'=>'Toyota');
			$ddb_array[]=array('ddb_label'=>'Model','ddb_content'=>'Calya');
			$ddb_array[]=array('ddb_label'=>'Year','ddb_content'=>'2023');
			$ddb_array[]=array('ddb_label'=>'Group Dealer','ddb_content'=>'Tunas Toyota');
			$ddb_array[]=array('ddb_label'=>'Dealer Outlet','ddb_content'=>'Tunas Toyota Pasar Minggu');
			$ddb_array[]=array('ddb_label'=>'Preferable Dealer Service','ddb_content'=>'Tunas Toyota Pasar Minggu');
			$ddb_array[]=array('ddb_label'=>'Delivery Date','ddb_content'=>'2023-08-08');
			$ddb_array[]=array('ddb_label'=>'Remarks','ddb_content'=>'Lorem Ipsum Dolor');
			foreach($ddb_array as $ddb_list){
		  ?>
            <div class="ddb-row">
              <div class="ddb-column ddb-label"><?php echo($ddb_list['ddb_label'])?></div>
              <div class="ddb-column ddb-separator">:</div>
              <div class="ddb-column ddb-info">
                <div class="ddb-content"><?php echo($ddb_list['ddb_content'])?></div>
              </div>
            </div>
		  <?php } ?>
		  
		</div>
	    <div class="default-data-box">
		
		  <?php  
			$ddb_array = array();
			$ddb_array[]=array('ddb_label'=>'Subscription Status','ddb_content'=>'Active');
			$ddb_array[]=array('ddb_label'=>'Subscription Start Date','ddb_content'=>'2023-08-08');
			$ddb_array[]=array('ddb_label'=>'Subscription End Date','ddb_content'=>'2023-08-08');
			$ddb_array[]=array('ddb_label'=>'Device ID','ddb_content'=>'999920230816006');
			$ddb_array[]=array('ddb_label'=>'Device Manufacturer','ddb_content'=>'Teltonika');
			foreach($ddb_array as $ddb_list){
		  ?>
            <div class="ddb-row">
              <div class="ddb-column ddb-label"><?php echo($ddb_list['ddb_label'])?></div>
              <div class="ddb-column ddb-separator">:</div>
              <div class="ddb-column ddb-info">
                <div class="ddb-content"><?php echo($ddb_list['ddb_content'])?></div>
              </div>
            </div>
		  <?php } ?>
		  
            <div class="ddb-row">
              <div class="ddb-column ddb-label">Immobilizer Status</div>
              <div class="ddb-column ddb-separator">:</div>
              <div class="ddb-column ddb-info">
                <div class="ddb-content ddb-alert">
				  On <?php require ($_SERVER['TAM'].'img/icon/alert.svg')?>
				</div>
              </div>
            </div>
		
		  <?php  
			$ddb_array = array();
			$ddb_array[]=array('ddb_label'=>'Masa Berlaku STNK','ddb_content'=>'2023-08-08');
			$ddb_array[]=array('ddb_label'=>'Masa Berlaku BPKB','ddb_content'=>'2023-08-08');
			$ddb_array[]=array('ddb_label'=>'Tanggal Uji KIR','ddb_content'=>'2023-08-08');
			foreach($ddb_array as $ddb_list){
		  ?>
            <div class="ddb-row">
              <div class="ddb-column ddb-label"><?php echo($ddb_list['ddb_label'])?></div>
              <div class="ddb-column ddb-separator">:</div>
              <div class="ddb-column ddb-info">
                <div class="ddb-content"><?php echo($ddb_list['ddb_content'])?></div>
              </div>
            </div>
		  <?php } ?>
		  
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