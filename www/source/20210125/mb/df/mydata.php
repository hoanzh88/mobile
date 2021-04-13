<?php
header('Access-Control-Allow-Origin: *'); 
// header('Content-Type: text/plain');
?>
 <ons-page id="on_mydata_html">
     <ons-toolbar>
		<div class="center">CP Cua Toi</div>
		<!--
		<div class="right">             
			<ons-icon icon="fa-edit"></ons-icon>		
        </div>
		-->
	</ons-toolbar>
		
	<ons-card  onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/mydata_category.php?id=<?php echo time()?>', 'divtam_category')" >
      <div class="title">Cổ Phiếu Sở Hữu </div>
      <div class="content">-</div>
    </ons-card>
	
	
	<ons-card  onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/mydata_category.php?id=<?php echo time()?>', 'divtam_category')" >
      <div class="title">Cổ Phiếu Theo Dõi</div>
      <div class="content">-</div>
    </ons-card>

	
  </ons-page>

