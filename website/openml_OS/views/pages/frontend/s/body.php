<?php
// block unauthorized access
$this->blocked = false;
if($this->study['visibility'] == 'private' and (!$this->ion_auth->logged_in() or $this->ion_auth->user()->row()->id != $this->study['uploader_id'])){
  $this->blocked = true;
} else {
  //placeholder
  $this->wikiwrapper = '<div class="rawtext">'.str_replace('**','',$this->study['description']).'</div>';

  //crop long descriptions
  $this->hidedescription = false;
  //if(strlen($this->wikiwrapper)>400)
  //  $this->hidedescription = true;
}
?>

<div class="container-fluid topborder endless openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

    <div class="tab-content">
      <?php if(!in_array($this->activepage,$this->activity_subpages) and false !== strpos($_SERVER['REQUEST_URI'],'/s/') ){ ?>
      <div class="tab-pane active" id="overview">
        <?php
        subpage('study');
        ?>
      </div>
      <?php } ?>

      <?php if(in_array($this->activepage,$this->activity_subpages)) { ?>

      <div class="tab-pane active" id="studydata">
        <?php subpage('study_'.$this->activepage); ?>
      </div>

      <?php } ?>

    </div> <!-- end tabs content -->

    <div class="submenu">
      <ul class="sidenav nav" id="accordeon">
        <li class="panel guidechapter">
          <a data-toggle="collapse" data-parent="#accordeon"  data-target="#slist"><i class="fa fa-flask fa-fw fa-lg"></i> <b>Study</b></a>
          <ul class="sidenav nav collapse in studychapter" id="slist">
            <li><a href="<?php echo BASE_URL .'s/' . $this->id;?>">Description</a></li>
          </ul>
        </li>
        <li class="panel guidechapter">
          <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pagelist"><i class="fa fa-cubes fa-fw fa-lg"></i> <b>Resources</b></a>
          <ul class="sidenav nav collapse in studychapter" id="pagelist">
            <li><a href="<?php echo BASE_URL .'s/' . $this->id . '/data';?>">Data sets <span class="counter"><?php echo $this->study['datasets_included']; ?></span></a></li>
            <li><a href="<?php echo BASE_URL .'s/' . $this->id . '/tasks';?>">Tasks <span class="counter"><?php echo $this->study['tasks_included']; ?></span></a></li>
            <li><a href="<?php echo BASE_URL .'s/' . $this->id . '/flows';?>">Flows  <span class="counter"><?php echo $this->study['flows_included']; ?></span></a></li>
            <li><a href="<?php echo BASE_URL .'s/' . $this->id . '/runs';?>">Runs  <span class="counter"><?php echo $this->study['runs_included']; ?></span></a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div> <!-- end panel -->
</div> <!-- end container -->
