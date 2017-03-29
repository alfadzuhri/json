<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/412072d077ab9ff8/geolookup/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $type = $parsed_json->{'location'}->{'type'};
  $country = $parsed_json->{'location'}->{'country'};
  $city = $parsed_json->{'location'}->{'city'};
  echo "Current type is: ${type}\n<br>";
  echo "Current country is: ${country}\n";
  echo "Current city is: ${city}\n";
?>