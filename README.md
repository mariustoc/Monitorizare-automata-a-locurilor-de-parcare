# Monitorizare-automata-a-locurilor-de-parcare
<b>Scurta descriere</b>    
    Sistemul de monitorizare a unei parcari propus de noi este format din ansamblu local de detectie (cate unul pentru fiecare loc de parcare; contine un senzor de
proximitate pentru verificarea starii ocupat/liber a locului de parcare, unul de temperatura pentru monitorizarea ambientului din cutia ansamblului, un modul de comunicatie
wireless pentru transmiterea datelor catre coordonator, microcontroller si grup de acumulatori) si ansamblu de coordonare (cate unul pentru fiecare parcare; acesta preia
informatiile de la toti senzorii din parcare, se conecteaza la server si cu ajutorul unui fisier .php trimite aceste informatii intr-o baza de date; este format din modul
wireless, microcontroller si ethernet shield). Din baza de date informatiile sunt preluate si prelucrate fie pe un panou sinoptic, fie intr-o aplicatie pe mobil, sau,
in cazul nostru, pe o pagina web.
    Avantajul acestui sistem il constitue faptul ca poate fi folosit in absolut orice tip de parcare; nu e conditionat regularitatea parcarii (cum e in cazul unei parcari
subterane spre exemplu, cu intrare si iesire bine definite).

<b>Tehnice</b>    
    In folderul "Monitorizare" se gasesc codurile sursa pentru ansamblul local de detectie si pentru ansamblul de coordonare, iar in folderul "Afisare web" codul sursa
pentru pagina web ce demonstreaza principiul de functionare.
    Librarii externe mediului de programare Arduino IDE am folosit: 
       <DallasTemperature.h> - pentru senzorul de temperatura;
       <OneWire.h> - pentru comunicatia de tip one wire dintre senzorul de temperatura si placa Arduino;
       <SharpIR.h> - pentru o mai buna precizie a senzorului de proximitate;
Acestea au fost descarcate de pe github.com si de pe playground.arduino.cc.

    Rolurile membrilor echipei:
       Toc Marius-Nicolae - monitorizarea parcarii si transmiterea datelor in baza de date;
       Gruian David - interpretarea (web) a datelor; 

   Multumim profesorilor coordonatori pentru sprijin si echipei InfoEducatie pentru aceasta oportunitate!