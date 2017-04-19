          <div class="page-header">
            <h1 id="moa">MOA </h1>
          </div>

          <h2 id="moa-plugin">Download Plugin</h2>
            <p>OpenML features extensive support for MOA. However currently this is implemented as a stand alone MOA compilation, using the latest version (as of May, 2014).
            </p><br>
            <a href="downloads/openmlmoa.beta.jar">
              <button class="btn btn-large btn-primary" type="button">Download MOA for OpenML</button>
            </a>
            <br/>
            <br/>
          <img src="img/partners/moa.png" /><br/>
          <h2 id="moa-start">Quick Start</h2>
	    <img src="img/openmlmoa.png" alt="OpenML Weka Screenshot" class="img-rounded" style="width:100%">
	    <ol>
		<li>Download the standalone MOA environment above.</li>
		<li>Find your <a href="u#!api">API key</a> in your profile (log in first). Create a config file called <code>openml.conf</code> in a <code>.openml</code> directory in your home dir. It should contain the following lines:
	<pre>api_key = YOUR_KEY</pre></li>
		<li>Launch the JAR file by double clicking on it, or launch from command-line using the following command:
            	<pre>java -cp openmlmoa.beta.jar moa.gui.GUI</pre></li>
            	<li>Select the task <code>moa.tasks.openml.OpenmlDataStreamClassification</code> to evaluate a classifier on an OpenML task, and send the results to OpenML.</li>
		<li>Optionally, you can generate new streams using the Bayesian Network Generator: select the <code>moa.tasks.WriteStreamToArff</code> task, with <code>moa.streams.generators.BayesianNetworkGenerator</code>.</li>
	    </ol>

            Please note that this is a beta version, which is under active development. Please report any bugs that you may encounter to <a href="mailto:j.n.van.rijn@liacs.leidenuniv.nl">j.n.van.rijn@liacs.leidenuniv.nl</a>.
