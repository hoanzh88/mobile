<?php
header('Access-Control-Allow-Origin: *'); 
// header('Content-Type: text/plain');
?>
<ons-page id="change_password">
    <ons-toolbar>
		<div class="left"><ons-back-button></ons-back-button></div>
		<div class="center">Đổi Mật Khẩu</div>
	</ons-toolbar> 
  	<div style="text-align: center; margin-top: 30px;">  
		<p>  
			<ons-input id="password" modifier="underbar" placeholder="Mật khẩu hiện tại" float></ons-input>  
		</p>  
		<p>  
			<ons-input id="password1" modifier="underbar" placeholder="Mật khẩu mới" float></ons-input>  
		</p>   
		
		<p>  
			<ons-input id="password2" modifier="underbar" placeholder="Nhập lại Mật khẩu mới" float></ons-input>  
		</p>   
		
		
		<p style="margin-top: 30px;">  
			<ons-button onclick="changepassword()">Xác nhận</ons-button>  
		</p>  
	</div>
  </ons-page>


