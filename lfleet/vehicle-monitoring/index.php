<?php 
  $page='lfleet';
  $nav='Vehicle Monitoring';
  $navParent='L-Fleet';
  $login='no';
  $arrPageList = require ('../../inc/base.php')
?>
<?php require ($_SERVER['TAM'].'inc/sample.php')?>
<?php require ($_SERVER['TAM'].'inc/meta.php')?>
<h1 class="hide">Job Report <?php echo $page; ?></h1>



<div class="rancak-container">
  <?php require ($_SERVER['TAM'].'inc/nav.php')?>
  <div class="rancak-content">
  
    <?php require ($_SERVER['TAM'].'inc/header.php')?>
	
	
	
	<section title="F.A.Q" class="section-default section-faq">
	  <?php $st_back='no'; $st_back_link=''; $st_info='yes'; require ($_SERVER['TAM'].'module/section-title.php')?>
	  
	  <?php $search_class='mobile-only'; $search_filter='yes'; require ($_SERVER['TAM'].'module/section-search.php')?>
	  
	  <div class="default-table">
	    <div class="default-table-row default-table-head">
		  <div class="default-table-column column-plate">Number Plate</div>
		  <div class="default-table-column column-vin">VIN</div>
		  <div class="default-table-column column-brand">Brand</div>
		  <div class="default-table-column column-model">Model</div>
		  <div class="default-table-column column-year">Year</div>
		  <div class="default-table-column column-customer">Customer Name</div>
		  <div class="default-table-column column-project">Project Name</div>
		  <div class="default-table-column column-immobilizer">Immobilizer Status</div>
		  <div class="default-table-column column-reminder">Next Service Reminder</div>
		  <div class="default-table-column column-status">Status</div>
		  <div class="default-table-column column-remarks">Remarks</div>
		</div>
		<?php $total_column='11'; require ($_SERVER['TAM'].'module/table-column-search.php')?>
		<?php for ($i=1; $i <= 10 ; $i++) { ?>
          <div class="default-table-row">
            <div class="default-table-column column-plate">
			  <div class="dtc-label mobile-only">Number Plate</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <a title="Detail" class="dtc-data" href="lfleet/vehicle-monitoring/detail.php">B 0000 XXX</a>
			</div>
            <div class="default-table-column column-vin">
			  <div class="dtc-label mobile-only">VIN</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">0000000000000000</div>
			</div>
            <div class="default-table-column column-brand">
			  <div class="dtc-label mobile-only">Brand</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">Toyota</div>
			</div>
            <div class="default-table-column column-model">
			  <div class="dtc-label mobile-only">Model</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">Fortuner</div>
			</div>
            <div class="default-table-column column-year">
			  <div class="dtc-label mobile-only">Year</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">2023</div>
			</div>
            <div class="default-table-column column-customer">
			  <div class="dtc-label mobile-only">Customer Name</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">PT ABCDE</div>
			</div>
            <div class="default-table-column column-project">
			  <div class="dtc-label mobile-only">Project Name</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">XXXXXXX</div>
			</div>
            <div class="default-table-column column-immobilizer">
			  <div class="dtc-label mobile-only">Immobilizer Status</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">Off</div>
			</div>
            <div class="default-table-column column-reminder">
			  <div class="dtc-label mobile-only">Next Service Reminder</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">00/00/0000</div>
			</div>
            <div class="default-table-column column-status">
			  <div class="dtc-label mobile-only">Status</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">Active</div>
			</div>
            <div class="default-table-column column-remarks">
			  <div class="dtc-label mobile-only">Remarks</div>
			  <div class="dtc-separator mobile-only">:</div>
			  <div class="dtc-data">Lorem Ipsum</div>
			</div>
          </div>
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['TAM'].'module/pagination.php')?>
	</section>
	
  </div>
</div>



<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>