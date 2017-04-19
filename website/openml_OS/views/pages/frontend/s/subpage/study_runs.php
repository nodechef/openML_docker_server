<a href="search?q=tags.tag%3Astudy_<?php echo $this->id; ?>&type=run" class="btn btn-primary pull-right">Search these runs in more detail</a>
		<h1><i class="fa fa-star"></i> <?php echo $this->study['name'];?></h1>

    <div class="searchframefull">
    <?php
      $this->filtertype = 'run';
      $this->sort = 'date';
      $this->specialterms = 'tags.tag:study_'.$this->id;
      loadpage('search', true, 'pre');
			$this->dataonly = true;
      loadpage('search/subpage', true, 'results'); ?>
    </div>
