<?php
function convertToFahrenheit($celsius) {
  $fahrenheit = ($celsius * 9/5) + 32;
  return $fahrenheit;
}

function convertToCelsius($fahrenheit) {
  $celsius = ($fahrenheit - 32) * 5/9;
  return $celsius;
}

$temperatureC = 11;
$temperatureF = convertToFahrenheit($temperatureC);
echo "$temperatureC°C is equal to $temperatureF°F\n"; 

$temperatureF = 50;
$temperatureC = convertToCelsius($temperatureF);
echo "$temperatureF°F is equal to $temperatureC°C\n"; 
?>