<?php
header('Access-Control-Allow-Origin: *'); 
?>
<ons-page>  

	<div style="text-align: center; margin-top: 30px;">  
	<img class="thumbnail"  width="200px" src="http://mamsongdamchoi.com/mb/logo.png">
		<p>  
			<ons-input id="username" modifier="underbar" placeholder="Username" float></ons-input>  
		</p>  
		<p>  
			<ons-input id="password" modifier="underbar" type="password" placeholder="Password" float></ons-input>  
		</p>  
		<p style="margin-top: 30px;">  
			<ons-button onclick="login()">Sign in</ons-button>  
		</p>  
	</div>  
</ons-page> 




