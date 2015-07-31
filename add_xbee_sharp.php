

<?php
   $connexion = mysql_connect("localhost", "root", "");
    mysql_select_db("parcari",$connexion);           
    mysql_query("UPDATE hcc SET state='".$_GET['state']."', temperature='".$_GET['temperature']."' WHERE id='121'", $connexion);
	
   //mysql_query("INSERT INTO `hcc`(`id`,`tensiune`,`lumina`,`temperatura`,`r4`,`r5`,`r6`) VALUES ('" . $_GET['id'] . "','" . $_GET['tensiune'] . "','" . $_GET['lumina'] . "','" . $_GET['temperatura'] . "','" . $_GET['r4'] . "','" . $_GET['r5'] . "','" . $_GET['r6'] . "')", $connexion);
  /* $connexion = mysql_connect("89.165.183.215", "Gruian_David", "qwertyrfg46");
    mysql_select_db("gruian_david",$connexion);
                
    mysql_query("INSERT INTO `senzor`(`stare`) VALUES ('" . $_GET['stare'] . "')", $connexion); */
?>
