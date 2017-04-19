<div class="container-fluid topborder endless guidecontainer openmlsectioninfo">
  <div class="col-xs-12 col-md-10 col-md-offset-1 guidesection" id="mainpanel">


	<?php if($this->messages) { ?>
	<div class="alert alert-success" role="alert">
	<?php foreach( $this->messages as $m ):
                  echo $m.' <br>';
              endforeach; ?><br />
	</div>
	<?php } ?>
<div class="col-lg-12">
	<h1>Wiki manager</h1>
	<h3>Export database to wiki</h2>
	<p>Allows you to move descriptions from the database into the wiki manually. Throws error when attempting to overwrite an existing page. If you really want to overwrite it, first remove the wiki page from the (local) git repo (git rm).</p>
	<form method="post" action="">
		<input type="text" name="id" placeholder="Dataset id (or 'all' for all)"/>
		<input class="btn btn-primary" type="submit" value="Export to wiki"/>
        </form>
	<form method="post" action="">
		<input type="text" name="flow-id" placeholder="Flow id (or 'all' for all)"/>
		<input class="btn btn-primary" type="submit" value="Export to wiki"/>
        </form>

	<h3>Import wiki into database</h2>
	<p>Allows you to move descriptions from the wiki into the database manually. Will overwrite the description in the database.</p>
	<form method="post" action="">
		<input type="text" name="wiki-id" placeholder="Dataset id (or 'all' for all)"/>
		<input class="btn btn-primary" type="submit" value="Import into database"/>
        </form>
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
