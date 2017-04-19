<?php
class Api_study extends Api_model {
  
  protected $version = 'v1';
  
  function __construct() {
    parent::__construct();
    
    $this->load->model('Study');
  }

  function bootstrap($format, $segments, $request_type, $user_id) {
    $this->outputFormat = $format;
    
    $getpost = array('get','post');

    if (count($segments) == 1 && $segments[0] == 'list') {
      array_shift($segments);
      $this->study_list($segments);
      return;
    }

    if (count($segments) == 1 && is_numeric($segments[0])) {
      $this->study_get($segments[0], null);
      return;
    }

    if (count($segments) == 2 && is_numeric($segments[0])) {
      $this->study_get($segments[0], $segments[1]);
      return;
    }
    
    $this->returnError( 100, $this->version );
  }
  
  
  private function study_list() {
    $studies = $this->Study->getWhere('visibility = "public" or creator = ' . $this->user_id);
    
    if (count($studies) == 0) {
      $this->returnError(590, $this->version );
      return;
    }

    $this->xmlContents('study-list', $this->version, array('studies' => $studies));
  }
  
  private function study_get($study_id,$knowledge_type) {
    $valid_knowlegde_types = array('runs', 'flows', 'setups', 'data', 'tasks', NULL);
    if (!in_array($knowledge_type, $valid_knowlegde_types)) {
      $this->returnError(600, $this->version);
      return;
    } 
    
    $study = $this->Study->getById($study_id);
    
    if ($study == false) {
      $this->returnError(601, $this->version);
      return;
    }
    
    if ($study->creator != $this->user_id && $study->visibility != 'public') {
      $this->returnError(602, $this->version);
      return;
    }
    
    $tags = $this->Study_tag->getWhere('study_id = ' . $study->id);
    if ($tags == false) {
      $this->returnError(603, $this->version);
      return;
    }
    
    $data = null;
    $tasks = null;
    $flows = null;
    $setups = null;
    $runs = null;
    
    if ($knowledge_type == null || $knowledge_type == 'data') {
      $data = $this->Study_tag->getDataIdsFromStudy($study->id);
    }
    
    if ($knowledge_type == null || $knowledge_type == 'tasks') {
      $tasks = $this->Study_tag->getTaskIdsFromStudy($study->id);
    }
    
    if ($knowledge_type == null || $knowledge_type == 'flows') {
      $flows = $this->Study_tag->getFlowIdsFromStudy($study->id);
    }
    
    if ($knowledge_type == null || $knowledge_type == 'setups') {
      $setups = $this->Study_tag->getSetupIdsFromStudy($study->id);
    }
    
    if ($knowledge_type == null || $knowledge_type == 'runs') {
      $runs = $this->Study_tag->getRunIdsFromStudy($study->id);
    }
    
    $template_values = array(
      'study' => $study, 
      'tags' => $tags, 
      'data' => $data, 
      'tasks' => $tasks, 
      'flows' => $flows, 
      'setups' => $setups, 
      'runs' => $runs
    );
    
    $this->xmlContents('study-get', $this->version, $template_values);
  }
}
?>
