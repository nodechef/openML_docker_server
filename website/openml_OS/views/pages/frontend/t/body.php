<div class="container-fluid topborder endless openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

    <div class="tab-content">

      <?php
    	if (!isset($this->task)){ ?>
            <div class="container-fluid topborder endless openmlsectioninfo">
              <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

                 <div class="tab-content">
                  <h3><i class="fa fa-warning"></i> This is not the task you are looking for</h3>
                  <p>Sorry, this task does not seem to exist (anymore).</p>
                </div>
              </div>
            </div>
          <?php
        } else { ?>

      <div class="tab-pane active" id="detail">
        <?php if( isset($this->task_id) ) { subpage('task_results'); } ?>
      </div> <!-- end task tab -->
      <div class="tab-pane" id="taskruns">
        <?php if( isset($this->task_id) ) { subpage('task_runs'); } ?>
      </div>
      <div class="tab-pane" id="people">
        <?php if( isset($this->task_id) ) { subpage('task_leaderboard'); } ?>
      </div> <!-- end task tab -->
      <div class="tab-pane" id="submit">
        <?php if( isset($this->task_id) ) { subpage('task'); } ?>
      </div> <!-- end task tab -->

    </div> <!-- end tabs content -->

    <div class="submenu">
      <ul class="sidenav nav" id="accordeon">
        <li class="panel guidechapter">
          <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pagelist"><i class="fa fa-info-circle fa-fw fa-lg"></i> <b>Details</b></a>
          <ul class="sidenav nav collapse in" id="pagelist">
            <li class="active"><a href="#detail" data-toggle="tab">Overview</a></li>
            <li><a href="#people" data-toggle="tab">Leaderboard</a></li>
            <li><a href="#submit" data-toggle="tab">How to submit</a></li>
            <li><a href="#taskruns" data-toggle="tab">All runs</a></li>
          </ul>
        </li>
        <li class="panel guidechapter">
          <a data-toggle="collapse" data-parent="#accordeon"  data-target="#taglist"><i class="fa fa-tag fa-fw fa-lg"></i> <b>Tags</b></a>
          <form method="post" action="" enctype="multipart/form-data">
          <input type="hidden" name="deletetag" id="deletetag"/>
          <ul class="sidenav nav collapse in" id="taglist">
            <li class="tags">
              <?php if(array_key_exists('tags', $this->task)){
                    foreach( $this->task['tags'] as $t) { ?>
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

</div> <!-- end tabs content -->
</div> <!-- end container -->
<?php } ?>
