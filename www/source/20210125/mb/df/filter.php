<?php
header('Access-Control-Allow-Origin: *'); 
$randtime = time();
?>
  <ons-page id="on_filter_html">
		<ons-toolbar>
			<div class="center">Danh Mục Lọc</div>
		</ons-toolbar>
        <div>	
		<ons-list class="menu_list">
          <ons-list-item class="menu_item" modifier="chevron" tappable onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_section.php?v=<?php echo $randtime;?>', 'divtam_section')"><ons-icon icon="fa-line-chart"></ons-icon>  1. Lọc cổ phiếu %D+</ons-list-item>
		  
          <ons-list-item class="menu_item" modifier="chevron" tappable onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_category.php?v=<?php echo $randtime;?>', 'divtam_category')"><ons-icon icon="fa-line-chart"></ons-icon>  2. Lọc cổ phiếu theo tỷ trọng %D+</ons-list-item>
		  
          <ons-list-item class="menu_item" modifier="chevron" tappable onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_category.php?v=<?php echo $randtime;?>', 'divtam_category')"><ons-icon icon="fa-line-chart"></ons-icon>  3. Lọc trạng thái - chart</ons-list-item>
		  
          <ons-list-item class="menu_item" modifier="chevron" tappable onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_category.php?v=<?php echo $randtime;?>', 'divtam_category')"><ons-icon icon="fa-line-chart"></ons-icon>  4. Báo cáo thống kê/ Chỉ báo</ons-list-item>
        </ons-list>		
      </div>
  </ons-page>