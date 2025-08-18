#include <TFT_eSPI.h>
#include <TFT_eWidget.h>
#include <DHT.h>
#include <Wire.h>

// Display und Touch
TFT_eSPI tft = TFT_eSPI();
#define TOUCH_CS 15 // Beispiel-Pin für GT911/FT5316
XPT2046_Touchscreen ts(TOUCH_CS);

// DHT22 Sensor
#define DHTPIN 26
#define DHTTYPE DHT22
DHT dht(DHTPIN, DHTTYPE);

// Relais Pins (über Crowtail GPIO_D und UART0 Steckplätze)
#define HEATER_RELAY 10      // Crowtail GPIO_D D1
#define HUMIDIFIER_RELAY 11  // Crowtail GPIO_D D2
#define DEHUMIDIFIER_RELAY 12 // Crowtail UART0 RXD
#define COOLER_RELAY 13      // Crowtail UART0 TXD

// PWM Pin für Ventilatoren
#define FAN_PWM 25

// TFT_eWidget-Objekte
ButtonWidget btnTempMinPlus;
ButtonWidget btnTempMinMinus;
ButtonWidget btnTempMaxPlus;
ButtonWidget btnTempMaxMinus;
ButtonWidget btnHumMinPlus;
ButtonWidget btnHumMinMinus;
ButtonWidget btnHumMaxPlus;
ButtonWidget btnHumMaxMinus;
ButtonWidget btnFanPlus;
ButtonWidget btnFanMinus;
ButtonWidget btnToggle;

ButtonWidget* btns[] = {&btnTempMinPlus, &btnTempMinMinus, &btnTempMaxPlus, &btnTempMaxMinus,
                       &btnHumMinPlus, &btnHumMinMinus, &btnHumMaxPlus, &btnHumMaxMinus,
                       &btnFanPlus, &btnFanMinus, &btnToggle};
const int numButtons = sizeof(btns) / sizeof(btns[0]);

// Struktur für Einstellungen
struct Settings {
  float minHumidity = 75.0;
  float maxHumidity = 85.0;
  float minTemp = 18.0;
  float maxTemp = 24.0;
  int fanSpeed = 60;
};

// Globale Variablen
Settings settings;
bool isControlOn = true;
bool heater = false;
bool humidifier = false;
bool dehumidifier = false;
bool cooler = false;
String errorMsg = "";
unsigned long lastSensorRead = 0;
float temp = 20.0;
float humidity = 80.0;
unsigned long lastTouchTime = 0;

// Farben (TFT_eSPI-Format)
#define TFT_BLACK 0x0000
#define TFT_WHITE 0xFFFF
#define TFT_RED 0xF800
#define TFT_BLUE 0x001F
#define TFT_GREEN 0x07E0
#define TFT_YELLOW 0xFFE0
#define TFT_CYAN 0x07FF

void setup() {
  Serial.begin(115200);
  tft.begin();
  tft.setRotation(1);
  tft.fillScreen(TFT_BLACK);
  if (!ts.begin()) {
    Serial.println("Touch-Controller nicht gefunden!");
    while (1);
  }
  dht.begin();
  
  // Initialisiere Relais-Pins
  pinMode(HEATER_RELAY, OUTPUT);
  pinMode(HUMIDIFIER_RELAY, OUTPUT);
  pinMode(DEHUMIDIFIER_RELAY, OUTPUT);
  pinMode(COOLER_RELAY, OUTPUT);
  digitalWrite(HEATER_RELAY, HIGH);
  digitalWrite(HUMIDIFIER_RELAY, HIGH);
  digitalWrite(DEHUMIDIFIER_RELAY, HIGH);
  digitalWrite(COOLER_RELAY, HIGH);

  // Initialisiere Ventilator-PWM
  pinMode(FAN_PWM, OUTPUT);
  ledcSetup(0, 5000, 8);
  ledcAttachPin(FAN_PWM, 0);
  ledcWrite(0, map(settings.fanSpeed, 0, 100, 0, 255));

  // Initialisiere Buttons mit TFT_eWidget
  btnTempMinMinus.initButton(&tft, 400, 50, 120, 30, TFT_WHITE, TFT_RED, TFT_WHITE, "Temp Min -", 1);
  btnTempMinPlus.initButton(&tft, 540, 50, 120, 30, TFT_WHITE, TFT_RED, TFT_WHITE, "Temp Min +", 1);
  btnTempMaxMinus.initButton(&tft, 400, 90, 120, 30, TFT_WHITE, TFT_RED, TFT_WHITE, "Temp Max -", 1);
  btnTempMaxPlus.initButton(&tft, 540, 90, 120, 30, TFT_WHITE, TFT_RED, TFT_WHITE, "Temp Max +", 1);
  btnHumMinMinus.initButton(&tft, 400, 130, 120, 30, TFT_WHITE, TFT_BLUE, TFT_WHITE, "Feuchte Min -", 1);
  btnHumMinPlus.initButton(&tft, 540, 130, 120, 30, TFT_WHITE, TFT_BLUE, TFT_WHITE, "Feuchte Min +", 1);
  btnHumMaxMinus.initButton(&tft, 400, 170, 120, 30, TFT_WHITE, TFT_BLUE, TFT_WHITE, "Feuchte Max -", 1);
  btnHumMaxPlus.initButton(&tft, 540, 170, 120, 30, TFT_WHITE, TFT_BLUE, TFT_WHITE, "Feuchte Max +", 1);
  btnFanMinus.initButton(&tft, 400, 210, 120, 30, TFT_WHITE, TFT_GREEN, TFT_WHITE, "Ventilator -", 1);
  btnFanPlus.initButton(&tft, 540, 210, 120, 30, TFT_WHITE, TFT_GREEN, TFT_WHITE, "Ventilator +", 1);
  btnToggle.initButton(&tft, 740, 10, 50, 30, TFT_WHITE, TFT_WHITE, TFT_BLACK, "Ein/Aus", 1);

  drawScreen();
}

