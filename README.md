<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/412072d077ab9ff8/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $ageOfMoon = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
  $percentIlluminated = $parsed_json->{'moon_phase'}->{'percentIlluminated'};
  $phaseofMoon = $parsed_json->{'moon_phase'}->{'phaseofMoon'};
  $hemisphere = $parsed_json->{'moon_phase'}->{'hemisphere'};
  echo "Current ageOfMoon is: ${ageOfMoon}\n<br>";
  echo "Current percentIlluminated is: ${percentIlluminated}\n";<br>
  echo "Current phaseofMoon is: ${phaseofMoon}\n";
  echo "Current hemisphere is: ${hemisphere}\n";
?>
