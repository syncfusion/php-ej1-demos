<?php
namespace EJ\BulletGraph;
class MajorTickSetting {
    
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function stroke ($value) {
    $this -> stroke = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>