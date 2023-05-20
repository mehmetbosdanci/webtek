<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input1 = $_POST["input1"];
  $input2 = $_POST["input2"];
  $input3 = $_POST["input3"];
  $input4 = $_POST["input4"];
  $input5 = $_POST["input5"];
  $radio = $_POST["radio"];
  $selectedOptions = $_POST["selectedOptions"];

  echo "<center><b>İsim:</b> " . $input1 . "</center><br>";
  echo "<center><b>E-posta:</b> " . $input2 . "</center><br>";
  echo "<center><b>Şifre:</b> " . $input3 . "</center><br>";
  echo "<center><b>Hoşlanılan müzik türleri:</b></center><br>";
  foreach ($selectedOptions as $option) {
    echo "<center>" . $option . "</center><br>";
  }
  echo "<center><b>Site hakkındaki düşünceniz:</b> " . $radio . "</center><br>";
  echo "<center><b>Sevdiğiniz film türü:</b> " . $input5 . "</center><br>";
  echo "<center><b>Açıklamanız:</b> " . $input4 . "</center><br>";
  
  echo '<center><a href="iletisim.html"><button>İletişim sayfasına dön</button></a></center>';
}

?>