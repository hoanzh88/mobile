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

    <ons-toolbar >
		<div class="left"><ons-back-button></ons-back-button></div>

	
		<div class="center">
			Lọc cổ phiếu %D+
		</div>
    </ons-toolbar>
	 <div class="filter_detail_content" style="padding:10px; background-color: white;">
       <ons-list modifier="inset">
<?php
 $sql = "SELECT r FROM `ck_table1` group by r";
  
 $result = $db->mysqli_fetch_data($sql);

 while ($row = $result->fetch_assoc()) {	
 $datasearch = $row['r'];
?>


<ons-list-item tappable modifier='longdivider'  onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_category.php?r=<?php echo $datasearch;?>&v=<?php echo $randtime;?>', 'divtam_category')"><ons-icon style="color:green" size="10px" icon="fa-filter"></ons-icon>		<span><?php echo $row['r'] ?></span> </ons-list-item>
	   
	<?php
 }
?>
    </ons-list>
 
</div>
<style>
.filter_detail_content ons-list-item.list-item.list-item--longdivider{
    border-bottom: 1px solid lightgray;
}


</style>
</ons-page>