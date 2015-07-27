#include <SoftwareSerial.h>
#include <Ethernet.h>
#include <SPI.h>

SoftwareSerial xbeeSerial(4, 5);

byte mac[] = { 0x90, 0xA2, 0xDA, 0x00, 0x0D };
IPAddress ip(192,168,1,177);
IPAddress server(192,168,1,100);

EthernetClient client;

char cArray[10];int ic=0;
double realPower = 0,apparentPower = 0,powerFactor = 0,Vrms = 0,Irms = 0, Irms1 = 0, Freq = 0;
int currentValue, lastValue, secondLastValue; int lastValueSent; int differenceThreshold = 20;

void setup()
{Ethernet.begin(mac,ip); Serial.begin(9600); xbeeSerial.begin(9600);  delay(1000); 
Serial.println("Conectat");
}

int readXbeeData()
{int done = 0;int inByte;
while (xbeeSerial.available() > 0) 
   {inByte = xbeeSerial.read();
      if (inByte=='A') realPower = atof(cArray);
      if (inByte=='B') apparentPower = atof(cArray);
      if (inByte=='C') powerFactor = atof(cArray);
      if (inByte=='D') Vrms = atof(cArray);
      if (inByte=='E') Irms = atof(cArray);
      if (inByte=='F') Irms1 = atof(cArray);
      if (inByte=='G') {Freq = atof(cArray); done = 1;}
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
    client.print("GET /ethernet/add_xbee.php"); 
    //client.print("?id="); client.print(realPower); Serial.print(realPower); Serial.print(","); 
    client.print("?tensiune="); client.print(apparentPower); Serial.print(apparentPower); Serial.print(",");
    client.print("&lumina="); client.print(powerFactor); Serial.print(powerFactor); Serial.print(",");
    client.print("&temperatura="); client.print(Vrms); Serial.print(Vrms); Serial.print(",");
    client.print("&r4="); client.print(Irms); Serial.print(Irms); Serial.print(",");
    client.print("&r5="); client.print(Irms1); Serial.print(Irms1); Serial.print(",");
    client.print("&r6="); client.print(Freq); Serial.print(Freq); Serial.print(",");
    client.println(" HTTP/1.0");
    client.println();
  }
  Serial.println("Delay");
  Serial.println();
 delay(1000); 
  if (client.connected()){client.stop();}
   }
}
