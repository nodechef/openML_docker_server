<div class="container-fluid topborder endless openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

    <div class="tab-content">

      <div class="tab-pane <?php if( isset($this->id) ) echo 'active'; ?>" id="typedetail">
        <?php
        if(false !== strpos($_SERVER['REQUEST_URI'],'/tt/')) {
        subpage('tasktype');
        }?>
      </div> <!-- end task_type tab -->

    </div> <!-- end tabs content -->

<div class="submenu">
  <ul class="sidenav nav" id="accordeon">
    <li class="panel guidechapter">
      <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pagelist"><i class="fa fa-info-circle fa-fw fa-lg"></i> <b>Details</b></a>
      <ul class="sidenav nav collapse in" id="pagelist">
        <li class="active"><a href="#typedetail" data-toggle="tab">Overview</a></li>
        <li><a href="search?q=+tasktype.tt_id%3A<?php echo $this->id;?>&type=task">Tasks</a></li>
      </ul>
    </li>
  </ul>
</div>

</div> <!-- end tabs content -->
</div> <!-- end container -->
