<?php
namespace EJ\ReportViewer;
class ParameterSetting {
    
  public function delimiterChar ($value) {
    $this -> delimiterChar = $value;
    return $this;
  }
  
  public function popupHeight ($value) {
    $this -> popupHeight = $value;
    return $this;
  }
  
  public function popupWidth ($value) {
    $this -> popupWidth = $value;
    return $this;
  }
  
}
  ?>