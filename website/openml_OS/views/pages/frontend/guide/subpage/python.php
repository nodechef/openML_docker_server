          <div class="page-header">
            <h1>Python API</h1>
          </div>
	<p>The Python module allows you to connect to the OpenML server from Python programs.
  This means that you can download and upload OpenML dataset, tasks, run Python algorithms on them, and share the results.</p>

  <p>It is also being integrated into <a href="http://scikit-learn.org">scikit-learn</a>,
  which provides a unified interface to a large number of machine learning algorithms in Python. As such, you can
  easily run and compare many algorithms on all OpenML datasets, and analyse all combined results.</p>

  <p>All in a few lines on Python.</p>

  <h2 id="r-demo">Demo</h2>
  <p>You can try it out yourself in a Jupyter Notebook running in the everware cloud. You'll need an OpenML account as well as a <a href="www.github.com">GitHub</a> account for this service to work properly. It may take a few minutes to spin up.</p>
  <p><a target="_blank" class="loginfirst btn btn-success" href="https://everware.rep.school.yandex.net/hub/oauth_login?repourl=https://github.com/openml/study_example_python&OPENMLKEY=<?php echo $this->api_key;?>">Launch demo</a></p>

  <h2 id="r-demo">Course</h2>
  <p>We are currently building a machine learning course with many more examples. All materials are available as Jupyter Notebooks running in the everware cloud. You'll need an OpenML account as well as a <a href="www.github.com">GitHub</a> account for this service to work properly. It may take a few minutes to spin up.</p>
  <p><a target="_blank" class="loginfirst btn btn-success" href="https://everware.rep.school.yandex.net/hub/oauth_login?repourl=https://github.com/openml/machine_learning_introduction&OPENMLKEY=<?php echo $this->api_key;?>">Launch course</a></p>

  <h2 id="r-download">Example</h2>
  <p>This example runs an scikit-learn algorithm on an <a href="t/10">OpenML task</a>.</p>
  <div class="codehighlight"><pre><code class="python">
    from sklearn import ensemble
    from openml import tasks,runs
    import xmltodict

    # Download task, run learner, publish results
    task = tasks.get_task(10)
    clf = ensemble.RandomForestClassifier()
    run = runs.run_task(task, clf)
    
    run = runs.run_task(task, clf)
    run.publish()

    print("Uploaded run with id %s. Check it at www.openml.org/r/%s" %(run.run_id,run.run_id))
  </code></pre></div>

  <p>The first time, you need to set up your config file (~/.openml/config) with your <a href="u#!api">API key</a>.
  <div class="codehighlight"><pre><code class="python">
    apikey=FILL_IN_API_KEY
    cachedir=FILL_IN_CACHE_DIR
  </code></pre></div>

  <p>Also, for now, you'll need to install the developer version of the API</p>
  <div class="codehighlight"><pre><code class="python">
    git clone https://github.com/openml/openml-python.git
    git checkout develop
    python setup.py install
  </code></pre></div>

  <h2 id="download">Download</h2>
	The Python module can be downloaded from <a href="https://github.com/openml/openml-python">GitHub</a>.

  <h2 id="download">Quickstart</h2>
  <a href="http://openml.github.io/openml-python/">Check out the documentation</a> to get started.
  There is also a <a href="https://github.com/openml/openml-python/blob/develop/examples/OpenMLRun.ipynb">Jupyter Notebook</a> with examples.

	<h2 id="issues">Issues</h2>
	Having questions? Did you run into an issue? Let us know via the <a href="https://github.com/openml/openml-python/issues"> OpenML Python issue tracker</a>.
