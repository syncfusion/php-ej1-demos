<?php
namespace EJ\PivotTreeMap;
class Column {
    
  public function fieldName ($value) {
    $this -> fieldName = $value;
    return $this;
  }
  
  public function isNamedSets ($value) {
    $this -> isNamedSets = $value;
    return $this;
  }
  
  public function filterItems ($value) {
    $this -> filterItems = $value;
    return $this;
  }
  
}
  ?>