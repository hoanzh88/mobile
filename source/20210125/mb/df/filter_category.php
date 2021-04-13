<?php
 define('_JEXEC', 1);
include_once('../../database.php');
$db = new database();

// echo "<pre>";
// print_r($db); 
// echo "</pre>"; 
// die();  
  
header('Access-Control-Allow-Origin: *'); 
$randtime = time();
?>
  
  
    <ons-page id="on_filter_category_html">
	<!--
  <ons-splitter>
  <ons-splitter-side id="menu" side="right" width="220px" collapse swipeable>
    <ons-page>
      <ons-list>
        <ons-list-item onclick="loadmenupage('http://condev.connect.ila.edu.vn/cronjob/course_schedule/mb/data_menu1.php')" tappable>
          Home
        </ons-list-item>
        <ons-list-item onclick="loadmenupage('http://condev.connect.ila.edu.vn/cronjob/course_schedule/mb/data_menu2.php')" tappable>
          Settings
        </ons-list-item>
        <ons-list-item onclick="loadmenupage('http://condev.connect.ila.edu.vn/cronjob/course_schedule/mb/data_menu3.php')" tappable>
          About
        </ons-list-item>
      </ons-list>
    </ons-page>

  </ons-splitter-side>

</ons-splitter>

  -->
    <ons-toolbar >
		<div class="left"><ons-back-button></ons-back-button></div>
	
	<!--
		<div class="right">
			<ons-toolbar-button onclick="fn.open()">
			  <ons-icon icon="ellipsis-v"></ons-icon>
			</ons-toolbar-button>
		</div>
		-->

	
		<div class="center">
			Lọc cổ phiếu %D+
		</div>
    </ons-toolbar>
<!--
  <p style="text-align: center; margin-top: 10px;">
    <ons-search-input
      placeholder="Search"
      onchange="ons.notification.alert('Searched for: ' + this.value)"
    ></ons-search-input>
  </p>
  -->
<?php
$r = $_GET['r'];
$sql = "SELECT t1.* , dsct.ten_cong_ty 
 FROM  ck_table1 t1 
 LEFT JOIN ck_danhsachcongty dsct ON dsct.ten_cp = t1.c
  where t1.r ='$r'
";
  
 $result = $db->mysqli_fetch_data($sql);

 while ($row = $result->fetch_assoc()) {
		   $company_name =  $row['ten_cong_ty'] .'('.$row['u'].')';
		   	   if($row['k'] == 0){
		   $color = "#f99b1c;";
	   }else if($row['k'] > 0){
		   $color = "green;";
	   }else{
		   $color = "red";
	   }
?>	   
		 <ons-card >
      <div class="content" >
	  	<ons-row  onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_detail.php?macp=<?php echo $row['c'];;?>&v=<?php echo time()?>', 'divtam_detail')" >
			<ons-col>
				<label   style='color: <?php echo $color;?>' class="title"><?php echo $row['c'];?></label><span style='color: blue'><?php echo $company_name;?></span>
				<hr/>
			</ons-col>		

	

			
		</ons-row>
		
		<ons-row>
			<ons-col>
				<div style="font-size:11px;"><label>Kiến Nghị</label>:<span style='color: blue'><?php echo $row['r'];?></span></div>
				<div style="font-size:11px;"><label>TRẠNG THÁI</label>:<span style='color: blue'><?php echo $row['n'];?></span></div>
				<div style="font-size:11px;"><label>GHI CHÚ 5 PHIÊN</label>:<span style='color: blue'><?php echo $row['s'];?></span></div>
				<div style="font-size:11px;"><label>+/_ GIÁ 5 PHIÊN</label>:<span style='color: <?php echo $color;?>'><?php echo $row['k'];?></span></div>
					
				  <div class="button_botom"  onclick="alert('Chức năng này chưa làm tới!'); return 0;">
				  Theo dõi
				  </div>
					 <div class="button_botom"  onclick="alert('Chức năng này chưa làm tới!'); return 0;">
				  Sở hữu
				  </div>	
			</ons-col>		
		</ons-row>
		<!--
				<ons-row>
				<ons-col>
		<div style="padding-top: 15px; ">				
				  <div class="button_botom">
				  Xóa
				  </div>
					
			
		</div>
		</ons-col>
		</ons-row>
		-->
	  </div>
    </ons-card>
	
	
	   
<?php	 
 }
