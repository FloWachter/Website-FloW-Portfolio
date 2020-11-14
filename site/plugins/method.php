<?php

field::$methods['lat'] = function($field) {
  $parts = explode(',',$field->value);
  return $parts[0];
};
field::$methods['lng'] = function($field) {
  $parts = explode(',',$field->value);
  return $parts[1];
};

function ktRaw($content) {
   $text = kirbytext($content);
   return preg_replace('/(.*)<\/p>/', '$1', preg_replace('/<p>(.*)/', '$1', $text));
}