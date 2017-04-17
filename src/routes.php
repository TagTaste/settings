<?php  
	Route::get("/welcome",function(){
		echo "string";
	});
	Route::resource("settings","Tagtaste\Settings\SettingController");
	
?>