<?php

 $function = htmlentities(strip_tags($_POST['function']), ENT_QUOTES);
   	$file = htmlentities(strip_tags($_POST['file']), ENT_QUOTES);
    
    $log = array();
    
    switch ($function) {
    
    	 case ('getState'):
    	 
        	 if (file_exists($file)) {
               $lines = file($file);
        	 }
             $log['state'] = count($lines);
              
        	 break;	
        	 
    	 case ('send'):
    	 
		     $nickname = htmlentities(strip_tags($_POST['nickname']), ENT_QUOTES);
		     $patterns = array("/:\)/", "/:D/", "/:p/", "/:P/", "/:\(/", "/badword1/i", "/badword2/i", "/badword3/i");
			 $replacements = array("<img src='smiles/smile.gif'/>", "<img src='smiles/bigsmile.png'/>", "<img src='smiles/tongue.png'/>", "<img src='smiles/tongue.png'/>", "<img src='smiles/sad.png'/>", "poop", "hug", "dog");
			 
			  // $patterns = array();
			  // $patterns[0] = '/:\)/';
			  // $patterns[1] = '/:D/';
			  // $patterns[2] = '/:p/';
			  // $patterns[3] = '/:P/';
			  // $patterns[4] = '/:\(/';
			  // $patterns[5] = '/BADWORD/';
			  // $replacements = array();
			  // $replacements[5] = "<img src='smiles/smile.gif'/>";
			  // $replacements[4] = "<img src='smiles/bigsmile.png'/>";
			  // $replacements[3] = "<img src='smiles/tongue.png'/>";
			  // $replacements[2] = "<img src='smiles/tongue.png'/>";
			  // $replacements[1] = "<img src='smiles/sad.png'/>";
			  // $replacements[0] = "HUG"
			  
			 
			 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			 $blankexp = "/^\n/";
			 $message = htmlentities(strip_tags($_POST['message']), ENT_QUOTES);
			 
    		 if (!preg_match($blankexp, $message)) {
            	
    			 if (preg_match($reg_exUrl, $message, $url)) {
           			$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
    			 } 
    			 $message = preg_replace($patterns, $replacements, $message);
            	
            	 fwrite(fopen($file, 'a'), "<div><span>". $nickname . "</span><br><p>" . $message = str_replace("\n", "</p></div>", $message) . "\n"); 
    		 }
    		 
        	 break;
    	
    }
    
    echo json_encode($log);

?>