?>
<?php
/*
foreach($data2 AS $dt2){
$color = "black";
if($dt2['id'] == 1){
	$color = "red";
	$kiennghi = "HÀNG SẴN MUA THÊM/CHỐT LỜI";
} else if($dt2['id'] == 2){
	$color = "#00aae7;";
	$kiennghi = "BÁN HẾT";
}else if($dt2['id'] == 3){
	$color = "#f99b1c;";
		$kiennghi = "CHỐT 1/3";
} else if($dt2['id'] == 4){
	$color = "#ff00ff;";
		$kiennghi = "MUA THĂM DÒ 13%";
} 
?>
	<ons-card data-attribute="<?php echo $dt2['id'];?>" class="filter_category_list_card" onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_detail.php?id=<?php echo time()?>', 'divtam_detail')" >
      <div class="title" style="color: <?php echo $color;?>"> <?php echo $dt2['value'];?></div>
      <div class="content" style="font-size:10px;">
		Kiến Nghị:	<span style="color: <?php echo $color;?>"> <?php echo $kiennghi;?>  </span>
	  </div>
    </ons-card>
	
<?php
}
*/
?>	 
<div id="filter_detail_content_list" class="action-sheet-mask"  style="padding:1px; background-color: white; display: none; z-index: 10001;">
<?php
$data[] = array("id" =>1, "value" => "QUAN SÁT");
$data[] = array("id" =>2, "value" => "6.N/A");
$data[] = array("id" =>2, "value" => "CÂN NHẮC QUAN SÁT");
$data[] = array("id" =>1, "value" => "1.HÀNG SẴN MUA THÊM/CHỐT LỜI");
$data[] = array("id" =>3, "value" => "BÁN");
$data[] = array("id" =>3, "value" => "3.QUAN SÁT MUA");
$data[] = array("id" =>1, "value" => "BÁN HẾT");
$data[] = array("id" =>1, "value" => "QUAN SÁT HẠ TỶ TRỌNG");
$data[] = array("id" =>4, "value" => "BÁN 1/2");
$data[] = array("id" =>4, "value" => "CHỐT 1/3");
$data[] = array("id" =>1, "value" => "N/A");
$data[] = array("id" =>2, "value" => "2.MUA THĂM DÒ 13%");
$data[] = array("id" =>1, "value" => "2.MUA THĂM DÒ 7,%");
$data[] = array("id" =>2, "value" => "3.HOLD");
$data[] = array("id" =>4, "value" => "4.TỐI ƯU LỢI NHUẬN");

?> 
 <ons-list-title>Notifications</ons-list-title>
    <ons-list modifier="inset">
	<ons-list-item tappable modifier="longdivider" onclick="showFilterCategory('all')">
        <div class="center">
         Show all
        </div>
      </ons-list-item>
<?php
foreach($data AS $dt){
?>
      <ons-list-item tappable modifier="longdivider" onclick="showFilterCategory('<?php echo $dt['id'];?>')">
        <div class="center">
          <?php echo $dt['value'];?>
        </div>
      </ons-list-item>
<?php
}
?>	  
    </ons-list>
</div>
<style>

label.title{
	font-size: 14px;
	margin-right: 5px;
	color: #00aae7;
}

.content div.button_botom{
	border-radius:13em/3em; border: ridge green; width: 60px; text-align: center; margin-right: 4px;
	    float: right;
		color: black;
}
#filter_detail_content_list ons-list-item.list-item.list-item--longdivider{
    border-bottom: 1px solid lightgray;
}
</style>
</ons-page>