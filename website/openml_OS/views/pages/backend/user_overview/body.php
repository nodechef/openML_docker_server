<div class="container-fluid topborder endless guidecontainer openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1 guidesection" id="mainpanel">

<?php

echo str_replace("container", "", str_replace("topborder", "", $this->dataoverview->generate_table_static(
  $this->name,
  $this->columns,
  $this->items,
  $this->api_delete_function )));

?>

<div class="submenu">
  <ul class="sidenav nav" id="accordeon">
    <li class="panel guidechapter">
      <a data-toggle="collapse" data-parent="#accordeon"  data-target="#pagelist"><i class="fa fa-wrench fa-fw fa-lg"></i> <b>Tools</b></a>
      <ul class="sidenav nav collapse in" id="pagelist">
        <?php foreach( $this->directories as $d ): ?>
          <li><a href="backend/page/<?php echo $d; ?>"><?php echo text_neat_ucwords($d); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </li>
  </ul>
</div>
</div>
</div>
