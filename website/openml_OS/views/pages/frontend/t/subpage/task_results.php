		<?php if (!isset($this->task)){
             echo "Sorry, this task is unknown.";
             die();
    } ?>

    <ul class="hotlinks">
                <?php if ($this->ion_auth->logged_in()) {
                    //if ($this->ion_auth->user()->row()->id != $this->task['uploader_id']) {?>
                        <li>
                            <?php
                            if ($this->activeuserlike) {
                                echo '<a id="likebutton" class="loginfirst btn btn-link" onclick="doLike(true)" title="Click to unlike"><i id="likeicon" class="fa fa-heart fa-2x"></i></a>';
                            } else {
                                echo '<a id="likebutton" class="loginfirst btn btn-link" onclick="doLike(false)" title="Click to like"> <i id="likeicon" class="fa fa-heart-o fa-2x"></i></a>';
                            }
                            ?>
                            <br>
                            <br>
                        </li>
                        <?php } ?>
                        <li><a class="loginfirst btn btn-link" onclick="doDownload()" href="api/v1/json/task/<?php echo $this->task_id;?>"><i class="fa fa-file-code-o fa-2x"></i></a><br>JSON</li>
                        <li><a class="loginfirst btn btn-link" onclick="doDownload()" href="api/v1/task/<?php echo $this->task_id;?>"><i class="fa fa-file-code-o fa-2x"></i></a><br>XML</li>
    </ul>

    <h1><i class="fa fa-trophy"></i> <?php echo $this->task['tasktype']['name']; ?> on <?php echo $this->task['source_data']['name']; ?></h1>
    <div class="datainfo">
                <i class="fa fa-trophy"></i> Task <?php echo $this->task_id; ?>
                <i class="fa fa-flag"></i> <a href="tt/<?php echo $this->task['tasktype']['tt_id'];?>"><?php echo $this->task['tasktype']['name']; ?></a>
                <i class="fa fa-database"></i> <a href="d/<?php echo $this->task['source_data']['data_id'];?>"><?php echo $this->task['source_data']['name']; ?></a>
                <i class="fa fa-star"></i> <a href="#taskruns" data-toggle="tab"><?php echo $this->task['runs']; ?> runs submitted</a>
                <br>
                <i class="fa fa-heart"></i> <span id="likecount"><?php if(array_key_exists('nr_of_likes',$this->task)): if($this->task['nr_of_likes']!=null): $nr_l = $this->task['nr_of_likes']; else: $nr_l=0; endif; else: $nr_l=0; endif; echo $nr_l.' likes'; ?></span>
                <i class="fa fa-cloud-download"></i><span id="downloadcount"><?php if(array_key_exists('nr_of_downloads',$this->task)): if($this->task['nr_of_downloads']!=null): $nr_d = $this->task['nr_of_downloads']; else: $nr_d = 0; endif; else: $nr_d = 0; endif; echo 'downloaded by '.$nr_d.' people'; ?>
								<?php if(array_key_exists('total_downloads',$this->task)): if($this->task['total_downloads']!=null): $nr_d = $this->task['total_downloads']; endif; endif; echo ', '.$nr_d.' total downloads'; ?></span>
                <i class="fa fa-warning task" data-toggle="collapse" data-target="#issues" title="Click to show/hide" style="cursor: pointer; cursor: hand;"></i><span id="nr_of_issues" data-toggle="collapse" data-target="#issues" title="Click to show/hide" style="cursor: pointer; cursor: hand;"><?php if(array_key_exists('nr_of_issues',$this->task)): if($this->task['nr_of_issues']!=null): $i = $this->task['nr_of_issues']; else: $i=0; endif; else: $i=0; endif; echo $i.' issues'; ?></span>
                <!--<i class="fa fa-thumbs-down"></i><span id="downvotes"><?php if(array_key_exists('nr_of_downvotes',$this->task)): if($this->task['nr_of_downvotes']!=null): $d = $this->task['nr_of_downvotes']; else: $d=0; endif; else: $d=0; endif; echo $d.' downvotes'; ?></span>
								-->
                <?php if ($this->ion_auth->logged_in()) {
                        if ($this->ion_auth->user()->row()->gamification_visibility == 'show') {?>
                            <span title="Reach is: 2x likes received + downloads received on this task."><i class="fa fa-rss reach"></i><span id="reach"><?php if(array_key_exists('reach',$this->task)): if($this->task['reach']!=null): $r = $this->task['reach']; else: $r=0; endif; else: $r=0; endif; echo $r.' reach'; ?></span></span>
                            <span id="impact" title="Impact is: number or reuses of this task in runs + 0.5*reach of these runs"><i class="fa fa-bolt impact"></i><?php if(array_key_exists('impact',$this->task)): if($this->task['impact']!=null): $i = $this->task['impact']; else: $i=0; endif; else: $i=0; endif; echo $i.' impact'; ?></span>
                    <?php }?>
               <?php }?>
  </div>

    <div class="col-xs-12 panel collapse" id="issues">
        <table class="table table-striped" id="issues_content">
            <tr>
                <th>Issue</th>
                <th>#Downvotes for this reason</th>
                <th>By</th>
                <th></th>
            </tr>
            <?php
                foreach($this->downvotes as $downvote){
                    $id = $downvote['_source']['reason_id'];
                    echo '<tr>'
                    . '<td>'.$downvote['_source']['reason'].'</td>'
                    . '<td>'.$downvote['_source']['count'].'</td>'
                    . '<td><a href="u/'.$downvote['_source']['user_id'].'">User '.$downvote['_source']['user_id'].'</a></td>'
                    //. '<td><a id="downvotebutton-'.$id.'" class="loginfirst btn btn-link" onclick="doDownvote('.$id.')" title="Click to agree"> <i id="downvoteicon-'.$id.'" class="fa fa-thumbs-o-down"/></a></td>'
                    . '<td><a id="downvotebutton-'.$id.'" class="loginfirst btn btn-link" onclick="doDownvote('.$id.')" title="Click to agree"></a></td>'
                    . '</tr>';
                }
            ?>
        </table>
        <br>
        <br>
        <?php if ($this->ion_auth->logged_in()) {
              //if ($this->ion_auth->user()->row()->id != $this->task['uploader_id']){
              $nodownvote = true;
              foreach($this->downvotes as $downvote){
                  if($downvote['_source']['user_id'] == $this->ion_auth->user()->row()->id){
                      $nodownvote = false;
                  }
              }
              if($nodownvote){
            ?>
                <form role="form" id="issueform">
                    <h5>Submit a new issue for this dataset</h5>
                    <div class="form-group">
                      <label for="Reason">Issue:</label>
                      <input type="text" class="form-control" id="reason">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <div id="succes" class="text-center hidden">Issue Submitted!</div>
                    <div id="fail" class="text-center hidden">Can't submit issue </div>
                </form>
            <?php //}

              }} ?>
    </div>

		<?php if($this->task['tasktype']['name'] != 'Learning Curve'){ ?>
        <div class="pull-right">
		        Show results for:
				<select class="selectpicker" data-width="auto" onchange="evaluation_measure = this.value; showData();">
					<?php foreach($this->allmeasures as $m): ?>
					<option value="<?php echo $m;?>" <?php echo ($m == $this->current_measure) ? 'selected' : '';?>><?php echo str_replace('_', ' ', $m);?></option>
					<?php endforeach; ?>
				</select>
      </div>
      <h2 style="margin-top:0px;"><?php echo $this->task['runs']; ?> Runs</h2>


      <?php if($this->task['tasktype']['tt_id'] != 6){ ?>

      <div class="col-xs-12 panel">
			     <div id="data_result_visualize" class="reflow-chart">Rendering chart <i class="fa fa-spinner fa-spin"></i></div>
      </div>

      <div class="col-xs-12 panel">
        <div class="table-responsive reflow-table">
           <div id="table-spinner">Rendering table <i class="fa fa-spinner fa-spin"></i></div>
           <table id="tasktable" class="display" width="100%"></table>
        </div>
      </div>

		<?php }} else { ?>
      <h2><?php echo $this->task['runs']; ?> Runs</h2>

		        Plot learning curves for score:
				<select class="selectpicker" data-width="auto" onchange="evaluation_measure = this.value; redrawCurves();">
					<?php foreach($this->allmeasures as $m): ?>
					<option value="<?php echo $m;?>" <?php echo ($m == $this->current_measure) ? 'selected' : '';?>><?php echo str_replace('_', ' ', $m);?></option>
					<?php endforeach; ?>
				</select>

      <h3>Curves</h3>
      <div class="col-xs-12 panel">
			<div class="checkbox"><label>
			<input type="checkbox" name="latestOnly" checked onchange="latestOnly = this.checked; redrawCurves();"> Only newest flow versions</label></div>

			<div id="learning_curve_visualize" style="width: 100%">Plotting curves <i class="fa fa-spinner fa-spin"></i></div>
      </div>

      <h3>Table</h3>
        <div class="panel table-responsive">
				<table id="datatable_main" class="table table-bordered table-condensed table-responsive">
					<?php echo generate_table(
								array('img_open' => '',
										'rid' => 'Run',
										'sid' => 'setup id',
										'name' => 'Flow',
										'value' => str_replace('_',' ',$this->current_measure), ) ); ?>
				</table></div>

		<?php } ?>
