<?php
define('_JEXEC', 1);
include_once('../../database.php');
$db = new database();
header('Access-Control-Allow-Origin: *'); 
// header('Content-Type: text/plain');

$macp = $_GET['macp'];

  $sql = "SELECT t1.* , dsct.ten_cong_ty 
 FROM  ck_table1 t1 
 LEFT JOIN ck_danhsachcongty dsct ON dsct.ten_cp = t1.c
 where t1.c ='$macp'";
  
 $result = $db->mysqli_fetch_data($sql);



 

?>
 <ons-page id="on_mydata_detail_html">

    <ons-toolbar>
		<div class="left"><ons-back-button></ons-back-button></div>
		<div class="center"><?php echo $macp;?></div>
	</ons-toolbar>

	 <div class="filter_detail_content" style="padding:10px; background-color: white;">
	 

    <ons-list modifier="inset">
	
<?php
$row = $result->fetch_assoc();

echo " <ons-list-item tappable modifier='longdivider'<span>". $row['ten_cong_ty'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>Xếp Hạng</label>:<span>".$row['b'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>KHUYẾN NGHỊ</label>:<span>".$row['r'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>GHI CHÚ 5 PHIÊN</label>:<span>".$row['s'] ."</span> </ons-list-item>";
// echo " <ons-list-item tappable modifier='longdivider'><label>MÃ</label>:<span>".$row['c'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>GIÁ</label>:<span>".$row['d'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label> +/_</label>:<span>".$row['e'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>VOL</label>:<span>".$row['f'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>%D+</label>:<span>".$row['g'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>CẢNH BÁO VI PHẠM <0</label>:<span>".$row['h'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>CHỈ BÁO VOL >0</label>:<span>".$row['i'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>TÍCH LUỸ >0 PHÂN PHỐI <0</label>:<span>".$row['j'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label> +/_ GIÁ 5 PHIÊN</label>:<span>".$row['k'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>TÍN HIỆU EMA %D+</label>:<span>".$row['l'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label> +/_  %D+</label>:<span>".$row['m'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>TRẠNG THÁI</label>:<span>".$row['n'] ."</span> </ons-list-item>";
// echo " <ons-list-item tappable modifier='longdivider'><label>GHI CHÚ</label>:<span>".$row['o'] ."</span> </ons-list-item>";
// echo " <ons-list-item tappable modifier='longdivider'><label>GHI CHÚ Blue >0,55%</label>:<span>".$row['p'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>ĐÁNH GIÁ TỔNG QUAN</label>:<span>".$row['q'] ."</span> </ons-list-item>";

echo " <ons-list-item tappable modifier='longdivider'><label>GIÁ TRỊ GIAO DỊCH TĐ</label>:<span>".$row['t'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>SÀN GIAO DỊCH</label>:<span>".$row['u'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>NHÓM NGÀNH</label>:<span>".$row['v'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>THỨ CẤP</label>:<span>".$row['w'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>EPS</label>:<span>".$row['x'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>P/E</label>:<span>".$row['y'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>EPS bq ngành</label>:<span>".$row['z'] ."</span> </ons-list-item>";
echo " <ons-list-item tappable modifier='longdivider'><label>P/E bq ngành</label>:<span>".$row['aa'] ."</span> </ons-list-item>";

?>
    </ons-list>
</div>
<style>
.filter_detail_content ons-list-item.list-item.list-item--longdivider{
    border-bottom: 1px solid lightgray;
}

.center.list-item__center.list-item--longdivider__center span {
    margin-left: 20px;
    color: blue;
}

</style>


	
	
  </ons-page>

