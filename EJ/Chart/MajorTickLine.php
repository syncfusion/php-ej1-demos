<?php
namespace EJ\Chart;
class MajorTickLine {
    
  public function size ($value) {
    $this -> size = $value;
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