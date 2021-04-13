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
 $sql = "SELECT m.* ,t1.* FROM `ck_mydata` m LEFT JOIN ck_table1 t1 ON t1.c = m.ten_cp";
 $result = $db->mysqli_fetch_data($sql);

 while ($row = $result->fetch_assoc()) {
	   // echo $row['c'];
	   $company_name = 'Công ty Cổ phần Tasco ('.$row['u'].')';
	   
	   
	   
?>	   
	 <ons-card  onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/mydata_detail.php?id=<?php echo time()?>', 'divtam_detail')" >
      <div class="content">
	  	<ons-row>
			<ons-col>
				<label  class="title"><?php echo $row['c'];?></label><span style='color: blue'><?php echo $company_name;?></span>
				<hr/>
				<div style="font-size:11px;"><label>Kiến Nghị</label>:<span style='color: blue'><?php echo $row['r'];?></span></div>
				<div style="font-size:11px;"><label>TRẠNG THÁI</label>:<span style='color: blue'><?php echo $row['n'];?></span></div>
				<div style="font-size:11px;"><label>GHI CHÚ 5 PHIÊN</label>:<span style='color: blue'><?php echo $row['s'];?></span></div>
				<div style="font-size:11px;"><label>+/_ GIÁ 5 PHIÊN</label>:<span style='color: blue'><?php echo $row['k'];?></span></div>
			</ons-col>			
		</ons-row>
		

		
		<ons-row>
		  <!-- <ons-col width="60px" class="title" ><?php echo $row['c'];?></ons-col> -->
		  <ons-col style="font-size:10px;">
		<ul>
<?php
// echo "<li><label>MÃ</label>:<span>".$row['c'] ."</span></li>";
echo "<li><label>GIÁ</label>:<span>".$row['d'] ."</span></li>";
echo "<li><label> +/_</label>:<span>".$row['e'] ."</span></li>";
echo "<li><label>VOL</label>:<span>".$row['f'] ."</span></li>";
echo "<li><label>%D+</label>:<span>".$row['g'] ."</span></li>";
echo "<li><label>CẢNH BÁO VI PHẠM <0</label>:<span>".$row['h'] ."</span></li>";
echo "<li><label>CHỈ BÁO VOL >0</label>:<span>".$row['i'] ."</span></li>";
// echo "<li><label>TÍCH LUỸ >0 PHÂN PHỐI <0</label>:<span>".$row['j'] ."</span></li>";
// echo "<li><label> +/_ GIÁ 5 PHIÊN</label>:<span>".$row['k'] ."</span></li>";
echo "<li><label>TÍN HIỆU EMA %D+</label>:<span>".$row['l'] ."</span></li>";
// echo "<li><label> +/_  %D+</label>:<span>".$row['m'] ."</span></li>";
// echo "<li><label>TRẠNG THÁI</label>:<span>".$row['n'] ."</span></li>";
// echo "<li><label>GHI CHÚ</label>:<span>".$row['o'] ."</span></li>";
// echo "<li><label>GHI CHÚ Blue >0,55%</label>:<span>".$row['p'] ."</span></li>";
// echo "<li><label>ĐÁNH GIÁ TỔNG QUAN</label>:<span>".$row['q'] ."</span></li>";
// echo "<li><label>KHUYẾN NGHỊ</label>:<span>".$row['r'] ."</span></li>";
// echo "<li><label>GHI CHÚ 5 PHIÊN</label>:<span>".$row['s'] ."</span></li>";
// echo "<li><label>GIÁ TRỊ GIAO DỊCH TĐ</label>:<span>".$row['t'] ."</span></li>";
// echo "<li><label>SÀN GIAO DỊCH</label>:<span>".$row['u'] ."</span></li>";
// echo "<li><label>NHÓM NGÀNH</label>:<span>".$row['v'] ."</span></li>";
// echo "<li><label>THỨ CẤP</label>:<span>".$row['w'] ."</span></li>";
// echo "<li><label>EPS</label>:<span>".$row['x'] ."</span></li>";
// echo "<li><label>P/E</label>:<span>".$row['y'] ."</span></li>";
// echo "<li><label>EPS bq ngành</label>:<span>".$row['z'] ."</span></li>";
// echo "<li><label>P/E bq ngành</label>:<span>".$row['aa'] ."</span></li>";
?>
</ul>
		  </ons-col>

	





		</ons-row>
		

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
</style>


<style>
#filter_detail_content_list ons-list-item.list-item.list-item--longdivider{
    border-bottom: 1px solid lightgray;
}
</style>
	
  </ons-page>