void loop() {
  if (millis() - lastSensorRead >= 2000) {
    float newTemp = dht.readTemperature();
    float newHumidity = dht.readHumidity();
    if (!isnan(newTemp)) temp = newTemp;
    if (!isnan(newHumidity)) humidity = newHumidity;
    lastSensorRead = millis();
    drawScreen();
  }

  if (isControlOn) {
    if (humidity < settings.minHumidity) {
      humidifier = true;
      dehumidifier = false;
    } else if (humidity > settings.maxHumidity) {
      humidifier = false;
      dehumidifier = true;
    } else {
      humidifier = false;
      dehumidifier = false;
    }
    if (temp < settings.minTemp) {
      heater = true;
      cooler = false;
    } else if (temp > settings.maxTemp) {
      heater = false;
      cooler = true;
    } else {
      heater = false;
      cooler = false;
    }
  } else {
    humidifier = false;
    dehumidifier = false;
    heater = false;
    cooler = false;
  }

  digitalWrite(HEATER_RELAY, heater ? LOW : HIGH);
  digitalWrite(HUMIDIFIER_RELAY, humidifier ? LOW : HIGH);
  digitalWrite(DEHUMIDIFIER_RELAY, dehumidifier ? LOW : HIGH);
  digitalWrite(COOLER_RELAY, cooler ? LOW : HIGH);
  ledcWrite(0, map(settings.fanSpeed, 0, 100, 0, 255));

  if (settings.fanSpeed < 20) {
    errorMsg = "Fan Speed zu niedrig!";
    settings.fanSpeed = 60;
  } else {
    errorMsg = "";
  }

  if (ts.touched() && millis() - lastTouchTime > 200) {
    TS_Point p = ts.getPoint();
    uint16_t tx = map(p.x, 0, 800, 0, 800);
    uint16_t ty = map(p.y, 0, 480, 0, 480);

    for (int i = 0; i < numButtons; i++) {
      if (btns[i]->contains(tx, ty)) {
        if (btns[i] == &btnTempMinPlus) handleButtonClick("minTempPlus");
        else if (btns[i] == &btnTempMinMinus) handleButtonClick("minTempMinus");
        else if (btns[i] == &btnTempMaxPlus) handleButtonClick("maxTempPlus");
        else if (btns[i] == &btnTempMaxMinus) handleButtonClick("maxTempMinus");
        else if (btns[i] == &btnHumMinPlus) handleButtonClick("minHumidityPlus");
        else if (btns[i] == &btnHumMinMinus) handleButtonClick("minHumidityMinus");
        else if (btns[i] == &btnHumMaxPlus) handleButtonClick("maxHumidityPlus");
        else if (btns[i] == &btnHumMaxMinus) handleButtonClick("maxHumidityMinus");
        else if (btns[i] == &btnFanPlus) handleButtonClick("fanPlus");
        else if (btns[i] == &btnFanMinus) handleButtonClick("fanMinus");
        else if (btns[i] == &btnToggle) handleButtonClick("toggleControl");
        drawScreen();
        lastTouchTime = millis();
        break;
      }
    }
  }
}

