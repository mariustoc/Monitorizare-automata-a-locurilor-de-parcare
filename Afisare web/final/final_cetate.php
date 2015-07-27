<!DOCTYPE html>
<html>
 <head>
  <title>Cetate</title>
 </head>
 <body background="BG.jpg">
  <div align="center" style="margin-left: 10%; background-color: #E44424; margin-right: 10%; margin-top:10%;" >
   
    <div align="right" style="background-color: #E44424; height:3px" >	</div>
    
    <a href="final_cetate.php" >
      <div align="center" style="background-color: #191919;border-style: solid; border-width: 10px; border-color: #E44424;">
        <font color="white" face="trebuchet MS" size="15">CETATE </font>  
      </div>
    </a>
	
	<div align="center" style="background-color: #191919; height:13px">	</div>
	
	<a href="final_casa.php" >
      <div align="center" style="background-color: #191919; border-style: solid;border-width: 10px; border-color: #E44424; ">
        <font color="white" face="trebuchet MS" size="15">CASA DE CULTURĂ </font>  
      </div>
    </a>
	
	<div align="center" style="background-color: #191919; height:13px"></div>
	
	<a href="final_hcc.php" >
      <div align="center" style="background-color: #191919;border-style: solid;border-width: 10px; border-color: #E44424; ">
        <font color="white" face="trebuchet MS" size="15">HCC </font>  
      </div>
    </a>
	
  	<div align="center" style="background-color: #191919; height:100px">
	</div>
  <div>
  <font color="Black" face="trebuchet MS" SIZE="50">
  <?php
  //connect to the db
  mysql_connect('localhost','root','qwertyrfg46');
  mysql_select_db("parcari");
  $sql= "SELECT * FROM cetate";
  $records=mysql_query($sql);
  $suma=0;
  $total=0;
  while ($idstare=mysql_fetch_assoc($records)){
  $total = $total + 1; //$idstare['id'];
  if ($idstare['stare'] >= 1){
	  $suma = 1+$suma; //$idstare['lumina']
	  }
	  
  }  
  
	  //echo "Stare:". $idstare['stare']." id ".$idstare['id']."<br>";
  
	   echo "LOCURI OCUPATE: ".$suma." DIN ".$total;
?>
 </font>
 </div>
    <div align="center" style="background-color: #191919; height:100px;"></div>
    <div align="center" style="background-color: #191919; height:100px;">
	 <a href="final_h.php">
	 <div align="center" style="background-color: #E44424; width: 100px; height: 30px; ">
	  <font color="black" face="trebuchet MS" size="5px"> Home</font>
	 </div>
	 </a> 
	
 
 </div>
 </body>
</html>