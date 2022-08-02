# get_sensor_data

- connect ESP32 to Wi-Fi (done) 

```

#include <WiFi.h>


const char* ssid = "REPLACE_WITH_YOUR_SSID";
const char* password = "REPLACE_WITH_YOUR_PASSWORD";

void initWiFi() {
  //set in station mode
  WiFi.mode(WIFI_STA);
  //connect to network
  WiFi.begin(ssid, password);
  Serial.print("Connecting to WiFi ..");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print('.');
    delay(1000);
  }
  Serial.println(WiFi.localIP());
}

void setup() {
  Serial.begin(115200);
  initWiFi();
  Serial.print("RRSI: ");
  Serial.println(WiFi.RSSI());
}
``` 

- write php code (done)

```
<?php
$data = $_GET["d"];
// declare some variables 
$servername = "localhost";
$username = "";
$password = "";
$dbname="sensor_data";

// Create conncetion 
$conn = new mysql($servername, $username, $password, $dbname);

// Check connection 
if ($conn=>connect_error){
	die("Connection failed: ".$conn->connect_error);
	}
$sql = "INSERT INTO sensor_data (id, data)
VALUES('','$data')";

if($conn->query($sql) === TRUE){
// echo print some text 
	echo "New record created successfully";
	} else{
	echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn-.close();
	

?>

``` 

- create a databas in mysql (not yet)

- connect esp32 to uno arduino 
https://www.programmingboss.com/2021/04/esp32-arduino-serial-communication-with-code.html 


esp32 code 
``` 
// this sample code provided by www.programmingboss.com
#define RXp2 16
#define TXp2 17
void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  Serial2.begin(9600, SERIAL_8N1, RXp2, TXp2);
}
void loop() {
    Serial.println("Message Received  to esp32  ");
    Serial.println(Serial2.readString());
}
``` 


arduino uno code 

```
// this sample code provided by www.programmingboss.com
void setup() {
  Serial.begin(9600);
}
void loop() {
  Serial.println(" this uno ");
  delay(1500);
}
```



- write the code that read vlaues from the esp32 to 
