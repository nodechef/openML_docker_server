<div class="container-fluid topborder endless guidecontainer openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1 guidesection" id="mainpanel">

<div class="tab-content">
  <div class="tab-pane" id="devels">
  <?php subpage('developers'); ?>
  </div>
  <div class="tab-pane" id="terms">
  <?php subpage('terms'); ?>
  </div>
  <div class="tab-pane" id="cite">
  <?php subpage('citing'); ?>
  </div>
  <div class="tab-pane" id="team">
  <?php subpage('team'); ?>
  </div>    
  <div class="tab-pane" id="gamification">
  <?php subpage('gamification'); ?>
  </div>
  <div class="tab-pane" id="plugin_weka">
  <?php subpage('plugin_weka'); ?>
  </div>
  <div class="tab-pane" id="plugin_moa">
  <?php subpage('plugin_moa'); ?>
  </div>
  <div class="tab-pane" id="plugin_mlr">
  <?php subpage('plugin_mlr'); ?>
  </div>
  <div class="tab-pane" id="plugin_rm">
  <?php subpage('plugin_rm'); ?>
  </div>
  <div class="tab-pane" id="java">
  <?php subpage('java'); ?>
  </div>
  <div class="tab-pane" id="r">
  <?php subpage('r'); ?>
  </div>
  <div class="tab-pane" id="python">
  <?php subpage('python'); ?>
  </div>
  <div class="tab-pane" id="net">
  <?php subpage('net'); ?>
  </div>
  <div class="tab-pane" id="rest_tutorial">
  <?php subpage('rest_tutorial'); ?>
  </div>
  <?php subpage('rest_services'); ?>
  <div class="tab-pane" id="json">
  <?php subpage('json'); ?>
  </div>
  <div class="tab-pane active" id="intro">
  <?php subpage('guide'); ?>
  </div>
</div>
    </div> <!-- end col-10 -->

    <div class="submenu">
    <ul class="sidenav nav" id="accordeon">
      <li class="panel guidechapter">
        <a data-toggle="collapse" data-parent="#accordeon"  data-target="#startlist"><i class="fa fa-graduation-cap fa-fw fa-lg"></i> <b>Getting Started</b></a>
        <ul class="sidenav nav collapse <?php if($this->section == 'Guide') echo 'in';?>" id="startlist">
          <li class="active"><a href="#intro" data-toggle="tab">10 minute intro</a></li>
          <li><a href="#terms" data-toggle="tab">Honor Code and Terms</a></li>
          <li><a href="#team" data-toggle="tab">Our Team</a></li>
          <li><a href="#gamification" data-toggle="tab">Gamification</a></li>
        </ul>
      </li>
      <li class="panel guidechapter">
       <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pluginlist"><i class="fa fa-cloud fa-fw fa-lg"></i> <b>Interfaces</b></a>
       <ul class="sidenav nav collapse" id="pluginlist">
        <li><a href="#plugin_weka" data-toggle="tab">WEKA</a></li>
        <li><a href="#plugin_moa" data-toggle="tab">MOA</a></li>
        <li><a href="#plugin_rm" data-toggle="tab">RapidMiner</a></li>
        <li><a href="#java" data-toggle="tab">Java</a></li>
        <li><a href="#r" data-toggle="tab">R</a></li>
        <li><a href="#python" data-toggle="tab">Python</a></li>
        <li><a href="#net" data-toggle="tab">.NET</a></li>
       </ul>
      </li>
      <li class="panel guidechapter">
       <a  data-toggle="collapse" data-parent="#accordeon" data-target="#apilist"><i class="fa fa-wrench fa-fw fa-lg"></i> <b>Developers</b></a>
       <ul class="sidenav nav collapse" id="apilist">
        <li><a href="#devels" data-toggle="tab">Resources</a></li>
        <li><a href="api_docs">REST API Reference</a></li>
        <li><a href="#rest_tutorial" data-toggle="tab">REST API Tutorial</a></li>
        <li><a href="#json" data-toggle="tab">Other tools</a></li>
       </ul>
      </li>
      <li style="margin:15px;"><a href="#cite" data-toggle="tab"><i class="fa fa-fw fa-heart"></i> Citing OpenML</a></li>
    </ul>
    </div> <!-- end submenu -->

</div>
<!-- end container -->
