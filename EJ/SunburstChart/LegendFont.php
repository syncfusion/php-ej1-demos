<?php
namespace EJ\SunburstChart;
class LegendFont {
    
  public function fontFamily ($value) {
    $this -> fontFamily = $value;
    return $this;
  }
  
  public function fontStyle ($value) {
    $this -> fontStyle = $value;
    return $this;
  }
  
  public function fontWeight ($value) {
    $this -> fontWeight = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
}
  ?>