
    <h2>OpenML aims to create a frictionless, collaborative environment for exploring machine learning</h2>
    <p><i class="fa fa-globe fa-fw fa-lg"></i> <a href="d">Data sets</a> and <a href="f">workflows</a> from various sources analysed and organized online for easy access</p>
    <p><i class="fa fa-cogs fa-fw fa-lg"></i> <a href="guide#g_apis">Integrated</a> into <a href="guide#g_plugins">machine learning environments</a> for automated experimentation, logging, and sharing</p>
    <p><i class="fa fa-flask fa-fw fa-lg"></i> <a href="r">Fully reproducible and organized results</a> (e.g. models, predictions) you can build on and compare against</p>
    <p><i class="fa fa-users fa-fw fa-lg"></i> Share your work with the world or within circles of trusted researchers</p>
    <p><i class="fa fa-graduation-cap fa-fw fa-lg"></i> Make your work more visible and easily citable</p>
    <p><i class="fa fa-bolt fa-fw fa-lg"></i> Tools to help you design and optimize workflows</p>


    <!--<h3 id="g_intro">Introduction</h3>
<p>OpenML is a place where data scientists can automatically share data in fine detail, build on the results of others, and collaborate on a global scale. It allows anyone to link new data sources, and everyone able to analyse that data to share their code and results (e.g., models, predictions, and evaluations). OpenML makes sure that all shared results are stored and organized online for easy access, reuse and discussion.</p>
<p>Moreover, OpenML is integrated in many great data mining platforms, so that anyone can easily import the data into these tools, pick any algorithm or workflow to run, and automatically keep track of all obtained results. The OpenML website provides easy access to all collected data and code, compares all results obtained on the same data or algorithms, builds data visualizations, and supports online discussions.</p>
<p>-->
<p style="margin-top:20px;">In short, OpenML makes it easy to access data, connect to the right people, and automate experimentation, so that you can focus on the data science.</p>

<h3 id="g_start" class="text-success"><i class="fa fa-database fa-fw"></i> Data</h3>
<p>You can upload data sets through the <a href="new/data" class="loginfirst">website</a>, or <a href="guide#g_apis">API</a>. Data hosted elsewhere can be referenced by URL.</p>

<p>OpenML automatically analyses the data, checks for problems, visualizes it, and computes <a href="search?q=+type%3Adata_quality&type=measure">data characteristics</a> useful to find and compare datasets.</p>
<div class="img-guide-wrapper"><img src="img/data-ss1.png" alt="dataset properties" class="img-guide img-responsive"></div>

<p>Every data set gets a dedicated page with all known information (check out <a href="d/62">zoo</a>), including a wiki, visualizations, statistics, user discussions, and the <i>tasks</i> in which it is used.</p>

<p><i class="fa fa-fw fa-exclamation-triangle"></i>Currently, OpenML only accepts a limited number of data formats (e.g. ARFF for tabular data). We aim to extend this in the near future, and allow conversions between the main data types.</p>

<h3 class="text-warning"><i class="fa fa-trophy fa-fw"></i> Tasks</h3>
<p>Tasks describe what to do with the data. OpenML covers several <a href="search?type=task_type">task types</a>, such as classification and clustering. You can <a href="new/task" class="loginfirst">create tasks</a> online.</p>
<p>Tasks are little containers including the data and other information such as train/test splits, and define what needs to be returned.</p>
<p>Tasks are machine-readable so that machine learning environments know what to do, and you can focus on finding the best algorithm. You can run algorithms on your own machine(s) and upload the results. OpenML evaluates and organizes all solutions online.</p>
<div class="img-guide-wrapper"><img src="img/task-ss1.png" alt="dataset properties" class="img-guide img-responsive"></div>

<p>Tasks are <i>real-time, collaborative</i> data mining challenges (e.g. see <a href="t/7293#!people">this one</a>): you can study, discuss and learn from all submissions (code has to be shared), while OpenML keeps track of who was first.</p>
<div class="img-guide-wrapper"><img src="img/task-ss2.png" alt="dataset properties" class="img-guide img-responsive"></div>

<p><i class="fa fa-fw fa-exclamation-triangle"></i>You can also supply hidden test sets for the evaluation of solutions. Novel ways of ranking solutions will be added in the near future.</p>

