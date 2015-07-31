#include <SoftwareSerial.h>
#include <Ethernet.h>
#include <SPI.h>

SoftwareSerial xbeeSerial(4, 5);

byte mac[] = { 0x90, 0xA2, 0xDA, 0x00, 0x0D };
IPAddress ip(192,168,1,177);
IPAddress server(192,168,1,100);

EthernetClient client;

char cArray[10];int ic=0; int id=0, state=0;
double temperature = 0;

void setup()
{Ethernet.begin(mac,ip); Serial.begin(9600); xbeeSerial.begin(9600);  delay(1000); 
Serial.println("Conectat");
}

int readXbeeData()
{int done = 0;int inByte;
while (xbeeSerial.available() > 0) 
   {inByte = xbeeSerial.read();
      if (inByte=='A') id = atof(cArray);
      if (inByte=='B') state = atof(cArray);
      if (inByte=='C') {temperature = atof(cArray); done=1;}
      if (inByte>64 && inByte<91) 
          {ic=0; for(int i=0; i<10; i++) cArray[i] = 0; }
      if ((inByte>47 && inByte<58) || inByte==46)   
          {cArray[ic] = inByte; ic++; }
   }
   return done;
}

void loop()                     
{
  if (readXbeeData()==1)
   { Serial.println("S-au receptionat date de la xbee");
    if (client.connect(server,80)){Serial.println("S-a conectat la server"); 
    client.print("GET /ethernet/add_xbee_sharp.php"); 
    client.print("?state="); client.print(state); Serial.print(state); Serial.print(", ");
    client.print("&temperature="); client.print(temperature); Serial.print(temperature); Serial.println(",");
    client.println(" HTTP/1.0");
    client.println();
  }
  Serial.println("Delay");
  Serial.println();
 delay(1000); 
  if (client.connected()){client.stop();}
   }
}
