<!DOCTYPE HTML>
<HTML>
  <HEAD>
    <title>Parcare - Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
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
	    <h1>Articol</h1>
	    <section>
		  <h2>Inteligent Parking</h2>
		  <p>A new concept in terms of cities that is expected to improve the quality of life of residents, with minimal impact regarding the environment and reduced costs. By day problems of time and money lost in traffic congestion and pollution are becoming an increasing concern. Therefore, we work and develop a concept of "Intelligent Parking" to come to the aid of drivers and citizens and to exempt them from the problems mentioned above.</p>
		  <h2>Motivul din spatele proiectului<h2>
		  

<p>În jur de 75% din populația Uniunii Europene a ales mediul urban drept loc în care să viețuiască. Conceptul de ”oraș inteligent” este urmatoarea etapa in procesul de urbanizare, iar acesta câștigă teren cu factorii de decizie politică. Orașele inteligente pot fi considerate niște ecosisteme cu o componentă tehnică ridicată. Acest tip de metabolism urban este un sistem deschis și dinamic care consumă, transformă si eliberează materiale și energie, se dezvoltă și se adaptează la schimbări și interacționează cu oameni și alte ecosisteme.
</p><p>Poluarea aerului dăunează sănătății oamenilor și mediului înconjurător. În ciuda faptului ca emisiile industriale și cele ale automobilelor au scăzut în ultimii ani, concetrațiile de poluanți rămân ridicate, iar problemele cu calitatea aerului persistă. Acest pericol este local, regional și, de asemenea, internațional pentru că aerul poluat emis într-o țară poate străbate distanțe lungi in atmosferă spre alte locații, în cele din urma diminuând calitatea aerului și din acele zone.
</p><p>Poluarea fonică afectează, de asemenea, un mare număr de europeni, iar publicul o percepe ca fiind una dintre problemele majore legate de mediu. Ea poate afecta persoanele și din punct de vedere fiziologic și din punct de vedere psihologic, interferând cu activităti de bază, precum somnul, odihna, studiul și comunicarea.
</p><p>Ca răspuns la solicitarea, un nou concept în ceea ce privește orașele așteaptă sa imbunătățească calitatea vieții locuitorilor, cu un impact minim vizavi de mediul înconjurător și cu costuri reduse. Problema parcărilor este una dintre cele mai importante prezente într-un oraș. În întreaga lume, poluarea atmosferică și drumurile aglomerate duc la scăderea calității vieții, rezultând timp pierdut pentru șoferi și combustibil irosit. Comisia Europeană estimează pierderile economice datorate întârzierilor din trafic undeva la aproximativ 150 de miliarde de euro pe an in Europa. Nevoia de a căuta locuri libere de parcare este un factor care contribuie semnificativ la aglomerație și o cauză majoră de stres pentru automobiliști. Pe baza calculelor făcute in Barcelona, Spania, milioane de șoferi petrec in medie 20 de minute in fiecare zi căutând un loc liber de parcare, în acest timp ei producând peste 2400 de tone de emisii de CO2.
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
				  if ($idstare['state'] == 1){
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
				  if ($idstare['state'] == 1){
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
				  if ($idstare['state'] == 1){
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