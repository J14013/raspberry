//値を格納
int val = 0;

void setup() {
  // put your setup code here, to run once:
  // シリアルportを9600bpsで初期化
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly;
  val = analogRead(0);
  Serial.println(val);
  // delay(500);
}

