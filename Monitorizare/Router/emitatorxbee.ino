#include "Statistics.h"
#include <SoftwareSerial.h>
SoftwareSerial xbeeSerial (2, 3);
int id= 121;double r1=0.00, r2=0.00, r3=0.00, r4=0.00, r5=0.03, r6=0.02, r7=0.01;
Statistic ilumi; Statistic temper; Statistic tensiune; 
double ilu, tem, v;  float ilum= 0.000, temp= 0.000, vo; 
float ilumina= 0.000, tempera= 0.000, volt=0.000;
long interval1 = 2000;
//-----
const int ledPin =  13;int ledState = LOW;long previousMillis = 0;long interval = 80;long interval2 = 5000;
//-----

void setup ()
{Serial.begin(9600); xbeeSerial.begin(9600);
ilumi.clear(); temper.clear(); tensiune.clear();  pinMode(ledPin, OUTPUT); }

void bl()
{ unsigned long currentMillis = millis();
  if(currentMillis - previousMillis > interval)
    {previousMillis = currentMillis;   
     if (ledState == LOW)
     ledState = HIGH;
     else
     ledState = LOW;
     digitalWrite(ledPin, ledState);}  
}

void bl1()
{unsigned long osc = millis();
  if(osc % interval2 < interval2/10)
  bl();
  else
  digitalWrite(ledPin, LOW);
  if(osc % interval2 ==0)
      {
        citesteilumi(); citestetemp(); citestevolt();
        Serial.println(id);Serial.println(volt);Serial.println(ilumina); Serial.println(tempera);
        sendDataToXbee();ilumi.clear(); temper.clear();tensiune.clear();}
}

void il()
    {ilu = analogRead(A0); ilum = ilu*5/1024*1000;}
void te()
    {tem = analogRead(A1); temp = (tem*5/1024-0.51)*100;}
void ve()
    {v = analogRead(A2); vo = (v*10/1024);}

void citesteilumi()
    {for (int numar = 0; numar < 50; numar++) {il(); ilumi.add(ilum);}
    ilumina= ilumi.average(); }

void citestetemp()
    {for (int numar = 0; numar < 50; numar++) {te(); temper.add(temp);}
    tempera= temper.average(); }

void citestevolt()
    {for (int numar = 0; numar < 50; numar++) {ve(); tensiune.add(vo);}
    volt= tensiune.average(); }

void loop () 
  {bl1();}  

void sendDataToXbee()
{   xbeeSerial.print(id);xbeeSerial.print('A'); xbeeSerial.print(volt);xbeeSerial.print('B');
    xbeeSerial.print(ilumina);xbeeSerial.print('C'); xbeeSerial.print(tempera);xbeeSerial.print('D');
    xbeeSerial.print(r4);xbeeSerial.print('E'); xbeeSerial.print(r5);xbeeSerial.print('F');
    xbeeSerial.print(r6);xbeeSerial.print('G');
}

