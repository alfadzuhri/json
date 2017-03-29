<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/412072d077ab9ff8/satellite/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $image_url = $parsed_json->{'satellite'}->{'image_url'};
  $image_url_ir4 = $parsed_json->{'satellite'}->{'image_url_ir4'};
  $image_url_vis = $parsed_json->{'satellite'}->{'image_url_vis'};
  echo "Current type is: ${image_url}\n";
  echo "Current country is: ${image_url_ir4}\n";
  echo "Current city is: ${image_url_vis}\n";
?>