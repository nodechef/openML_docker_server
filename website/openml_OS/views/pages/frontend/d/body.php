<?php

    //get data from ES
    $this->p = array();
    $this->p['index'] = 'openml';
    $this->p['type'] = 'data';
    $this->p['id'] = $this->id;

    $this->down = array();
    $this->down['index'] = 'openml';
    $this->down['type'] = 'downvote';
    $json = '{
                "query": {
                  "bool": {
                    "must": [
                      { "match": { "knowledge_type":  "d" }},
                      { "match": { "knowledge_id": '.$this->id.'   }}
                    ]
                  }
                }
              }';
    $this->down['body'] = $json;
    if ($this->ion_auth->logged_in()) {
        $this->l = array();
        $this->l['index'] = 'openml';
        $this->l['type'] = 'like';
        $json = '{
                    "query": {
                      "bool": {
                        "must": [
                          { "match": { "knowledge_type":  "d" }},
                          { "match": { "knowledge_id": '.$this->id.'   }},
                          { "match": { "user_id": '.$this->ion_auth->user()->row()->id.'}}
                        ]
                      }
                    }
                  }';
        $this->l['body'] = $json;
    }
    try{
      $this->data = $this->searchclient->get($this->p)['_source'];
      $this->downvotes = $this->searchclient->search($this->down)['hits']['hits'];
      if ($this->ion_auth->logged_in()) {
        $this->activeuserlike = $this->searchclient->search($this->l)['hits']['hits'];
      }
    } catch (Exception $e) {
        //var_dump($e);
    }

    if(!isset($this->data)){ ?>
      <div class="container-fluid topborder endless openmlsectioninfo">
        <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

           <div class="tab-content">
            <h3><i class="fa fa-warning"></i> This is not the data set you are looking for</h3>
            <p>Sorry, this data set does not seem to exist (anymore).</p>
          </div>
        </div>
      </div>
    <?php
    } else {

    //get other versions -> do in javascript?
    $this->p2 = array();
    $this->p2['index'] = 'openml';
    $this->p2['type'] = 'data';
    $this->p2['body']['_source'] = array("data_id", "version", "version_label");
    $this->p2['body']['query']['term']['exact_name'] = $this->data['name'];
    $this->p2['body']['sort'] = 'version';
    try{
      $this->versions = array_column($this->searchclient->search($this->p2)['hits']['hits'],'_source');
    } catch (Exception $e) {}

    //get tasks
    $this->p3 = array();
    $this->p3['index'] = 'openml';
    $this->p3['type'] = 'task';
    $this->p3['body']['query']['term']['source_data.data_id'] = $this->id;
    $this->p3['body']['sort'] = array('tasktype.tt_id' => array ('order' => 'asc'), 'runs' => array ('order' => 'desc'));
    $this->p3['body']['size'] = 1000;
    try{
        $this->tasks = array_column($this->searchclient->search($this->p3)['hits']['hits'],'_source');
    } catch (Exception $e) {}

    //get properties - needed for the descriptions
    $this->p4 = array();
    $this->p4['index'] = 'openml';
    $this->p4['type'] = 'measure';
    $this->p4['body']['size'] = 1000;
    $this->p4['body']['query']['bool']['must']['match_all'] = (object)[];
    $this->p4['body']['query']['bool']['filter']['term']['measure_type'] = "data_quality";
    $this->p4['body']['sort'] = array('priority');
    try {
      $responses = $this->searchclient->search($this->p4);
      $this->dataproperties = array();
      foreach(array_column($responses['hits']['hits'],'_source') as $dq){
        $this->dataproperties[$dq['name']] = $dq;
      }
    } catch (Exception $e) {}

    //get measures
    $this->p4 = array();
    $this->p4['index'] = 'openml';
    $this->p4['type'] = 'measure';
    $this->p4['body']['size'] = 1000;
    $this->p4['body']['query']['bool']['must']['match_all'] = (object)[];
    $this->p4['body']['query']['bool']['filter']['term']['measure_type'] = "evaluation_measure";
    $this->p4['body']['sort'] = array('priority');
    try {
      $responses = $this->searchclient->search($this->p4);
      $this->allmeasures = array_column($responses['hits']['hits'],'_source');
    } catch (Exception $e) {}

    // block unauthorized access
    $this->blocked = false;
    if($this->data['visibility'] == 'private' and !$this->ion_auth->is_admin() and (!$this->ion_auth->logged_in() or $this->ion_auth->user()->row()->id != $this->data['uploader_id'])){
      $this->blocked = true;
    } else {

    if(($this->ion_auth->logged_in() and $this->ion_auth->user()->row()->id == $this->data['uploader_id']) || $this->ion_auth->is_admin())
      $this->is_owner = true;

    // licences
    $this->licences = array();
    $this->licences['Public'] = array( "name" => 'Publicly available', "url" => 'https://creativecommons.org/choose/mark/' );
    $this->licences['CC_BY'] = array( "name" => 'Attribution (CC BY)', "url" => 'http://creativecommons.org/licenses/by/4.0/' );
    $this->licences['CC_BY-SA'] = array( "name" => 'Attribution-ShareAlike (CC BY-SA)', "url" => 'http://creativecommons.org/licenses/by-sa/4.0/' );
    $this->licences['CC_BY-ND'] = array( "name" => 'Attribution-NoDerivs (CC BY-ND)', "url" => 'http://creativecommons.org/licenses/by-nd/4.0/' );
    $this->licences['CC_BY-NC'] = array( "name" => 'Attribution-NonCommercial (CC BY-NC)', "url" => 'http://creativecommons.org/licenses/by-nc/4.0/' );
    $this->licences['CC_BY-NC-SA'] = array( "name" => 'Attribution-NonCommercial-ShareAlike (CC BY-NC-SA)', "url" => 'http://creativecommons.org/licenses/by-nc-sa/4.0/' );
    $this->licences['CC-BY-NC-ND'] = array( "name" => 'Attribution-NonCommercial-NoDerivs (CC BY-NC-ND)', "url" => 'http://creativecommons.org/licenses/by-nc-nd/4.0/' );
    $this->licences['CC0'] = array( "name" => 'Public Domain (CC0)', "url" => 'http://creativecommons.org/about/cc0' );

    //placeholder
    $this->wikiwrapper = '<div class="rawtext">'.str_replace('**','',$this->data['description']).'</div>';

    //crop long descriptions
    $this->hidedescription = false;
    if(strlen($this->wikiwrapper)>400)
      $this->hidedescription = true;
    }
?>

<div class="container-fluid topborder endless openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

     <div class="tab-content">

     <div class="tab-pane <?php if($this->activetab == 'overview') echo 'active'; ?>" id="data_overview">
       <?php if($this->activetab == 'overview') subpage('dataset'); ?>
     </div>

     <div class="tab-pane <?php if($this->activetab == 'update') echo 'active'; ?>" id="data_update">
       <?php if($this->activetab == 'update') subpage('update'); ?>
     </div>

     </div> <!-- end tabs content -->


    <div class="submenu">
      <ul class="sidenav nav" id="accordeon">
        <li class="panel guidechapter">
          <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pagelist"><i class="fa fa-info-circle fa-fw fa-lg"></i> <b>Details</b></a>
          <ul class="sidenav nav collapse in" id="pagelist">
            <li class="active"><a href="#data_overview" data-toggle="tab">Overview</a></li>
            <li><a class="loginfirst" onclick="doDownload()" href="<?php echo $this->data['url']; ?>">Download data</a></li>
            <li><a href="new/data">Submit new data</a></li>
            <li><a href="new/task">Create a task with this data set</a></li>
          </ul>
        </li>
        <li class="panel guidechapter">
          <a data-toggle="collapse" data-parent="#accordeon"  data-target="#taglist"><i class="fa fa-tag fa-fw fa-lg"></i> <b>Tags</b></a>
          <form method="post" action="" enctype="multipart/form-data">
          <input type="hidden" name="deletetag" id="deletetag"/>
          <ul class="sidenav nav collapse in" id="taglist">
            <li class="tags">
              <?php if(array_key_exists('tags', $this->data)){
                    foreach( $this->data['tags'] as $t) { ?>
                  <span class="label label-material-<?php echo $this->materialcolor; ?> tag"><?php echo $t['tag']; if($t['uploader']==$this->user_id){ ?> <button class="deltag" type="submit" onclick="$('#deletetag').val('<?php echo $t['tag'];?>');" name="<?php echo $t['tag'];?>"><i class="fa fa-times"></i></button><?php } ?></span>
              <?php }} ?>
            </li>
            <li>
                <input type="text" class="form-control floating-label loginfirst" id="newtags" name="newtags" data-hint="Add a single new tag. Use underscores for spaces. Press enter when done."
                 placeholder="Add tag">
            </li>
          </ul>
        </form>
        </li>
      </ul>
    </div>

</div> <!-- end container -->
</div> <!-- end container -->
<?php } ?>
