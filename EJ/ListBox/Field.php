<?php
namespace EJ\ListBox;
class Field {
    
  public function checkBy ($value) {
    $this -> checkBy = $value;
    return $this;
  }
  
  public function groupBy ($value) {
    $this -> groupBy = $value;
    return $this;
  }
  
  public function htmlAttributes ($value) {
    $this -> htmlAttributes = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function imageAttributes ($value) {
    $this -> imageAttributes = $value;
    return $this;
  }
  
  public function selectBy ($value) {
    $this -> selectBy = $value;
    return $this;
  }
  
  public function spriteCssClass ($value) {
    $this -> spriteCssClass = $value;
    return $this;
  }
  
  public function tableName ($value) {
    $this -> tableName = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
}
  ?>