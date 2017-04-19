<div class="container-fluid topborder endless openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

    <div class="tab-content">
      <?php if(!in_array($this->subpage,$this->activity_subpages) and false !== strpos($_SERVER['REQUEST_URI'],'/u/') ){ ?>
      <div class="tab-pane active" id="overview">
        <?php
        subpage('user');
        ?>
      </div>
      <?php } ?>

      <?php if(in_array($this->subpage,$this->activity_subpages)) { ?>

      <div class="tab-pane active" id="userdata">
        <?php subpage('user_'.$this->subpage); ?>
      </div>

      <?php } ?>

      <?php if(false !== strpos($_SERVER['REQUEST_URI'],'/u/') and $this->is_owner) { ?>

      <div class="tab-pane" id="edit">
        <?php
        subpage('profile');
        ?>
      </div>
      <div class="tab-pane" id="api">
        <?php
        subpage('api');
        ?>
      </div>
      <?php } ?>

    </div> <!-- end tabs content -->

    <div class="submenu">
      <ul class="sidenav nav" id="accordeon">
        <li class="panel guidechapter">
          <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pagelist"><i class="fa fa-user fa-fw fa-lg"></i> <b>Activity</b></a>
          <ul class="sidenav nav collapse in" id="pagelist">
            <li><a href="<?php echo BASE_URL .'u/' . $this->user_id;?>">Overview</a></li>
            <li><a href="<?php echo BASE_URL .'u/' . $this->user_id . '/data';?>">Data sets</a></li>
            <li><a href="<?php echo BASE_URL .'u/' . $this->user_id . '/flows';?>">Flows</a></li>
            <li><a href="<?php echo BASE_URL .'u/' . $this->user_id . '/runs';?>">Runs</a></li>
          </ul>
      <?php if($this->is_owner){?>
          <li class="panel guidechapter">
            <a data-toggle="collapse" data-parent="#accordeon"  data-target="#settings"><i class="fa fa-gears fa-fw fa-lg"></i> <b>Account settings</b></a>
            <ul class="sidenav nav collapse" id="settings">
              <li><a href="#edit" data-toggle="tab">Profile and password</a></li>
              <li><a href="#api" data-toggle="tab">API authentication</a></li>
            </ul>
          </li>
        </ul>
      <?php } ?>
    </div>

  </div> <!-- end panel -->
</div> <!-- end container -->
