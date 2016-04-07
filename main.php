<?php



while(True){
	sleep(3);
	echo "hello bae world\n";

	// do_one_update();

}


// this fucntions works well now !! 
	function do_one_update(){

		$ch = curl_init();
		// do one update 

		// actual data needed 
		$index = "1";
		
		// $update = "autoupdate=hello-AlphaGoFromphp-workernew";
		
		// $post_string = array('autoupdate'=>'hello-AlphaGoFromphp-workernew','tmp'=>'tmp'); 

		$post_string_new = ("autoupdate=hello&&tmp=tmp");

		curl_setopt($ch, CURLOPT_URL, "http://alphago.duapp.com/index.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string_new );
		$output = curl_exec($ch);
		curl_close($ch);
		// do not print !

	}


?>
