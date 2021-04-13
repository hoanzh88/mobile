<?php
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
			Settings
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

	<!-- <ons-card  onclick="getDataTmp('http://mamsongdamchoi.com/mb/df/filter_detail.php?id=<?php echo time()?>', 'divtam_detail')" > -->
	<ons-card onclick="ons.notification.alert('Hello, world!')" >
      <div class="title">AAA</div>
      <div class="content">
abc
		
	  </div>
    </ons-card>
		<!--
    <ons-tabbar swipeable id="appTabbar22" position="bottom">
      <ons-tab label="Home" icon="ion-home" page="home.html" active></ons-tab>
      <ons-tab label="Forms" icon="ion-edit" page="forms.html"></ons-tab>
      <ons-tab label="Animations" icon="ion-film-marker" page="animations.html"></ons-tab>
    </ons-tabbar>
-->

	<ons-tabbar position="bottom">
		<ons-tab  label="aaa" icon="fa-bar-chart"></ons-tab>	
		<ons-tab label="bbb" icon="fa-bar-chart"></ons-tab>
		<ons-tab  label="ccc" icon="fa-hand-holding-usd"></ons-tab>
		<ons-tab  label="ddd" icon="fa-newspaper-o" ></ons-tab>
		<ons-tab onclick="ons.openActionSheet({ buttons: ['Label 1', 'Label 2', 'Label 3', 'Cancel'], destructive: 2, cancelable: true })" label="eee" icon="fa-user-alt" ></ons-tab>
	</ons-tabbar>

</ons-page>

