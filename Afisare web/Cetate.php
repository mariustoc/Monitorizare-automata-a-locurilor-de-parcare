<!DOCTYPE HTML>
<HTML>
  <HEAD>
    <title>Parcare - Cetate</title>
    <link rel="stylesheet" type="text/css" href="Cetate.css">
  </HEAD>
  <Body>
    <div id="Combi">
	
	
	  <header>
	    
		<a href="http://www.uab.ro/" target="_blank"><img src="images/sigla uab.png" alt="UAB Alba"/></a>
		<a href="http://www.hcc.ro/" target="_blank"><img id="hcc" src="images/hcc.jpg" alt="Hcc"/></a>
		<h1>Monitorizarea automată a locurilor de parcare</h1>
		
	  </header>
	
	  
	  <nav> <p><a  href="home.php">Home</a> | <a href="Cetate.php">Cetate</a> | <a href="HCC.php">HCC</a> | <a href="Casa.php">Casa de Cultură</a> | <a href="Info.php">Contact</a> </p></nav>
	  
	  <article>
	    <h1>Parcare Cetate</h1>
		<h2>Locuri libere:
			<?php
				//connect to the db
				  mysql_connect('localhost','root','');
				  mysql_select_db("parcari");
				  $sql= "SELECT * FROM cetate";
				  $records=mysql_query($sql);
				  $suma=0;
				  $total=0;
				  while ($idstare=mysql_fetch_assoc($records)){
				  $total = $total + 1; //$idstare['id'];
				  if ($idstare['lumina'] >= 2000){
					  $suma = 1+$suma; //$idstare['lumina']
					  }
					  
				  }  
				  
					  //echo "Stare:". $idstare['stare']." id ".$idstare['id']."<br>";
				  
					   echo $total-$suma;
			?>
		</h2>
		<div id="grafic">
					  <?php
				//connect to the db
				  mysql_connect('localhost','root','');
				  mysql_select_db("parcari");
				  $sql= "SELECT * FROM cetate";
				  $records=mysql_query($sql);
				  $suma=0;
				  $total=0;
				  while ($idstare=mysql_fetch_assoc($records)){
				  $total = $total + 1; //$idstare['id'];
				  if ($idstare['lumina'] >= 2000){
						$suma = 1+$suma; //$idstare['lumina']
						
					  }else{
						 
						
					  }
					  
				  }  
				  $percent= round(($suma/$total)*100,1);
				  echo "<p>$percent% din locurile de parcare sunt ocupate</p>";
				  

					  //echo "Stare:". $idstare['stare']." id ".$idstare['id']."<br>";		  
			?>
			<style type="text/CSS">
					.inner{
						height:25px;
						width:<?php echo $percent ?>%;
						border-right: solid 2px #000;
						background-color:#cc2900;
						border-top-left-radius:10px;
						border-bottom-left-radius:10px;
					
					}
					.outter{
						height:25px;
						width:560px;
						border: solid 2px #000;
						margin: 10px 10px 10px;
						background-color:#006699;
						border-top-right-radius:10px;
						border-top-left-radius:10px;
						border-bottom-right-radius:10px;
						border-bottom-left-radius:10px;
						
					}
					
			</style>
			<div class="outter">
			<div class="inner"></div>
			</div>
			
			<div id="detail_1"></div> 
			<p id="detail_4">- Locuri Ocupate </p>
			
			<p id="detail_3">- Locuri Libere</p>
			<div id="detail_2"></div>	  
		</div>
	    <section>
		  <h2>Situație Parcare</h2>
		  <?php
				//connect to the db
				  mysql_connect('localhost','root','');
				  mysql_select_db("parcari");
				  $sql= "SELECT * FROM cetate";
				  $records=mysql_query($sql);
				  $suma=0;
				  $total=0;
				  while ($idstare=mysql_fetch_assoc($records)){
				  $total = $total + 1; //$idstare['id'];
				  if ($idstare['lumina'] >= 2000){
						$suma = 1+$suma; //$idstare['lumina']
						print " <div style='background-color:#cc2900'>".$suma."</div>";
					  }else{
						$suma++;  
						print " <div style='background-color:#006699'>".$suma."</div>";
					  }
					  
				  }  

					  //echo "Stare:". $idstare['stare']." id ".$idstare['id']."<br>";
				  
					  
			?>
		
		</section>
	  </article>
	  
	  <aside>
	    <h2>Parcări Libere</h2>

		<a href="Cetate.php"><section><b>Cetate:
			<?php
				//connect to the db
				  mysql_connect('localhost','root','');
				  mysql_select_db("parcari");
				  $sql= "SELECT * FROM cetate";
				  $records=mysql_query($sql);
				  $suma=0;
				  $total=0;
				  while ($idstare=mysql_fetch_assoc($records)){
				  $total = $total + 1; //$idstare['id'];
				  if ($idstare['lumina'] >= 2000){
					  $suma = 1+$suma; //$idstare['lumina']
					  }
					  
				  }  
				  
					  //echo "Stare:". $idstare['stare']." id ".$idstare['id']."<br>";
				  
					   echo $total-$suma;
			?>
		</b></section></a>
		
		<a href="HCC.php"><section><b>HCC:
			<?php
				//connect to the db
				  mysql_connect('localhost','root','');
				  mysql_select_db("parcari");
				  $sql= "SELECT * FROM hcc";
				  $records=mysql_query($sql);
				  $suma=0;
				  $total=0;
				  while ($idstare=mysql_fetch_assoc($records)){
				  $total = $total + 1; //$idstare['id'];
				  if ($idstare['lumina'] >= 2000){
					  $suma = 1+$suma; //$idstare['lumina']
					  }
					  
				  }  
				  
					  //echo "Stare:". $idstare['stare']." id ".$idstare['id']."<br>";
				  
					   echo $total-$suma;
			?>
		</b></section></a>
		
		<a href="Casa.php"><section><b>Casa de cultură:
		<?php
				//connect to the db
				  mysql_connect('localhost','root','');
				  mysql_select_db("parcari");
				  $sql= "SELECT * FROM casa";
				  $records=mysql_query($sql);
				  $suma=0;
				  $total=0;
				  while ($idstare=mysql_fetch_assoc($records)){
				  $total = $total + 1; //$idstare['id'];
				  if ($idstare['lumina'] >= 2000){
					  $suma = 1+$suma; //$idstare['lumina']
					  }
					  
				  }  
				  
					  //echo "Stare:". $idstare['stare']." id ".$idstare['id']."<br>";
				  
					   echo $total-$suma;
			?>
		</b></section></a>
	  </aside>
	  
	  <footer>
	   ~ Gruian David & Țoc Marius ~
	  </footer>
	  
	
	</div>
  </Body>
  
  
</HTML>