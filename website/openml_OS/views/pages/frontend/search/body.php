<?php if(!$this->dataonly) {?>
<div class="container-fluid topborder endless openmlsectioninfo">
<div class="col-xs-12 col-md-10 col-md-offset-1" id="mainpanel">
<?php }?>
      <?php subpage('results');?>

<?php if(!$this->dataonly) {?>
</div>


<div class="submenu">
  <ul class="sidenav nav" id="accordeon">
    <li class="panel guidechapter">
      <a data-toggle="collapse" data-parent="#accordeon"  data-target="#filterlist"><i class="fa fa-filter fa-fw fa-lg"></i> <b>Filter results</b></a>
      <ul class="sidenav nav collapse in" id="filterlist">
        <?php if($this->filtertype) subpage($this->filtertype);
              else subpage("everything");
              if($this->filtertype and $this->filtertype!='user' and $this->filtertype!='task_type') {?>
        <li>
          <button class="btn btn-default btn-material-<?php echo $this->materialcolor;?>" id="research">Search</button>
        </li>
        <li><a style="cursor:default;"><i class="fa fa-lg fa-fw fa-info-circle"></i>You can use 1..10, >10, <10</a>
            <a id="removefilters"><i class="fa fa-lg fa-fw fa-trash-o"></i>Remove all filters</a></li>
        <?php } ?>
      </ul>
    </li>
  </ul>
</div>

</div>
<?php
 }
?>
