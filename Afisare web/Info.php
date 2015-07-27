<!DOCTYPE HTML>
<HTML>
  <HEAD>
    <title>Parcare - Info</title>
    <link rel="stylesheet" type="text/css" href="info.css">
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
	    <h1>Contact</h1>
	    <section>
		  <h2>Informații</h2>
		  <p><B>Elevi:</b></p>
		  <p>-ȚOC Marius-Nicolae, clasa a X-a C, profil matematică - informatică intensiv informatică, Colegiul  National „Horea, Cloșca și Crișan” Alba Iulia, jud. Alba</p>
          <p>-GRUIAN David, clasa a X-a C, profil matematică - informatică intensiv informatică, Colegiul  National „Horea, Cloșca și Crișan” Alba Iulia, jud. Alba</p>

		  <p><b>Coordonatori:</b></p>  
		  <p>	-Conferențiar universitar doctor, RÎȘTEIU Mircea, 
                      Universitatea ”1 Decembrie 1918” Alba Iulia, jud. Alba</p>
          <p>-Profesor de informatică grad I, HUMENIUC Ramona, 
                      Colegiul Național „Horea, Cloșca și Crișan” Alba Iulia, jud. Alba</p>     
</p>
		
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