<?php if (!isset($this->task)){
         echo "Sorry, this task is unknown.";
         die();
} ?>

<h1><i class="fa fa-trophy"></i> <?php echo $this->task['tasktype']['name']; ?> on <?php echo $this->task['source_data']['name']; ?></h1>

<?php if($this->task['tasktype']['name'] != 'Learning Curve'){ ?>
  <a href="search?q=+run_task.task_id%3A<?php echo $this->task_id; ?>&type=run" class="btn btn-primary pull-right">Search runs in more detail</a>
  <h2>All Runs</h2>
  <div class="searchframefull">
  <?php
    $this->filtertype = 'run';
    $this->sort = 'date';
    $this->specialterms = 'run_task.task_id:'.$this->id;
    loadpage('search', true, 'pre');
    loadpage('search/subpage', true, 'results'); ?>
  </div>

<?php } ?>
