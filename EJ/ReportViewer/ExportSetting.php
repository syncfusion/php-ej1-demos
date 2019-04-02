<?php
namespace EJ\ReportViewer;
class ExportSetting {
    
  public function exportOptions ($value) {
    $this -> exportOptions = $value;
    return $this;
  }
  
  public function excelFormat ($value) {
    $this -> excelFormat = $value;
    return $this;
  }
  
  public function wordFormat ($value) {
    $this -> wordFormat = $value;
    return $this;
  }
  
}
  ?>