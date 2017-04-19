     <div class="page-header">
            <h1 id="weka">WEKA</h1>
          </div>
          <img src="img/partners/Weka_logo.png" /><br/>

OpenML is integrated in the Weka (Waikato Environment for Knowledge Analysis) Experimenter and the Command Line Interface.

	  	<h2 id="weka-plugin">Installation</h2>
      OpenML is available as a weka extension in the package manager<br/>
      <ol>
        <li><a href="http://www.cs.waikato.ac.nz/ml/weka/downloading.html">Download the latest development version</a> (3.7.13 or higher).
        <li>Launch Weka, or start from commandline: <pre>java -jar weka.jar</pre> If you need more memory (e.g. 1GB), start as follows: <pre>java -Xmx1G -jar weka.jar</pre>
				<li>Open the package manager (Under 'Tools')</li>
        <li>Select package <b>OpenmlWeka</b> and click install. Afterwards, restart WEKA.</li>
        <li>From the Tools menu, open the 'OpenML Experimenter'.</li>
      </ol>

			<h2 id="weka-start-exp">Quick Start (Graphical Interface)</h2>
			<div>
			<img src="img/openmlweka.png" alt="OpenML Weka Screenshot" class="img-rounded" style="width:800px">
			<p>You can solve OpenML Tasks in the Weka Experimenter, and automatically upload your experiments to OpenML (or store them locally).</p>
			<ol>
        <li>From the Tools menu, open the 'OpenML Experimenter'.</li>
        <li>Enter your <a href="u#!api">API key</a> in the top field (log in first). You can also store this in a config file (see below).
        <li>In the 'Tasks' panel, click the 'Add New' button to add new tasks. Insert the task id's as comma-separated values (e.g., '1,2,3,4,5'). Use <a href="search?type=task">search</a> to find interesting tasks and click the <i class="fa fa-list-ol"></i> icon to list the ID's. In the future this search will also be integrated in WEKA.</li>
				<li>Add algorithms in the "Algorithm" panel.</li>
				<li>Go to the "Run" tab, and click on the "Start" button. </li>
				<li>The experiment will be executed and sent to OpenML.org. </li>
				<li>The runs will now appear on OpenML.org. You can follow their progress and check for errors on your profile page under 'Runs'.</li>
			</ol>
			</div>

      <h2 id="weka-start-cli">Quick Start CommandLine Interface</h2>
      The Command Line interface is useful for running experiments automatically on a server, without using a GUI.
      <ol>
        <li>Create a config file called <code>openml.conf</code> in a new directory called <code>.openml</code> in your home dir. It should contain the following line:
	          <pre>api_key = YOUR_KEY</pre>
        </li>
        <li>Execute the following command: <pre>java -cp weka.jar openml.experiment.TaskBasedExperiment -T &lt;task_id&gt; -C &lt;classifier_classpath&gt; -- &lt;parameter_settings&gt;</pre></li>
        <li>For example, the following command will run Weka's J48 algorithm on Task 1: <pre>java -cp OpenWeka.beta.jar openml.experiment.TaskBasedExperiment -T 1 -C weka.classifiers.trees.J48</pre> </li>
        <li>The following suffix will set some parameters of this classifier: <pre>-- -C 0.25 -M 2</pre></li>
      </ol>

		  Please report any bugs that you may encounter to <a href="mailto:j.n.van.rijn@liacs.leidenuniv.nl">j.n.van.rijn@liacs.leidenuniv.nl</a>.
