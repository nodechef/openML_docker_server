<?php

  if(!isset($this->flow)){ ?>
    <div class="container-fluid topborder endless openmlsectioninfo">
      <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

         <div class="tab-content">
          <h3><i class="fa fa-warning"></i> This is not the flow you are looking for</h3>
          <p>Sorry, this flow does not seem to exist (anymore).</p>
        </div>
      </div>
    </div>
  <?php
  } else {

  //placeholder
  $this->wikiwrapper = '<div class="rawtext">'.str_replace('**','',$this->flow['description']).'</div>';

  //crop long descriptions
  $this->hidedescription = false;
  if(strlen($this->wikiwrapper)>400)
    $this->hidedescription = true;
?>

<div class="container-fluid topborder endless openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">

     <div class="tab-content">

     <div class="tab-pane <?php if(false !== strpos($_SERVER['REQUEST_URI'],'/f/')) { echo 'active'; } ?>" id="flow_overview">
     	<?php
	 if(false !== strpos($_SERVER['REQUEST_URI'],'/f/')) {
		subpage('implementation');
	}?>
     </div>
     </div> <!-- end tabs content -->

     <div class="submenu">
       <ul class="sidenav nav" id="accordeon">
         <li class="panel guidechapter">
           <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pagelist"><i class="fa fa-info-circle fa-fw fa-lg"></i> <b>Details</b></a>
           <ul class="sidenav nav collapse in" id="pagelist">
             <li class="active"><a href="#flow_overview" data-toggle="tab">Overview</a></li>
             <li><a href="search?q=+run_flow.flow_id%3A<?php echo $this->id; ?>&type=run">All runs</a></li>
             <!--<?php if(isset($this->flow_source_url)) { ?>
             <li><a class="loginfirst" onclick="doDownload()" href="<?php echo $this->flow_source_url; ?>">Download source</a></li>
             <?php } elseif(isset($this->flow_binary_url)) { ?>
             <li><a class="loginfirst" onclick="doDownload()" href="<?php echo $this->flow_binary_url; ?>">Download binary</a></li>
             <?php } ?>-->
             <li><a href="new/flow">Submit new flow</a></li>
           </ul>
         </li>
         <li class="panel guidechapter">
           <a data-toggle="collapse" data-parent="#accordeon"  data-target="#taglist"><i class="fa fa-tag fa-fw fa-lg"></i> <b>Tags</b></a>
           <form method="post" action="" enctype="multipart/form-data">
           <input type="hidden" name="deletetag" id="deletetag"/>
           <ul class="sidenav nav collapse in" id="taglist">
             <li class="tags">
               <?php if(array_key_exists('tags', $this->flow)){
                     foreach( $this->flow['tags'] as $t) { ?>
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

  </div> <!-- end row -->
</div> <!-- end container -->
<?php } ?>
