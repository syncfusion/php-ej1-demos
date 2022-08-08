<?php
namespace EJ\TreeGrid;
class SearchSetting {
    
  public function fields ($value) {
    $this -> fields = $value;
    return $this;
  }
  
  public function ignoreCase ($value) {
    $this -> ignoreCase = $value;
    return $this;
  }
  
  public function key ($value) {
    $this -> key = $value;
    return $this;
  }
  
  public function operator ($value) {
    $this -> operator = $value;
    return $this;
  }
  
  public function searchHierarchyMode ($value) {
    $this -> searchHierarchyMode = $value;
    return $this;
  }
  
}
  ?>