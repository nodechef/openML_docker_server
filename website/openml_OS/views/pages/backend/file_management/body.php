<div class="container-fluid topborder endless guidecontainer openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1 guidesection" id="mainpanel">

      <div class="tab-pane">
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#missing" role="tab" data-toggle="tab">Missing</a></li>
          <li><a href="#size" role="tab" data-toggle="tab">Size</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="missing">
            <?php
              echo $this->dataoverview->generate_table_static(
                $this->missing_name,
                $this->missing_columns,
                $this->missing_items,
                $this->missing_api_delete_function );
              ?>
          </div>
          <div class="tab-pane" id="size">
            <?php
              echo $this->dataoverview->generate_table_static(
                $this->size_name,
                $this->size_columns,
                $this->size_items,
                $this->size_api_delete_function );
              ?>
          </div>
        </div>
      </div>

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