void handleButtonClick(String action) {
  if (!isControlOn && action != "toggleControl") return;

  if (action == "minTempPlus") {
    settings.minTemp += 1.0;
    if (settings.minTemp > settings.maxTemp) settings.minTemp = settings.maxTemp - 1.0;
  } else if (action == "minTempMinus") {
    settings.minTemp -= 1.0;
    if (settings.minTemp < 0) settings.minTemp = 0;
  } else if (action == "maxTempPlus") {
    settings.maxTemp += 1.0;
    if (settings.maxTemp < settings.minTemp) settings.maxTemp = settings.minTemp + 1.0;
  } else if (action == "maxTempMinus") {
    settings.maxTemp -= 1.0;
    if (settings.maxTemp < settings.minTemp) settings.maxTemp = settings.minTemp + 1.0;
  } else if (action == "minHumidityPlus") {
    settings.minHumidity += 1.0;
    if (settings.minHumidity > settings.maxHumidity) settings.minHumidity = settings.maxHumidity - 1.0;
  } else if (action == "minHumidityMinus") {
    settings.minHumidity -= 1.0;
    if (settings.minHumidity < 0) settings.minHumidity = 0;
  } else if (action == "maxHumidityPlus") {
    settings.maxHumidity += 1.0;
    if (settings.maxHumidity < settings.minHumidity) settings.maxHumidity = settings.minHumidity + 1.0;
  } else if (action == "maxHumidityMinus") {
    settings.maxHumidity -= 1.0;
    if (settings.maxHumidity < settings.minHumidity) settings.maxHumidity = settings.minHumidity + 1.0;
  } else if (action == "fanPlus") {
    settings.fanSpeed = min(settings.fanSpeed + 5, 100);
  } else if (action == "fanMinus") {
    settings.fanSpeed = max(settings.fanSpeed - 5, 20);
  } else if (action == "toggleControl") {
    isControlOn = !isControlOn;
  }
}

void drawScreen() {
  tft.fillScreen(TFT_BLACK);

  // Zeichne Titel
  tft.setTextSize(2);
  tft.setTextColor(TFT_WHITE, TFT_BLACK);
  tft.setCursor(10, 10);
  tft.println("Salami-Reifung");

  // Zeichne Buttons
  for (int i = 0; i < numButtons; i++) {
    btns[i]->drawSmoothButton(false);
  }

  // Zeichne Ist-Werte
  tft.drawRect(10, 50, 350, 250, TFT_BLUE);
  tft.setTextSize(2);
  tft.setTextColor(TFT_WHITE, TFT_BLACK);
  tft.setCursor(15, 55);
  tft.println("Istwerte");
  tft.setTextColor(TFT_RED, TFT_BLACK);
  tft.setCursor(15, 85);
  tft.println("Temp: " + String(temp, 1) + " °C");
  tft.setTextColor(TFT_BLUE, TFT_BLACK);
  tft.setCursor(15, 115);
  tft.println("Feuchte: " + String(humidity, 1) + " %");
  tft.setTextColor(TFT_GREEN, TFT_BLACK);
  tft.setCursor(15, 145);
  tft.println("Fan Speed: " + String(settings.fanSpeed) + " %");

  // Zeichne Statusleiste
  tft.fillRect(0, 430, 800, 25, TFT_BLACK);
  tft.setTextSize(1);
  tft.setCursor(5, 435);
  if (!isControlOn) {
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    String status = "Heizung: Aus, Befeuchter: Aus, Entfeuchter: Aus, Kühlung: Aus";
    if (errorMsg != "") status += ", Fehler: " + errorMsg;
    tft.println(status);
  } else {
    tft.setTextColor(TFT_RED, TFT_BLACK);
    tft.print("Heizung: ");
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    tft.print(heater ? "Ein" : "Aus");
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    tft.print(", ");
    tft.setTextColor(TFT_BLUE, TFT_BLACK);
    tft.print("Befeuchter: ");
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    tft.print(humidifier ? "Ein" : "Aus");
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    tft.print(", ");
    tft.setTextColor(TFT_CYAN, TFT_BLACK);
    tft.print("Entfeuchter: ");
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    tft.print(dehumidifier ? "Ein" : "Aus");
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    tft.print(", ");
    tft.setTextColor(TFT_YELLOW, TFT_BLACK);
    tft.print("Kühlung: ");
    tft.setTextColor(TFT_WHITE, TFT_BLACK);
    tft.print(cooler ? "Ein" : "Aus");
    if (errorMsg != "") {
      tft.setTextColor(TFT_YELLOW, TFT_BLACK);
      tft.print(", Fehler: " + errorMsg);
    }
  }
}