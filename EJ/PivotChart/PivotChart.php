<?php
namespace EJ;
class PivotChart extends \EJ\Widget {
    
  public function analysisMode($value) {
    $this->model["analysisMode"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function zooming($value) {
    $this->model["zooming"] = $value;
    return $this;
  }
  
  public function commonSeriesOptions($value) {
    $this->model["commonSeriesOptions"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function customObject($value) {
    $this->model["customObject"] = $value;
    return $this;
  }
  
  public function enable3D($value) {
    $this->model["enable3D"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableMultiLevelLabels($value) {
    $this->model["enableMultiLevelLabels"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function legend($value) {
    $this->model["legend"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function operationalMode($value) {
    $this->model["operationalMode"] = $value;
    return $this;
  }
  
  public function axes($value) {
    $this->model["axes"] = $value;
    return $this;
  }
  
  public function primaryXAxis($value) {
    $this->model["primaryXAxis"] = $value;
    return $this;
  }
  
  public function primaryYAxis($value) {
    $this->model["primaryYAxis"] = $value;
    return $this;
  }
  
  public function rotation($value) {
    $this->model["rotation"] = $value;
    return $this;
  }
  
  public function enableContextMenu($value) {
    $this->model["enableContextMenu"] = $value;
    return $this;
  }
  
  public function serviceMethodSettings($value) {
    $this->model["serviceMethodSettings"] = $value;
    return $this;
  }
  
  public function size($value) {
    $this->model["size"] = $value;
    return $this;
  }
  
  public function title($value) {
    $this->model["title"] = $value;
    return $this;
  }
  
  public function url($value) {
    $this->model["url"] = $value;
    return $this;
  }
  
  public function enableXHRCredentials($value) {
    $this->model["enableXHRCredentials"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function afterServiceInvoke($value) {
    $this->model["afterServiceInvoke"] = $value;
    return $this;
  }
  
  public function beforeServiceInvoke($value) {
    $this->model["beforeServiceInvoke"] = $value;
    return $this;
  }
  
  public function beforeSeriesRender($value) {
    $this->model["beforeSeriesRender"] = $value;
    return $this;
  }
  
  public function drillSuccess($value) {
    $this->model["drillSuccess"] = $value;
    return $this;
  }
  
  public function renderComplete($value) {
    $this->model["renderComplete"] = $value;
    return $this;
  }
  
  public function renderFailure($value) {
    $this->model["renderFailure"] = $value;
    return $this;
  }
  
  public function renderSuccess($value) {
    $this->model["renderSuccess"] = $value;
    return $this;
  }
  
  public function beforeExport($value) {
    $this->model["beforeExport"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejPivotChart";
  }
  
    
}
  ?>