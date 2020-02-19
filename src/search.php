<?php

 
 //var_dump($argc, $argv);
   if( $argc != 4)
   {
	   print" numero di argomenti sbagliato!";
   }
   
   $file=$argv[1];
   $posizione=$argv[2];
   $chiave=$argv[3];
   //print" posizione= $posizione \n";
   //print" chiave= $chiave \n";
   
   //var_dump($file);
   
  // if (file_exists($file))
  // {
  //   print "file esistente \n";
  //  } 
  //  else 
  // {
  //   print "file non trovato \n";
  // }
   
   $input=@fopen($file, "r");
   
   while (feof($input)==FALSE)
   {
	   $riga=fgets($input);
	   //print "$riga";
	   $colonne=explode(',',$riga);
	   if(($colonne[$posizione])==$chiave)
	   {
		   print"$riga";
		   break;
	   }
	   
   }
   
   fclose($input);


?>
