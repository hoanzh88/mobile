<?php
header('Access-Control-Allow-Origin: *'); 
// header('Content-Type: text/plain');
?>
<ons-page id="on_setting_html">
    <ons-toolbar>
		<div class="center">Chướng Hòa Hoan</div>
	</ons-toolbar>
	  
	<ons-list>
    <ons-list-header>Settings</ons-list-header>
	
	<ons-list-item>
      <div class="center">
        	Hướng dẫn Sử Dụng
      </div>
    </ons-list-item>   
	
	<ons-list-item>
      <div class="center">
        	Điều Khoản Sử Dụng
      </div>
    </ons-list-item>   
	
    <ons-list-item>
      <div class="center">
        Nhận thông báo
      </div>
      <div class="right">
        <ons-switch checked></ons-switch>
      </div>
    </ons-list-item>   
	

	<ons-list-item>
      <div class="center">
        	<ons-button onclick="logout()" modifier="large">Log out</ons-button>
      </div>
    </ons-list-item>   
	
	<ons-list-item>
      <div class="center">
        	<ons-button modifier="large" onclick="getDataTmp('https://intranet.ila.edu.vn/mb/df/change_password.php?v=4', 'divtam_detail')" >Change password</ons-button>
      </div>
    </ons-list-item>   
	
	
  </ons-list>  
  </ons-page>


