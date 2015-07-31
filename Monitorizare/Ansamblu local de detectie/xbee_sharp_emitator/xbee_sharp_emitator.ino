#include <SoftwareSerial.h>
//---
#include <DallasTemperature.h>
#include <OneWire.h>
//---
#include <SharpIR.h>

#define ONE_WIRE_BUS 2

SharpIR sharp(A4,25,93,20150);

OneWire oneWire(ONE_WIRE_BUS);
DallasTemperature sensors(&oneWire);

SoftwareSerial xbeeSerial (4, 5);

double temperature; int state=0;

int id=121;

long interval1 = 2000;

const int ledPin =  13; int ledState = LOW; long previousMillis = 0; long interval = 80; long interval2 = 5000;


void setup ()
{Serial.begin(9600); 
 xbeeSerial.begin(9600);
 sensors.begin();
 pinMode(ledPin, OUTPUT);}
 
void getTemperature()
{ sensors.requestTemperatures();
  temperature=sensors.getTempCByIndex(0);}
  
void getState()
{ if (sharp.distance()<40) { state=1;}
   else { state=0;}}
 
 

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
      { getTemperature(); getState();
        Serial.println(id);Serial.println(state);Serial.println(temperature);
        sendDataToXbee();}
}

void loop () 
  {bl1();}  

void sendDataToXbee()
{   xbeeSerial.print(id);xbeeSerial.print('A'); xbeeSerial.print(state);xbeeSerial.print('B');
    xbeeSerial.print(temperature);xbeeSerial.print('C');
}

