<?php
class Api_evaluation extends Api_model {

  protected $version = 'v1';

  function __construct() {
    parent::__construct();

    // load models
    $this->load->model('Evaluation');
  }

  function bootstrap($format, $segments, $request_type, $user_id) {
    $this->outputFormat = $format;

    $getpost = array('get','post');

    if (count($segments) >= 1 && $segments[0] == 'list') {
      array_shift($segments);
      $this->evaluation_list($segments);
      return;
    }

    $this->returnError( 100, $this->version );
  }


  private function evaluation_list($segs) {
    $query_string = array();
    for ($i = 0; $i < count($segs); $i += 2)
      $query_string[$segs[$i]] = urldecode($segs[$i+1]);

    $task_id = element('task', $query_string);
    $setup_id = element('setup',$query_string);
    $implementation_id = element('flow',$query_string);
    $uploader_id = element('uploader',$query_string);
    $run_id = element('run',$query_string);
    $function_name = element('function',$query_string);
    $tag = element('tag',$query_string);
    $limit = element('limit',$query_string);
    $offset = element('offset',$query_string);

    if ($task_id == false && $setup_id == false && $implementation_id == false && $uploader_id == false && $run_id == false && $tag == false && $limit == false) {
      $this->returnError( 540, $this->version );
      return;
    }

    if (!(is_safe($task_id) && is_safe($setup_id) && is_safe($implementation_id) && is_safe($uploader_id) && is_safe($run_id) && is_safe($function_name) && is_safe($tag) && is_safe($limit) && is_safe($offset))) {
      $this->returnError(541, $this->version );
      return;
    }

    $where_task = $task_id == false ? '' : ' AND `r`.`task_id` IN (' . $task_id . ') ';
    $where_setup = $setup_id == false ? '' : ' AND `r`.`setup` IN (' . $setup_id . ') ';
    $where_uploader = $uploader_id == false ? '' : ' AND `r`.`uploader` IN (' . $uploader_id . ') ';
    $where_impl = $implementation_id == false ? '' : ' AND `s`.`implementation_id` IN (' . $implementation_id . ') ';
    $where_run = $run_id == false ? '' : ' AND `r`.`rid` IN (' . $run_id . ') ';
    $where_function = $function_name == false ? '' : ' AND `e`.`function` = "' . $function_name . '" ';
    $where_tag = $tag == false ? '' : ' AND `r`.`rid` IN (select id from run_tag where tag="' . $tag . '") ';
    $where_limit = $limit == false ? '' : ' LIMIT ' . $limit;
    if($limit != false && $offset != false){
      $where_limit =  ' LIMIT ' . $offset . ',' . $limit;
    }

    //pre-test, should be quick??
    $where_runs = $where_task . $where_setup . $where_uploader . $where_impl . $where_run . $where_tag;
    $sql_test =
      'SELECT distinct r.rid ' . 
      'FROM run r, algorithm_setup s ' . 
      'WHERE r.setup = s.sid ' . 
      $where_runs . 
      $where_limit ;
    $res_test = $this->Evaluation->query( $sql_test );

    if (count($res_test) > 10000) {
      $this->returnError(543, $this->version, $this->openmlGeneralErrorCode, 'Size of result set: ' . count($res_test) . ' runs; max size: 10000. Please use limit and offset. ');
      return;
    }

    //get evaluations
    $where_total = $where_runs . $where_function;
    
    // TODO: test this function
    $sql =
      'SELECT r.rid, r.task_id, r.start_time, s.implementation_id, s.sid, f.name AS `function`, e.value, e.array_data, i.fullName, d.name ' .
      'FROM evaluation e, algorithm_setup s, implementation i, dataset d, task_inputs t, run r, run_evaluated re, math_function f ' .
      'WHERE r.setup = s.sid ' .
      'AND e.source = r.rid ' .
      'AND e.source = re.run_id ' .
      'AND e.function_id = f.id ' . 
      'AND r.rid = re.run_id ' .
      'AND s.implementation_id = i.id ' .
      'AND r.task_id = t.task_id ' .
      'AND t.input = "source_data" ' .
      'AND t.value = d.did ' . $where_total .
      'ORDER BY r.rid' . $where_limit;
    $res = $this->Evaluation->query( $sql );

    if ($res == false) {
      $this->returnError(542, $this->version);
      return;
    }

    $this->xmlContents( 'evaluations', $this->version, array( 'evaluations' => $res ) );
  }
}
?>
