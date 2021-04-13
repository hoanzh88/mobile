<?php
define('_JEXEC', 1);
include_once('../../database.php');
$db = new database();
header('Access-Control-Allow-Origin: *'); 
// header('Content-Type: text/plain');
?>
 <ons-page id="on_mydata_category_html">

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
		<div class="center">
			CP của tôi
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
 $sql = "SELECT m.* ,t1.*, dsct.ten_cong_ty 
 FROM `ck_mydata` m 
 LEFT JOIN ck_table1 t1 ON t1.c = m.ten_cp
 LEFT JOIN ck_danhsachcongty dsct ON dsct.ten_cp = m.ten_cp" 
 ;
 $result = $db->mysqli_fetch_data($sql);

 while ($row = $result->fetch_assoc()) {
	   // echo $row['c'];
	   $company_name =  $row['ten_cong_ty'] .'('.$row['u'].')';
	   
	   $lailo = '-';
	   $lailophantram = '-';
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
	  	<ons-row  onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/mydata_detail.php?macp=<?php echo $row['ten_cp'];;?>&v=<?php echo time()?>', 'divtam_detail')" >
			<ons-col>
				<label   style='color: <?php echo $color;?>' class="title"><?php echo $row['ten_cp'];?></label><span style='color: blue'><?php echo $company_name;?></span>
				<hr/>
			</ons-col>		

	

			
		</ons-row>
		
		<ons-row>
			<ons-col>
				<div style="font-size:11px;"><label>Kiến Nghị</label>:<span style='color: blue'><?php echo $row['r'];?></span></div>
				<div style="font-size:11px;"><label>TRẠNG THÁI</label>:<span style='color: blue'><?php echo $row['n'];?></span></div>
				<div style="font-size:11px;"><label>GHI CHÚ 5 PHIÊN</label>:<span style='color: blue'><?php echo $row['s'];?></span></div>
				<div style="font-size:11px;"><label>+/_ GIÁ 5 PHIÊN</label>:<span style='color: <?php echo $color;?>'><?php echo $row['k'];?></span></div>
			</ons-col>		

			<ons-col>
				<div style="font-size:11px;"><label>Giá Mua</label>:<span style='color: blue'><?php echo number_format($row['gia_mua']);?></span></div>
				<div style="font-size:11px;"><label>Khối Lượng</label>:<span style='color: blue'><?php echo $row['so_luong'];?></span></div>
				<div style="font-size:11px;"><label>Lãi lỗ</label>:<span style='color: blue'><?php echo $lailo;?></span></div>
				<div style="font-size:11px;"><label>% Lãi lỗ</label>:<span style='color: blue'><?php echo $lailophantram;?></span></div>
					
				  <div class="button_botom"  onclick="alert('Chức năng này chưa làm tới!'); return 0;">
				  Xóa
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
	
	
<style>

label.title{
	font-size: 14px;
	margin-right: 5px;
	color: #00aae7;
}

.content div.button_botom{
	border-radius:13em/3em; border: ridge gold; width: 50px; text-align: center;
	    float: right;
}
#filter_detail_content_list ons-list-item.list-item.list-item--longdivider{
    border-bottom: 1px solid lightgray;
}
</style>
	
  </ons-page>

