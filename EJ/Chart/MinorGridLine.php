<?php
namespace EJ\Chart;
class MinorGridLine {
    
  public function dashArray ($value) {
    $this -> dashArray = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>