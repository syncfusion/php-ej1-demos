<?php
namespace EJ\TreeGrid;
class EditSetting {
    
  public function allowAdding ($value) {
    $this -> allowAdding = $value;
    return $this;
  }
  
  public function allowDeleting ($value) {
    $this -> allowDeleting = $value;
    return $this;
  }
  
  public function allowEditing ($value) {
    $this -> allowEditing = $value;
    return $this;
  }
  
  public function beginEditAction ($value) {
    $this -> beginEditAction = $value;
    return $this;
  }
  
  public function dialogEditorTemplateID ($value) {
    $this -> dialogEditorTemplateID = $value;
    return $this;
  }
  
  public function editMode ($value) {
    $this -> editMode = $value;
    return $this;
  }
  
  public function rowPosition ($value) {
    $this -> rowPosition = $value;
    return $this;
  }
  
  public function showDeleteConfirmDialog ($value) {
    $this -> showDeleteConfirmDialog = $value;
    return $this;
  }
  
  public function batchEditSettings ($value) {
    $this -> batchEditSettings = $value;
    return $this;
  }
  
}
  ?>