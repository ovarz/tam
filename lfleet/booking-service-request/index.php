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
	
	
	
	<section title="Booking Service Request Table" class="section-default">
	  <?php $st_back='no'; $st_back_link=''; $st_info='no'; require ($_SERVER['TAM'].'module/section-title.php')?>
	  
	  <?php $search_class='mobile-only'; $search_filter='yes'; require ($_SERVER['TAM'].'module/section-search.php')?>
	  
	  <div class="default-table">
	    <div class="default-table-row default-table-head">
		  <div class="default-table-column column-plate">Number Plate</div>
		  <div class="default-table-column column-vin">VIN</div>
		  <div class="default-table-column column-dealer">Dealer</div>
		  <div class="default-table-column column-name">Name</div>
		  <div class="default-table-column column-phone">Phone Number</div>
		  <div class="default-table-column column-servicedate">Service Date</div>
		  <div class="default-table-column column-servivetype">Service Type</div>
		</div>
		<?php $total_column='7'; require ($_SERVER['TAM'].'module/table-column-search.php')?>
		<?php for ($i=1; $i <= 20 ; $i++) { ?>
          <div class="default-table-row">
            <div class="default-table-column column-plate">
			  <div class="dtc-label mobile-only">Number Plate</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <a title="Detail" class="dtc-data" href="lfleet/booking-service-request/detail.php">B 0000 XXX</a>
			</div>
            <div class="default-table-column column-vin">
			  <div class="dtc-label mobile-only">VIN</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">0000000000000000</div>
			</div>
            <div class="default-table-column column-dealer">
			  <div class="dtc-label mobile-only">Dealer</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">AUTO2000 Tebet Saharjo</div>
			</div>
            <div class="default-table-column column-name">
			  <div class="dtc-label mobile-only">Name</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">PT AAAAA</div>
			</div>
            <div class="default-table-column column-phone">
			  <div class="dtc-label mobile-only">Phone</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">+62&nbsp;800&nbsp;0000&nbsp;0000</div>
			</div>
            <div class="default-table-column column-servicedate">
			  <div class="dtc-label mobile-only">Service Date</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">2023-08-08 08:00</div>
			</div>
            <div class="default-table-column column-servivetype">
			  <div class="dtc-label mobile-only">Service Type</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">30000</div>
			</div>
          </div>
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['TAM'].'module/pagination.php')?>
	</section>
	
	
	
	<div class="bottom-button-list">
	  <a title="Immobilizer" class="btn bbl-button" href="lfleet/booking-service-request/">
	    Download
	  </a>
	</div>
	
  </div>
</div>



<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>