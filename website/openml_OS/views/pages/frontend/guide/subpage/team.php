<div class="row">

<h2 id="team-core">Our Team</h2>
<p>OpenML is a community effort, and <a href="https://github.com/openml/OpenML/wiki/How-to-contribute">everybody is welcome to contribute</a>. Below are some of the core contributors, but also check out <a href="https://github.com/openml/">our GitHub page</a>".<br />

<?php
 if( $this->team != false ) {
    foreach( $this->team as $t ) { ?>
			<div class="col-md-4 head">
				<img src="<?php echo htmlentities( authorImage( $t->image ) );?>" class="img-circle" width="70" /><br/><br/>
				<span class="membername"><a href="u/<?php echo $t->id;?>"><?php echo $t->first_name.' '.$t->last_name; ?></a></span><br>
				<span class="memberline"><?php echo $t->bio; ?></span>
			</div>
<?php }}?>


  </div>
