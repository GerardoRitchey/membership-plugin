<?phpadd_action("wp_loaded","redirect_site");

function redirect_site(){
	
if(is_admin()){
	
	return;
	
}

else {	
	
	
//global $pagenow;
if ( !is_user_logged_in()) {
	$URI = $_SERVER["REQUEST_URI"];
//	echo "<h1>". print_r($_SERVER)  ."</h1>";
	$redirect_URL = "http://dolifebetter,info/";
//	echo $redirect_URL;
    $new_loc = 'http://dolifebetter.info/login';    
    if (strpos($URI, "login")){
//    		echo "found login";
    }
    else if (strpos($URI, "register")){
//    		echo "found register";
    }
    else if (strpos($URI, "subscribe_sandbox")){
//    		echo "found register";
    }

    else if (strpos($URI, "wp-atom")){
//    		echo "found register";
    }
    else if (strpos($URI, "xmlrpc")){
//    		echo "found register";
    }
    else if (strpos($URI, "contact-us")){
//    		echo "found register";
    }
    else if (strpos($URI, "awesome-flickr-gallery-plugin")){
//    		echo "found register";
    }    
    
    
    else{
  //  	echo "it's else";
    wp_login_url($redirect_URL);    
 	wp_redirect($new_loc);
	//exit(0);   	
    	}     
	}
}
}
?>