<h3 class="text-info"><i class="fa fa-cogs fa-fw"></i> Flows</h3>
<p>Flows are algorithms, workflows, or scripts solving tasks. You can upload them through the <a href="new/flow" class="loginfirst">website</a>, or <a href="guide#g_apis">API</a>. Code hosted elsewhere (e.g., GitHub) can be referenced by URL.</p>
<p>Ideally, flows are wrappers around existing algorithms/tools so that they can automatically read and solve OpenML tasks.</p>
<p>Every flow gets a dedicated page with all known information (check out <a href="f/65">WEKA's RandomForest</a>), including a wiki, hyperparameters, evaluations on all tasks, and user discussions.</p>
<div class="img-guide-wrapper"><img src="img/flow-ss1.png" alt="dataset properties" class="img-guide img-responsive"></div>

<p><i class="fa fa-fw fa-exclamation-triangle"></i> Currently, you will need to install things locally to run flows. We aim to add support for VMs so that flows can be easily (re)run in any environment.</p>

<h3 class="text-danger"><i class="fa fa-star fa-fw"></i> Runs</h3>
<p>Runs are applications of flows on a specific task. They are typically submitted automatically by <a href="guide#g_plugins">machine learning environments</a> (through the OpenML API), which make sure that all details are included to ensure reproducibility.</p>
<p>OpenML organizes all runs online, linked to the underlying data, flows, parameter settings, people, and other details. OpenML also independently evaluates the results contained in the run.</p>
<p>You can search and compare everyone's runs online, download all results into your favorite machine learning enviroment, and relate evaluations to known properties of the data and algorithms.</p>
<div class="img-guide-wrapper"><img src="img/run-ss1.png" alt="dataset properties" class="img-guide img-responsive"></div>
<p>OpenML stores and analyses results in fine detail, up to the level of individual instances.</p>

<h3 id="g_plugins" class="text-success"><i class="fa fa-plug fa-fw"></i> Plugins</h3>
<p>OpenML is deeply integrated in several popular machine learning environments. Given a task, these plugins will automatically download the data into the environments, allow you to run any algorithm/flow, and automatically upload all runs.</p>
<div class="img-guide-wrapper"><img src="img/plugins-ss1.png" alt="dataset properties" class="img-guide img-responsive"></div>

<p>Currently, OpenML is integrated, or being integrated, into the following environments. Follow the links to detailed instructions.
<ul class="nav-tab">
<li><a href="guide#!plugin_weka" data-toggle="tab">WEKA, Waikato Environment for Knowledge Analysis</a></li>
<li><a href="guide#!plugin_moa" data-toggle="tab">MOA, Massive Online Analysis</a></li>
<li><a href="guide#!plugin_rm" data-toggle="tab">RapidMiner</a></li>
</ul>

<h3 id="g_apis" class="text-warning"><i class="fa fa-rocket fa-fw"></i> Programming APIs</h3>
<p>If you want to integrate OpenML into your own tools, we offer several language-specific API's, so you can easily interact with OpenML to list, download and upload data sets, tasks, flows and runs.</p>
<p>With these APIs you can download a task, run an algorithm, and upload the results in just a few lines of code.</p>

<div class="img-guide-wrapper"><img src="img/r-ss1.png" alt="dataset properties" class="img-guide img-responsive"></div>

<p>Follow the links for detailed documentation:</p>
<ul>
<li><a href="guide#!java" data-toggle="tab">Java</a></li>
<li><a href="guide#!r" data-toggle="tab">R</a></li>
<li><a href="guide#!python" data-toggle="tab">Python</a></li>
</ul>
</p>

	<h3 id="g_rest" class="text-info"><i class="fa fa-cloud fa-fw"></i> REST API</h3>
<p>OpenML also offers a REST API which allows you to talk to OpenML directly. Most communication is done using XML, but we also offer JSON endpoints for convenience.
<ul>
<li><a href="guide#!rest_tutorial" data-toggle="tab">REST Tutorial</a></li>
<li><a href="http://www.openml.org/api_docs">REST API Reference</a></li>
<li><a href="guide#!json" data-toggle="tab">JSON Endpoints</a></li>
</ul>
</p>

<h3 class="text-muted"><i class="fa fa-folder fa-fw"></i> Projects (under construction)</h3>
<p>You can combine data sets, flows and runs into projects, to collaborate with others online, or simply keep a log of your work.</p>
<p>Each project gets its own page, which can be linked to publications so that others can find all the details online.</p>

<h3 class="text-muted"><i class="fa fa-users fa-fw"></i> Circles (under construction)</h3>
<p>You can create circles of trusted researchers in which data can be shared that is not yet ready for publication.</p>

<h3 class="text-muted"><i class="fa fa-graduation-cap fa-fw"></i> Altmetrics (under construction)</h3>
<p>OpenML keeps track of the impact of your work: how often is it downloaded, liked, or reused in other studies.</p>

<h3 class="text-muted"><i class="fa fa-bolt fa-fw"></i> Jobs (under construction)</h3>
<p>OpenML can help you run large experiments. A job is a small container defining a specific flow, with specific parameters settings, to run on a specific tasks. You can generate batches of these jobs online, and you can run a helper tool on your machines/clouds/clusters that downloads these jobs (including all data), executes them, and uploads the results.</p>


<h3 id="g_devs" class="text-danger"><i class="fa fa-github fa-fw"></i> Developers</h3>
<p>OpenML is an open source project, <a href="https://github.com/openml">hosted on GitHub</a>, and maintained by a very active community of developers. We welcome everybody to contribute to OpenML, and are glad to help you make optimal use of OpenML in your research.
<ul>
<li><a href="#devels" data-toggle="tab">Information for developers</a></li>
</ul>
</p>
