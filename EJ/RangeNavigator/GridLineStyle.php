<?php
namespace EJ\RangeNavigator;
class GridLineStyle {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function dashArray ($value) {
    $this -> dashArray = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>