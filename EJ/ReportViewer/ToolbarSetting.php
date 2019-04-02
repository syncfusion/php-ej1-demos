<?php
namespace EJ\ReportViewer;
class ToolbarSetting {
    
  public function click ($value) {
    $this -> click = $value;
    return $this;
  }
  
  public function items ($value) {
    $this -> items = $value;
    return $this;
  }
  
  public function showToolbar ($value) {
    $this -> showToolbar = $value;
    return $this;
  }
  
  public function showTooltip ($value) {
    $this -> showTooltip = $value;
    return $this;
  }
  
  public function templateId ($value) {
    $this -> templateId = $value;
    return $this;
  }
  
}
  ?>