<?php
$dir = "Notes/CS/6/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		if(($file!='.')&&($file!='..')){
			
		$filename=$file;}
    }
    closedir($dh);
  }
}
echo $filename;
?>





