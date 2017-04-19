<!-- [START] Api function description: openml.authenticate -->

<div class="tab-pane" id="openml_authenticate">
<h3 id=openml_authenticate>openml.authenticate</h3>
<p><i>returns a session_hash, which can be used for writing to the API</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST username</code> (Required)</dt><dd>The username to be authenticated with</dd></dl>
<dl><dt><code>POST password</code> (Required)</dt><dd>An md5 hash of the password, corresponding to the username</dd></dl>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:authenticate xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:session_hash&gt;G9MPPN114ZCZNWW2VN3JE9VF1FMV8Y5FXHUDUL4P&lt;/oml:session_hash&gt;
  &lt;oml:valid_until&gt;2014-08-13 20:01:29&lt;/oml:valid_until&gt;
  &lt;oml:timezone&gt;Europe/Berlin&lt;/oml:timezone&gt;
&lt;/oml:authenticate&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>250: Please provide username</dt><dd>Please provide the username as a POST variable</dd></dl>
<dl><dt>251: Please provide password</dt><dd>Please provide the password (hashed as a MD5) as a POST variable</dd></dl>
<dl><dt>252: Authentication failed</dt><dd>The username and password did not match any record in the database. Please note that the password should be hashed using md5</dd></dl>
</div>

<!-- [END] Api function description: openml.authenticate -->



<!-- [START] Api function description: openml.authenticate.check -->

</div>
<div class="tab-pane" id="openml_authenticate_check">
<h3 id=openml_authenticate_check>openml.authenticate.check</h3>
<p><i>checks the validity of the session hash</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST username</code> (Required)</dt><dd>The username to be authenticated with</dd></dl>
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash to be checked</dd></dl>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:error xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:code&gt;292&lt;/oml:code&gt;
  &lt;oml:message&gt;Hash does not exist&lt;/oml:message&gt;
&lt;/oml:error&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>290: Username not provided</dt><dd>Please provide username</dd></dl>
<dl><dt>291: Hash not provided</dt><dd>Please provide hash to be checked</dd></dl>
<dl><dt>292: Hash does not exist</dt><dd>Hash does not exist, or is not owned by this user</dd></dl>
</div>

<!-- [END] Api function description: openml.authenticate.check -->




<!-- [START] Api function description: openml.data -->

</div>
<div class="tab-pane" id="openml_data">
<h3 id=openml_data>openml.data</h3>
<p><i>Returns a list with all dataset ids in OpenML that are ready to use</i></p>

<h5>Arguments</h5>
<div class="panel">
None
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:data xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:did&gt;1&lt;/oml:did&gt;
  &lt;oml:did&gt;2&lt;/oml:did&gt;
  &lt;oml:did&gt;3&lt;/oml:did&gt;
  &lt;oml:did&gt;4&lt;/oml:did&gt;
  &lt;oml:did&gt;5&lt;/oml:did&gt;
  &lt;oml:did&gt;6&lt;/oml:did&gt;
  &lt;oml:did&gt;7&lt;/oml:did&gt;
  &lt;oml:did&gt;8&lt;/oml:did&gt;
  &lt;oml:did&gt;9&lt;/oml:did&gt;
  &lt;oml:did&gt;10&lt;/oml:did&gt;
&lt;/oml:data&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>370: No datasets available</dt><dd>There are no valid datasets in the system. Please upload!</dd></dl>
</div>

<!-- [END] Api function description: openml.data -->



<!-- [START] Api function description: openml.data.description -->

</div>
<div class="tab-pane" id="openml_data_description">
<h3 id=openml_data_description>openml.data.description</h3>
<p><i>returns dataset descriptions in XML</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET data_id</code> (Required)</dt><dd>The dataset id</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.data.description</h5>

This XSD schema is applicable for both uploading and downloading data. <br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.data.upload.xsd">XSD Schema</a>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:data_set_description xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:id&gt;1&lt;/oml:id&gt;
  &lt;oml:name&gt;anneal&lt;/oml:name&gt;
  &lt;oml:version&gt;1&lt;/oml:version&gt;
  &lt;oml:description&gt;This is a preprocessed version of the &lt;a href="d/2"&gt;anneal.ORIG&lt;/a&gt; dataset. All missing values are threated as a nominal value with label '?'. (Quotes for clarity). The original version of this dataset can be found with the name anneal.ORIG.

1. Title of Database: Annealing Data

 2. Source Information: donated by David Sterling and Wray Buntine.

 3. Past Usage: unknown

 4. Relevant Information:
    -- Explanation: I suspect this was left by Ross Quinlan in 1987 at the
       4th Machine Learning Workshop.  I'd have to check with Jeff Schlimmer
       to double check this.
  &lt;/oml:description&gt;
  &lt;oml:format&gt;ARFF&lt;/oml:format&gt;
  &lt;oml:upload_date&gt;2014-04-06 23:19:20&lt;/oml:upload_date&gt;
  &lt;oml:licence&gt;public domain&lt;/oml:licence&gt;
  &lt;oml:url&gt;http://openml.liacs.nl/files/download/1/dataset_1_anneal.arff&lt;/oml:url&gt;
  &lt;oml:md5_checksum&gt;08dc9d6bf8e5196de0d56bfc89631931&lt;/oml:md5_checksum&gt;
&lt;/oml:data_set_description&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>110: Please provide data_id</dt><dd>Please provide data_id</dd></dl>
<dl><dt>111: Unknown dataset</dt><dd>Data set description with data_id was not found in the database</dd></dl>
</div>

<!-- [END] Api function description: openml.data.description -->



<!-- [START] Api function description: openml.data.upload -->

</div>
<div class="tab-pane" id="openml_data_upload">
<h3 id=openml_data_upload>openml.data.upload</h3>
<p><i>Uploads a dataset</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST description</code> (Required)</dt><dd>An XML file containing the data set description</dd></dl>
<dl><dt><code>POST dataset</code> (Required)</dt><dd>The dataset file to be stored on the server</dd></dl>
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash, provided by the server on authentication (1 hour valid)</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.data.upload</h5>

This XSD schema is applicable for both uploading and downloading data, hence some fields are not used.<br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.data.upload.xsd">XSD Schema</a>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>130: Problem with file uploading</dt><dd>There was a problem with the file upload</dd></dl>
<dl><dt>131: Problem validating uploaded description file</dt><dd>The XML description format does not meet the standards</dd></dl>
<dl><dt>132: Failed to move the files</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>133: Failed to make checksum of datafile</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>134: Failed to insert record in database</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>135: Please provide description xml</dt><dd>Please provide description xml</dd></dl>
<dl><dt>136: Error slot open</dt><dd>Error slot open, will be filled by not yet defined error</dd></dl>
<dl><dt>137: Please provide session_hash</dt><dd>In order to share content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>138: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>139: Combination name / version already exists</dt><dd>The combination of name and version of this dataset already exists. Leave version out for auto increment</dd></dl>
<dl><dt>140: Both dataset file and dataset url provided. Please provide only one</dt><dd>The system is confused since both a dataset file (post) and a dataset url (xml) are provided. Please remove one</dd></dl>
<dl><dt>141: Neither dataset file or dataset url are provided</dt><dd>Please provide either a dataset file as POST variable, xor a dataset url in the description XML</dd></dl>
<dl><dt>142: Error in processing arff file. Can be a syntax error, or the specified target feature does not exists</dt><dd>For now, we only check on arff files. If a dataset is claimed to be in such a format, and it can not be parsed, this error is returned.</dd></dl>
<dl><dt>143: Suggested target feature not legal</dt><dd>It is possible to suggest a default target feature (for predictive tasks). However, it should be provided in the data. </dd></dl>
</div>

<!-- [END] Api function description: openml.data.upload -->



<!-- [START] Api function description: openml.data.delete -->

</div>
<div class="tab-pane" id="openml_data_delete">
<h3 id=openml_data_delete>openml.data.delete</h3>
<p><i>Deletes a dataset. Can only be done if the dataset is not used in tasks</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash to authenticate with</dd></dl>
<dl><dt><code>POST data_id</code> (Required)</dt><dd>The dataset to be deleted</dd></dl>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>350: Please provide session_hash</dt><dd>In order to remove your content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>351: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>352: Dataset does not exists</dt><dd>The data id could not be linked to an existing dataset.</dd></dl>
<dl><dt>353: Dataset is not owned by you</dt><dd>The dataset was owned by another user. Hence you cannot delete it.</dd></dl>
<dl><dt>354: Dataset is in use by other content. Can not be deleted</dt><dd>The data is used in runs. Delete this other content before deleting this dataset. </dd></dl>
<dl><dt>355: Deleting dataset failed.</dt><dd>Deleting the dataset failed. Please contact support team.</dd></dl>
</div>

<!-- [END] Api function description: openml.data.delete -->



<!-- [START] Api function description: openml.data.licences -->

</div>
<div class="tab-pane" id="openml_data_licences">
<h3 id=openml_data_licences>openml.data.licences</h3>
<p><i>Gives a list of all data licences used in OpenML</i></p>

<h5>Arguments</h5>
<div class="panel">
None
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:data_licences xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:licences&gt;
    &lt;oml:licence&gt;public domain&lt;/oml:licence&gt;
    &lt;oml:licence&gt;UCI&lt;/oml:licence&gt;
  &lt;/oml:licences&gt;
&lt;/oml:data_licences&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
None
</div>

<!-- [END] Api function description: openml.data.licences -->



<!-- [START] Api function description: openml.data.features -->

</div>
<div class="tab-pane" id="openml_data_features">
<h3 id=openml_data_features>openml.data.features</h3>
<p><i>Returns the features (attributes) of a given dataset</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET data_id</code> (Required)</dt><dd>The dataset id</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.data.features</h5>

-<br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.data.features.xsd">XSD Schema</a>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:data_features xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;family&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;0&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;product-type&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;1&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;steel&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;2&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;carbon&lt;/oml:name&gt;
    &lt;oml:data_type&gt;numeric&lt;/oml:data_type&gt;
    &lt;oml:index&gt;3&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;hardness&lt;/oml:name&gt;
    &lt;oml:data_type&gt;numeric&lt;/oml:data_type&gt;
    &lt;oml:index&gt;4&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;temper_rolling&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;5&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;condition&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;6&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;formability&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;7&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;strength&lt;/oml:name&gt;
    &lt;oml:data_type&gt;numeric&lt;/oml:data_type&gt;
    &lt;oml:index&gt;8&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;non-ageing&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;9&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;surface-finish&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;10&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;surface-quality&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;11&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;enamelability&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;12&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;bc&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;13&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;bf&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;14&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;bt&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;15&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;bw%2Fme&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;16&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;bl&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;17&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;m&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;18&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;chrom&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;19&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;phos&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;20&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;cbond&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;21&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;marvi&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;22&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;exptl&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;23&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;ferro&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;24&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;corr&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;25&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;blue%2Fbright%2Fvarn%2Fclean&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;26&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;lustre&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;27&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;jurofm&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;28&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;s&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;29&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;p&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;30&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;shape&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;31&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;thick&lt;/oml:name&gt;
    &lt;oml:data_type&gt;numeric&lt;/oml:data_type&gt;
    &lt;oml:index&gt;32&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;width&lt;/oml:name&gt;
    &lt;oml:data_type&gt;numeric&lt;/oml:data_type&gt;
    &lt;oml:index&gt;33&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;len&lt;/oml:name&gt;
    &lt;oml:data_type&gt;numeric&lt;/oml:data_type&gt;
    &lt;oml:index&gt;34&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;oil&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;35&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;bore&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;36&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;packing&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;37&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
  &lt;oml:feature&gt;
    &lt;oml:name&gt;class&lt;/oml:name&gt;
    &lt;oml:data_type&gt;nominal&lt;/oml:data_type&gt;
    &lt;oml:index&gt;38&lt;/oml:index&gt;
  &lt;/oml:feature&gt;
&lt;/oml:data_features&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>270: Please provide data_id</dt><dd>Please provide data_id</dd></dl>
<dl><dt>271: Unknown dataset</dt><dd>Data set description with data_id was not found in the database</dd></dl>
<dl><dt>272: No features found</dt><dd>The registered dataset did not contain any features</dd></dl>
<dl><dt>273: Dataset not processed yet</dt><dd>The dataset was not processed yet, no features are available. Please wait for a few minutes. </dd></dl>
<dl><dt>274: Dataset processed with error</dt><dd>The feature extractor has run into an error while processing the dataset. Please check whether it is a valid supported file. </dd></dl>
</div>

<!-- [END] Api function description: openml.data.features -->



<!-- [START] Api function description: openml.data.qualities -->

</div>
<div class="tab-pane" id="openml_data_qualities">
<h3 id=openml_data_qualities>openml.data.qualities</h3>
<p><i>Returns the qualities (meta-features) of a given dataset</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET data_id</code> (Required)</dt><dd>The dataset id</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.data.qualities</h5>

-<br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.data.qualities.xsd">XSD Schema</a>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:data_qualities xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;ClassCount&lt;/oml:name&gt;
    &lt;oml:value&gt;6.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;ClassEntropy&lt;/oml:name&gt;
    &lt;oml:value&gt;-1.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;DecisionStumpAUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.822828217876869&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;DecisionStumpErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;22.828507795100222&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;DecisionStumpKappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.4503332218612649&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;DefaultAccuracy&lt;/oml:name&gt;
    &lt;oml:value&gt;0.76169265033408&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;DefaultTargetNominal&lt;/oml:name&gt;
    &lt;oml:value&gt;1&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;DefaultTargetNumerical&lt;/oml:name&gt;
    &lt;oml:value&gt;0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;Dimensionality&lt;/oml:name&gt;
    &lt;oml:value&gt;0.043429844097995544&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;EquivalentNumberOfAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;-12.218452122298707&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;IncompleteInstanceCount&lt;/oml:name&gt;
    &lt;oml:value&gt;0.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;InstanceCount&lt;/oml:name&gt;
    &lt;oml:value&gt;898.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.00001.AUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.7880182273644211&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.00001.ErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;12.249443207126948&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.00001.kappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.6371863763080279&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.0001.AUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.9270456597451915&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.0001.ErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;7.795100222717149&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.0001.kappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.7894969492796818&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.001.AUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.9270456597451915&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.001.ErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;7.795100222717149&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;J48.001.kappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.7894969492796818&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MajorityClassSize&lt;/oml:name&gt;
    &lt;oml:value&gt;684&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MaxNominalAttDistinctValues&lt;/oml:name&gt;
    &lt;oml:value&gt;10.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MeanAttributeEntropy&lt;/oml:name&gt;
    &lt;oml:value&gt;-1.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MeanKurtosisOfNumericAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;4.6070302750191185&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MeanMeansOfNumericAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;348.50426818856744&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MeanMutualInformation&lt;/oml:name&gt;
    &lt;oml:value&gt;0.0818434274645147&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MeanNominalAttDistinctValues&lt;/oml:name&gt;
    &lt;oml:value&gt;3.21875&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MeanSkewnessOfNumericAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;2.022468153229902&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MeanStdDevOfNumericAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;405.17326983790934&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MinNominalAttDistinctValues&lt;/oml:name&gt;
    &lt;oml:value&gt;2.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;MinorityClassSize&lt;/oml:name&gt;
    &lt;oml:value&gt;0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NBAUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.9594224101963532&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NBErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;13.808463251670378&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NBKappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.7185564873649677&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NegativePercentage&lt;/oml:name&gt;
    &lt;oml:value&gt;0.7616926503340757&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NoiseToSignalRatio&lt;/oml:name&gt;
    &lt;oml:value&gt;-13.218452122298709&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumAttributes&lt;/oml:name&gt;
    &lt;oml:value&gt;39.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumBinaryAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;19.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumMissingValues&lt;/oml:name&gt;
    &lt;oml:value&gt;0.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumNominalAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;32.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumNumericAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;6.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumberOfClasses&lt;/oml:name&gt;
    &lt;oml:value&gt;6&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumberOfFeatures&lt;/oml:name&gt;
    &lt;oml:value&gt;39&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumberOfInstances&lt;/oml:name&gt;
    &lt;oml:value&gt;898&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumberOfInstancesWithMissingValues&lt;/oml:name&gt;
    &lt;oml:value&gt;0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumberOfMissingValues&lt;/oml:name&gt;
    &lt;oml:value&gt;0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;NumberOfNumericFeatures&lt;/oml:name&gt;
    &lt;oml:value&gt;6&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;PercentageOfBinaryAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;0.48717948717948717&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;PercentageOfMissingValues&lt;/oml:name&gt;
    &lt;oml:value&gt;0.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;PercentageOfNominalAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;0.8205128205128205&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;PercentageOfNumericAtts&lt;/oml:name&gt;
    &lt;oml:value&gt;0.15384615384615385&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;PositivePercentage&lt;/oml:name&gt;
    &lt;oml:value&gt;0.0&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth1AUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.7597968469351692&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth1ErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;23.2739420935412&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth1Kappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.2894251628951225&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth2AUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.9666861764236521&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth2ErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;6.7928730512249444&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth2Kappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.832482668142716&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth3AUC&lt;/oml:name&gt;
    &lt;oml:value&gt;0.9924792906738309&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth3ErrRate&lt;/oml:name&gt;
    &lt;oml:value&gt;2.5612472160356345&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;REPTreeDepth3Kappa&lt;/oml:name&gt;
    &lt;oml:value&gt;0.9353873971951361&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;RandomTreeDepth1AUC_K=0&lt;/oml:name&gt;
    &lt;oml:value&gt;0.813070621364688&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;RandomTreeDepth2AUC_K=0&lt;/oml:name&gt;
    &lt;oml:value&gt;0.8907193338317052&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;RandomTreeDepth3AUC_K=0&lt;/oml:name&gt;
    &lt;oml:value&gt;0.9701947883881082&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
  &lt;oml:quality&gt;
    &lt;oml:name&gt;StdvNominalAttDistinctValues&lt;/oml:name&gt;
    &lt;oml:value&gt;2.0593512132112965&lt;/oml:value&gt;
  &lt;/oml:quality&gt;
&lt;/oml:data_qualities&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>360: Please provide data_id</dt><dd>Please provide data_id</dd></dl>
<dl><dt>361: Unknown dataset</dt><dd>Data set description with data_id was not found in the database</dd></dl>
<dl><dt>362: No qualities found</dt><dd>The registered dataset did not contain any calculated qualities</dd></dl>
<dl><dt>363: Dataset not processed yet</dt><dd>The dataset was not processed yet, no qualities are available. Please wait for a few minutes.</dd></dl>
<dl><dt>364: Dataset processed with error</dt><dd>The quality calculator has run into an error while processing the dataset. Please check whether it is a valid supported file. </dd></dl>
<dl><dt>365: Interval start or end illegal</dt><dd>There was a problem with the interval start or end.</dd></dl>
</div>

<!-- [END] Api function description: openml.data.qualities -->



<!-- [START] Api function description: openml.data.qualities.list -->

</div>
<div class="tab-pane" id="openml_data_qualities_list">
<h3 id=openml_data_qualities_list>openml.data.qualities.list</h3>
<p><i>Lists all data qualities that are used (i.e., are calculated for at least one dataset)</i></p>

<h5>Arguments</h5>
<div class="panel">
None
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:data_qualities_list xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:quality&gt;ClassCount&lt;/oml:quality&gt;
  &lt;oml:quality&gt;ClassEntropy&lt;/oml:quality&gt;
  &lt;oml:quality&gt;DecisionStumpAUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;DecisionStumpErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;DecisionStumpKappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;DefaultAccuracy&lt;/oml:quality&gt;
  &lt;oml:quality&gt;Dimensionality&lt;/oml:quality&gt;
  &lt;oml:quality&gt;EquivalentNumberOfAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;HoeffdingAdwin.changes&lt;/oml:quality&gt;
  &lt;oml:quality&gt;HoeffdingAdwin.warnings&lt;/oml:quality&gt;
  &lt;oml:quality&gt;HoeffdingDDM.changes&lt;/oml:quality&gt;
  &lt;oml:quality&gt;HoeffdingDDM.warnings&lt;/oml:quality&gt;
  &lt;oml:quality&gt;IncompleteInstanceCount&lt;/oml:quality&gt;
  &lt;oml:quality&gt;InstanceCount&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.00001.AUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.00001.ErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.00001.kappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.0001.AUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.0001.ErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.0001.kappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.001.AUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.001.ErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;J48.001.kappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MajorityClassSize&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MaxNominalAttDistinctValues&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MeanAttributeEntropy&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MeanKurtosisOfNumericAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MeanMeansOfNumericAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MeanMutualInformation&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MeanNominalAttDistinctValues&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MeanSkewnessOfNumericAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MeanStdDevOfNumericAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MinNominalAttDistinctValues&lt;/oml:quality&gt;
  &lt;oml:quality&gt;MinorityClassSize&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NBAUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NBErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NBKappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NaiveBayesAdwin.changes&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NaiveBayesAdwin.warnings&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NaiveBayesDdm.changes&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NaiveBayesDdm.warnings&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NegativePercentage&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NoiseToSignalRatio&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumAttributes&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumBinaryAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumMissingValues&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumNominalAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumNumericAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumberOfClasses&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumberOfFeatures&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumberOfInstances&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumberOfInstancesWithMissingValues&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumberOfMissingValues&lt;/oml:quality&gt;
  &lt;oml:quality&gt;NumberOfNumericFeatures&lt;/oml:quality&gt;
  &lt;oml:quality&gt;PercentageOfBinaryAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;PercentageOfMissingValues&lt;/oml:quality&gt;
  &lt;oml:quality&gt;PercentageOfNominalAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;PercentageOfNumericAtts&lt;/oml:quality&gt;
  &lt;oml:quality&gt;PositivePercentage&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth1AUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth1ErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth1Kappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth2AUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth2ErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth2Kappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth3AUC&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth3ErrRate&lt;/oml:quality&gt;
  &lt;oml:quality&gt;REPTreeDepth3Kappa&lt;/oml:quality&gt;
  &lt;oml:quality&gt;RandomTreeDepth1AUC_K=0&lt;/oml:quality&gt;
  &lt;oml:quality&gt;RandomTreeDepth2AUC_K=0&lt;/oml:quality&gt;
  &lt;oml:quality&gt;RandomTreeDepth3AUC_K=0&lt;/oml:quality&gt;
  &lt;oml:quality&gt;StdvNominalAttDistinctValues&lt;/oml:quality&gt;
&lt;/oml:data_qualities_list&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
None
</div>

<!-- [END] Api function description: openml.data.qualities.list -->




<!-- [START] Api function description: openml.task.search -->

</div>
<div class="tab-pane" id="openml_task_search">
<h3 id=openml_task_search>openml.task.search</h3>
<p><i>Returns the description of a task</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET task_id</code> (Required)</dt><dd>The task id</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.task.search</h5>

A task description<br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.task.search.xsd">XSD Schema</a>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:task xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:task_id&gt;1&lt;/oml:task_id&gt;
  &lt;oml:task_type&gt;Supervised Classification&lt;/oml:task_type&gt;
  &lt;oml:input name="source_data"&gt;
    &lt;oml:data_set&gt;
      &lt;oml:data_set_id&gt;1&lt;/oml:data_set_id&gt;
      &lt;oml:target_feature&gt;class&lt;/oml:target_feature&gt;
    &lt;/oml:data_set&gt;
  &lt;/oml:input&gt;
  &lt;oml:input name="estimation_procedure"&gt;
    &lt;oml:estimation_procedure&gt;
      &lt;oml:type&gt;crossvalidation&lt;/oml:type&gt;
      &lt;oml:data_splits_url&gt;http://openml.liacs.nl/api_splits/get/1/Task_1_splits.arff&lt;/oml:data_splits_url&gt;
      &lt;oml:parameter name="number_repeats"&gt;1&lt;/oml:parameter&gt;
      &lt;oml:parameter name="number_folds"&gt;10&lt;/oml:parameter&gt;
      &lt;oml:parameter name="percentage"/&gt;
      &lt;oml:parameter name="stratified_sampling"&gt;true&lt;/oml:parameter&gt;
    &lt;/oml:estimation_procedure&gt;
  &lt;/oml:input&gt;
  &lt;oml:input name="evaluation_measures"&gt;
    &lt;oml:evaluation_measures&gt;
      &lt;oml:evaluation_measure/&gt;
    &lt;/oml:evaluation_measures&gt;
  &lt;/oml:input&gt;
  &lt;oml:output name="predictions"&gt;
    &lt;oml:predictions&gt;
      &lt;oml:format&gt;ARFF&lt;/oml:format&gt;
      &lt;oml:feature name="repeat" type="integer"/&gt;
      &lt;oml:feature name="fold" type="integer"/&gt;
      &lt;oml:feature name="row_id" type="integer"/&gt;
      &lt;oml:feature name="confidence.classname" type="numeric"/&gt;
      &lt;oml:feature name="prediction" type="string"/&gt;
    &lt;/oml:predictions&gt;
  &lt;/oml:output&gt;
&lt;/oml:task&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>150: Please provide task_id</dt><dd>Please provide task_id</dd></dl>
<dl><dt>151: Unknown task</dt><dd>The task with this id was not found in the database</dd></dl>
</div>

<!-- [END] Api function description: openml.task.search -->



<!-- [START] Api function description: openml.task.evaluations -->

</div>
<div class="tab-pane" id="openml_task_evaluation">
<h3 id=openml_task_evaluations>openml.task.evaluations</h3>
<p><i>Returns the performance of flows on a given task</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET task_id</code> (Required)</dt><dd>the task id</dd></dl>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:task_evaluations xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:task_id/&gt;
  &lt;oml:task_name/&gt;
  &lt;oml:task_type_id/&gt;
  &lt;oml:input_data&gt;1&lt;/oml:input_data&gt;
  &lt;oml:estimation_procedure&gt;10-fold Crossvalidation&lt;/oml:estimation_procedure&gt;
  &lt;oml:evaluation&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>300: Please provide task_id</dt><dd>Please provide task_id</dd></dl>
<dl><dt>301: Unknown task</dt><dd>The task with this id was not found in the database</dd></dl>
</div>

<!-- [END] Api function description: openml.task.evaluations -->



<!-- [START] Api function description: openml.task.types -->

</div>
<div class="tab-pane" id="openml_task_types">
<h3 id=openml_task_types>openml.task.types</h3>
<p><i>Returns a list of all task types</i></p>

<h5>Arguments</h5>
<div class="panel">
None
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:task_types xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:task_type&gt;
    &lt;oml:id&gt;1&lt;/oml:id&gt;
    &lt;oml:name&gt;Supervised Classification&lt;/oml:name&gt;
    &lt;oml:description&gt;In supervised classification, you are given an input dataset in which instances are labeled with a certain class. The goal is to build a model that predicts the class for future unlabeled instances. The model is evaluated using a train-test procedure, e.g. cross-validation.&lt;br&gt;&lt;br&gt;

To make results by different users comparable, you are given the exact train-test folds to be used, and you need to return at least the predictions generated by your model for each of the test instances. OpenML will use these predictions to calculate a range of evaluation measures on the server.&lt;br&gt;&lt;br&gt;

You can also upload your own evaluation measures, provided that the code for doing so is available from the implementation used. For extremely large datasets, it may be infeasible to upload all predictions. In those cases, you need to compute and provide the evaluations yourself.&lt;br&gt;&lt;br&gt;

Optionally, you can upload the model trained on all the input data. There is no restriction on the file format, but please use a well-known format or PMML.&lt;/oml:description&gt;
    &lt;oml:creator&gt;Joaquin Vanschoren, Jan van Rijn, Luis Torgo, Bernd Bischl&lt;/oml:creator&gt;
  &lt;/oml:task_type&gt;
  &lt;oml:task_type&gt;
    &lt;oml:id&gt;2&lt;/oml:id&gt;
    &lt;oml:name&gt;Supervised Regression&lt;/oml:name&gt;
    &lt;oml:description&gt;Given a dataset with a numeric target and a set of train/test splits, e.g. generated by a cross-validation procedure, train a model and return the predictions of that model.&lt;/oml:description&gt;
    &lt;oml:creator&gt;Joaquin Vanschoren, Jan van Rijn, Luis Torgo, Bernd Bischl&lt;/oml:creator&gt;
  &lt;/oml:task_type&gt;
  &lt;oml:task_type&gt;
    &lt;oml:id&gt;3&lt;/oml:id&gt;
    &lt;oml:name&gt;Learning Curve&lt;/oml:name&gt;
    &lt;oml:description&gt;Given a dataset with a nominal target, various data samples of increasing size are defined. A model is build for each individual data sample; from this a learning curve can be drawn. &lt;/oml:description&gt;
    &lt;oml:creator&gt;Pavel Brazdil, Jan van Rijn, Joaquin Vanschoren&lt;/oml:creator&gt;
  &lt;/oml:task_type&gt;
  &lt;oml:task_type&gt;
    &lt;oml:id&gt;4&lt;/oml:id&gt;
    &lt;oml:name&gt;Supervised Data Stream Classification&lt;/oml:name&gt;
    &lt;oml:description&gt;Given a dataset with a nominal target, various data samples of increasing size are defined. A model is build for each individual data sample; from this a learning curve can be drawn.&lt;/oml:description&gt;
    &lt;oml:creator&gt;Geoffrey Holmes, Bernhard Pfahringer, Jan van Rijn, Joaquin Vanschoren&lt;/oml:creator&gt;
  &lt;/oml:task_type&gt;
&lt;/oml:task_types&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
None
</div>

<!-- [END] Api function description: openml.task.types -->



<!-- [START] Api function description: openml.task.types.search -->

</div>
<div class="tab-pane" id="openml_task_types_search">
<h3 id=openml_task_types_search>openml.task.types.search</h3>
<p><i>returns a definition (template) of a certain task type</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET task_type_id</code> (Required)</dt><dd>The task type id</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.task.types.search</h5>

A description of a task type<br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.task.types.search.xsd">XSD Schema</a>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:task_type xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:id&gt;1&lt;/oml:id&gt;
  &lt;oml:name&gt;Supervised Classification&lt;/oml:name&gt;
  &lt;oml:description&gt;In supervised classification, you are given an input dataset in which instances are labeled with a certain class. The goal is to build a model that predicts the class for future unlabeled instances. The model is evaluated using a train-test procedure, e.g. cross-validation.&lt;br&gt;&lt;br&gt;

To make results by different users comparable, you are given the exact train-test folds to be used, and you need to return at least the predictions generated by your model for each of the test instances. OpenML will use these predictions to calculate a range of evaluation measures on the server.&lt;br&gt;&lt;br&gt;

You can also upload your own evaluation measures, provided that the code for doing so is available from the implementation used. For extremely large datasets, it may be infeasible to upload all predictions. In those cases, you need to compute and provide the evaluations yourself.&lt;br&gt;&lt;br&gt;

Optionally, you can upload the model trained on all the input data. There is no restriction on the file format, but please use a well-known format or PMML.&lt;/oml:description&gt;
  &lt;oml:creator&gt;Joaquin Vanschoren, Jan van Rijn, Luis Torgo, Bernd Bischl&lt;/oml:creator&gt;
  &lt;oml:contributor&gt;Bo Gao&lt;/oml:contributor&gt;
  &lt;oml:contributor&gt; Simon Fischer&lt;/oml:contributor&gt;
  &lt;oml:contributor&gt; Venkatesh Umaashankar&lt;/oml:contributor&gt;
  &lt;oml:contributor&gt; Michael Berthold&lt;/oml:contributor&gt;
  &lt;oml:contributor&gt; Bernd Wiswedel &lt;/oml:contributor&gt;
  &lt;oml:contributor&gt;Patrick Winter&lt;/oml:contributor&gt;
  &lt;oml:date&gt;24-01-2013&lt;/oml:date&gt;
  &lt;oml:input name="source_data"&gt;
    &lt;oml:data_set&gt;
      &lt;oml:data_set_id&gt;[INPUT:source_data]&lt;/oml:data_set_id&gt;
      &lt;oml:target_feature&gt;[INPUT:target_feature]&lt;/oml:target_feature&gt;
    &lt;/oml:data_set&gt;
  &lt;/oml:input&gt;
  &lt;oml:input name="estimation_procedure"&gt;
    &lt;oml:estimation_procedure&gt;
      &lt;oml:type&gt;[LOOKUP:estimation_procedure.type]&lt;/oml:type&gt;
      &lt;oml:data_splits_url&gt;[CONSTANT:base_url]api_splits/get/[TASK:id]/Task_[TASK:id]_splits.arff&lt;/oml:data_splits_url&gt;
      &lt;oml:parameter name="number_repeats"&gt;[LOOKUP:estimation_procedure.repeats]&lt;/oml:parameter&gt;
      &lt;oml:parameter name="number_folds"&gt;[LOOKUP:estimation_procedure.folds]&lt;/oml:parameter&gt;
      &lt;oml:parameter name="percentage"&gt;[LOOKUP:estimation_procedure.percentage]&lt;/oml:parameter&gt;
      &lt;oml:parameter name="stratified_sampling"&gt;[LOOKUP:estimation_procedure.stratified_sampling]&lt;/oml:parameter&gt;
    &lt;/oml:estimation_procedure&gt;
  &lt;/oml:input&gt;
  &lt;oml:input name="evaluation_measures"&gt;
    &lt;oml:evaluation_measures&gt;
      &lt;oml:evaluation_measure&gt;[INPUT:evaluation_measures]&lt;/oml:evaluation_measure&gt;
    &lt;/oml:evaluation_measures&gt;
  &lt;/oml:input&gt;
  &lt;oml:output name="predictions"&gt;
    &lt;oml:predictions&gt;
      &lt;oml:format&gt;ARFF&lt;/oml:format&gt;
      &lt;oml:feature name="repeat" type="integer"/&gt;
      &lt;oml:feature name="fold" type="integer"/&gt;
      &lt;oml:feature name="row_id" type="integer"/&gt;
      &lt;oml:feature name="confidence.classname" type="numeric"/&gt;
      &lt;oml:feature name="prediction" type="string"/&gt;
    &lt;/oml:predictions&gt;
  &lt;/oml:output&gt;
&lt;/oml:task_type&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>240: Please provide task_type_id</dt><dd>Please provide task_type_id</dd></dl>
<dl><dt>241: Unknown task type</dt><dd>The task type with this id was not found in the database</dd></dl>
</div>

<!-- [END] Api function description: openml.task.types.search -->




<!-- [START] Api function description: openml.estimationprocedure.get -->

</div>
<div class="tab-pane" id="openml_estimationprocedure_get">
<h3 id=openml_estimationprocedure_get>openml.estimationprocedure.get</h3>
<p><i>returns the details of an estimation procedure</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET estimationprocedure_id</code> (Required)</dt><dd>The id of the estimation procedure</dd></dl>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:estimationprocedure xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:ttid&gt;1&lt;/oml:ttid&gt;
  &lt;oml:name&gt;10-fold Crossvalidation&lt;/oml:name&gt;
  &lt;oml:type&gt;crossvalidation&lt;/oml:type&gt;
  &lt;oml:repeats&gt;1&lt;/oml:repeats&gt;
  &lt;oml:folds&gt;10&lt;/oml:folds&gt;
  &lt;oml:stratified_sampling&gt;true&lt;/oml:stratified_sampling&gt;
&lt;/oml:estimationprocedure&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>440: Please provide estimationprocedure_id</dt><dd>Please provide estimationprocedure_id</dd></dl>
<dl><dt>441: estimationprocedure_id not valid</dt><dd>Please provide a valid estimationprocedure_id</dd></dl>
</div>

<!-- [END] Api function description: openml.estimationprocedure.get -->




<!-- [START] Api function description: openml.implementation.get -->

</div>
<div class="tab-pane" id="openml_implementation_get">
<h3 id=openml_implementation_get>openml.implementation.get</h3>
<p><i>Returns the description of an implementation (flow)</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET implementation_id</code> (Required)</dt><dd>The id of the implementation</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.implementation.get</h5>

This XSD schema is applicable for both uploading and downloading a implementation. <br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.implementation.upload.xsd">XSD Schema</a>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:implementation xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:id&gt;100&lt;/oml:id&gt;
  &lt;oml:uploader&gt;1&lt;/oml:uploader&gt;
  &lt;oml:name&gt;weka.J48&lt;/oml:name&gt;
  &lt;oml:version&gt;2&lt;/oml:version&gt;
  &lt;oml:external_version&gt;Weka_3.7.5_9117&lt;/oml:external_version&gt;
  &lt;oml:description&gt;Ross Quinlan (1993). C4.5: Programs for Machine Learning. Morgan Kaufmann Publishers, San Mateo, CA.&lt;/oml:description&gt;
  &lt;oml:upload_date&gt;2014-04-23 18:00:36&lt;/oml:upload_date&gt;
  &lt;oml:language&gt;English&lt;/oml:language&gt;
  &lt;oml:dependencies&gt;Weka_3.7.5&lt;/oml:dependencies&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;A&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Laplace smoothing for predicted probabilities.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;B&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Use binary splits only.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;C&lt;/oml:name&gt;
    &lt;oml:data_type&gt;option&lt;/oml:data_type&gt;
    &lt;oml:default_value&gt;0.25&lt;/oml:default_value&gt;
    &lt;oml:description&gt;Set confidence threshold for pruning.
	(default 0.25)&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;J&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Do not use MDL correction for info gain on numeric attributes.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;L&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Do not clean up after the tree has been built.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;M&lt;/oml:name&gt;
    &lt;oml:data_type&gt;option&lt;/oml:data_type&gt;
    &lt;oml:default_value&gt;2&lt;/oml:default_value&gt;
    &lt;oml:description&gt;Set minimum number of instances per leaf.
	(default 2)&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;N&lt;/oml:name&gt;
    &lt;oml:data_type&gt;option&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Set number of folds for reduced error
	pruning. One fold is used as pruning set.
	(default 3)&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;O&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Do not collapse tree.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;Q&lt;/oml:name&gt;
    &lt;oml:data_type&gt;option&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Seed for random data shuffling (default 1).&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;R&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Use reduced error pruning.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;S&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Don't perform subtree raising.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
  &lt;oml:parameter&gt;
    &lt;oml:name&gt;U&lt;/oml:name&gt;
    &lt;oml:data_type&gt;flag&lt;/oml:data_type&gt;
    &lt;oml:default_value/&gt;
    &lt;oml:description&gt;Use unpruned tree.&lt;/oml:description&gt;
  &lt;/oml:parameter&gt;
&lt;/oml:implementation&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>180: Please provide implementation_id</dt><dd>Please provide implementation_id</dd></dl>
<dl><dt>181: Unknown implementation</dt><dd>The implementation with this ID was not found in the database</dd></dl>
</div>

<!-- [END] Api function description: openml.implementation.get -->



<!-- [START] Api function description: openml.implementation.exists -->

</div>
<div class="tab-pane" id="openml_implementation_exists">
<h3 id=openml_implementation_exists>openml.implementation.exists</h3>
<p><i>A utility function that checks whether an implementation already exists. Mainly used by workbenches</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET name</code> (Required)</dt><dd>The name of the implementation</dd></dl>
<dl><dt><code>GET external_version</code> (Required)</dt><dd>The (workbench) version of the implementation. This is generally based on conventions per workbench</dd></dl>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:error xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:code&gt;180&lt;/oml:code&gt;
  &lt;oml:message&gt;Please provide implementation_id&lt;/oml:message&gt;
&lt;/oml:error&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>330: Mandatory fields not present.</dt><dd>Please provide one of the following mandatory field combination: name and external_version.</dd></dl>
</div>

<!-- [END] Api function description: openml.implementation.exists -->



<!-- [START] Api function description: openml.implementation.upload -->

</div>
<div class="tab-pane" id="openml_implementation_upload">
<h3 id=openml_implementation_upload>openml.implementation.upload</h3>
<p><i>Uploads an implementation to OpenML</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST description</code> (Required)</dt><dd>An XML file containing the implementation meta data</dd></dl>
<dl><dt><code>POST source</code></dt><dd>The source code of the implementation. If multiple files, please zip them. Either source or binary is required.</dd></dl>
<dl><dt><code>POST binary</code></dt><dd>The binary of the implementation. If multiple files, please zip them. Either source or binary is required.</dd></dl>
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash, provided by the server on authentication (1 hour valid)</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.implementation.upload</h5>

This XSD schema is applicable for both uploading and downloading a implementation. (Some fields are ignored)<br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.implementation.upload.xsd">XSD Schema</a>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>160: Error in file uploading</dt><dd>There was a problem with the file upload</dd></dl>
<dl><dt>161: Please provide description xml</dt><dd>Please provide description xml</dd></dl>
<dl><dt>162: Please provide source or binary file</dt><dd>Please provide source or binary file. It is also allowed to upload both</dd></dl>
<dl><dt>163: Problem validating uploaded description file</dt><dd>The XML description format does not meet the standards</dd></dl>
<dl><dt>164: Implementation already stored in database</dt><dd>Please change name or version number</dd></dl>
<dl><dt>165: Failed to move the files</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>166: Failed to add implementation to database</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>167: Illegal files uploaded</dt><dd>An non required file was uploaded.</dd></dl>
<dl><dt>168: The provided md5 hash equals not the server generated md5 hash of the file</dt><dd>The provided md5 hash equals not the server generated md5 hash of the file</dd></dl>
<dl><dt>169: Please provide session_hash</dt><dd>In order to share content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>170: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>171: Implementation already exists</dt><dd>This implementation is already in the database</dd></dl>
</div>

<!-- [END] Api function description: openml.implementation.upload -->



<!-- [START] Api function description: openml.implementation.owned -->

</div>
<div class="tab-pane" id="openml_implementation_owned">
<h3 id=openml_implementation_owned>openml.implementation.owned</h3>
<p><i>Returns a list of all implementations owned by the user</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash, provided by the server on authentication (1 hour valid)</dd></dl>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>310: Please provide session_hash</dt><dd>In order to view private content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>311: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>312: No implementations owned by this used</dt><dd>The user has no implementations linked to his account</dd></dl>
</div>

<!-- [END] Api function description: openml.implementation.owned -->



<!-- [START] Api function description: openml.implementation.delete -->

</div>
<div class="tab-pane" id="openml_implementation_delete">
<h3 id=openml_implementation_delete>openml.implementation.delete</h3>
<p><i>Deletes an implementation (can only be done to owned implementations)</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash, provided by the server on authentication (1 hour valid)</dd></dl>
<dl><dt><code>POST implementation_id</code> (Required)</dt><dd>The id of the implementation to delete</dd></dl>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>320: Please provide session_hash</dt><dd>In order to remove your content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>321: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>322: Implementation does not exists</dt><dd>The implementation id could not be linked to an existing implementation.</dd></dl>
<dl><dt>323: Implementation is not owned by you</dt><dd>The implementation was owned by another user. Hence you cannot delete it.</dd></dl>
<dl><dt>324: Implementation is in use by other content. Can not be deleted</dt><dd>The implementation is used in runs, evaluations or as component of another implementation. Delete this other content before deleting this implementation. </dd></dl>
<dl><dt>325: Deleting implementation failed.</dt><dd>Deleting the implementation failed. Please contact support team. </dd></dl>
</div>

<!-- [END] Api function description: openml.implementation.delete -->



<!-- [START] Api function description: openml.implementation.licences -->

</div>
<div class="tab-pane" id="openml_implementation_licence">
<h3 id=openml_implementation_licences>openml.implementation.licences</h3>
<p><i>Returns a list of all used licences in the implementations</i></p>

<h5>Arguments</h5>
<div class="panel">
None
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:implementation_licences xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:licences&gt;
    &lt;oml:licence&gt;public domain&lt;/oml:licence&gt;
    &lt;oml:licence&gt;NA&lt;/oml:licence&gt;
  &lt;/oml:licences&gt;
&lt;/oml:implementation_licences&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
None
</div>

<!-- [END] Api function description: openml.implementation.licences -->




<!-- [START] Api function description: openml.evaluation.measures -->

</div>
<div class="tab-pane" id="openml_evaluation_measures">
<h3 id=openml_evaluation_measures>openml.evaluation.measures</h3>
<p><i>Returns a list of all evaluation measures</i></p>

<h5>Arguments</h5>
<div class="panel">
None
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:evaluation_measures xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:measures&gt;
    &lt;oml:measure&gt;area_under_roc_curve&lt;/oml:measure&gt;
    &lt;oml:measure&gt;average_cost&lt;/oml:measure&gt;
    &lt;oml:measure&gt;build_cpu_time&lt;/oml:measure&gt;
    &lt;oml:measure&gt;build_memory&lt;/oml:measure&gt;
    &lt;oml:measure&gt;class_complexity&lt;/oml:measure&gt;
    &lt;oml:measure&gt;class_complexity_gain&lt;/oml:measure&gt;
    &lt;oml:measure&gt;confusion_matrix&lt;/oml:measure&gt;
    &lt;oml:measure&gt;correlation_coefficient&lt;/oml:measure&gt;
    &lt;oml:measure&gt;f_measure&lt;/oml:measure&gt;
    &lt;oml:measure&gt;kappa&lt;/oml:measure&gt;
    &lt;oml:measure&gt;kb_relative_information_score&lt;/oml:measure&gt;
    &lt;oml:measure&gt;kohavi_wolpert_bias_squared&lt;/oml:measure&gt;
    &lt;oml:measure&gt;kohavi_wolpert_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;kohavi_wolpert_sigma_squared&lt;/oml:measure&gt;
    &lt;oml:measure&gt;kohavi_wolpert_variance&lt;/oml:measure&gt;
    &lt;oml:measure&gt;kononenko_bratko_information_score&lt;/oml:measure&gt;
    &lt;oml:measure&gt;matthews_correlation_coefficient&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_absolute_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_class_complexity&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_class_complexity_gain&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_f_measure&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_kononenko_bratko_information_score&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_precision&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_prior_absolute_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_prior_class_complexity&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_recall&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_weighted_area_under_roc_curve&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_weighted_f_measure&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_weighted_precision&lt;/oml:measure&gt;
    &lt;oml:measure&gt;mean_weighted_recall&lt;/oml:measure&gt;
    &lt;oml:measure&gt;number_of_instances&lt;/oml:measure&gt;
    &lt;oml:measure&gt;os_information&lt;/oml:measure&gt;
    &lt;oml:measure&gt;precision&lt;/oml:measure&gt;
    &lt;oml:measure&gt;predictive_accuracy&lt;/oml:measure&gt;
    &lt;oml:measure&gt;prior_class_complexity&lt;/oml:measure&gt;
    &lt;oml:measure&gt;prior_entropy&lt;/oml:measure&gt;
    &lt;oml:measure&gt;ram_hours&lt;/oml:measure&gt;
    &lt;oml:measure&gt;recall&lt;/oml:measure&gt;
    &lt;oml:measure&gt;relative_absolute_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;root_mean_prior_squared_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;root_mean_squared_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;root_relative_squared_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;run_cpu_time&lt;/oml:measure&gt;
    &lt;oml:measure&gt;run_memory&lt;/oml:measure&gt;
    &lt;oml:measure&gt;run_virtual_memory&lt;/oml:measure&gt;
    &lt;oml:measure&gt;scimark_benchmark&lt;/oml:measure&gt;
    &lt;oml:measure&gt;single_point_area_under_roc_curve&lt;/oml:measure&gt;
    &lt;oml:measure&gt;total_cost&lt;/oml:measure&gt;
    &lt;oml:measure&gt;unclassified_instance_count&lt;/oml:measure&gt;
    &lt;oml:measure&gt;webb_bias&lt;/oml:measure&gt;
    &lt;oml:measure&gt;webb_error&lt;/oml:measure&gt;
    &lt;oml:measure&gt;webb_variance&lt;/oml:measure&gt;
  &lt;/oml:measures&gt;
&lt;/oml:evaluation_measures&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
None
</div>

<!-- [END] Api function description: openml.evaluation.measures -->




<!-- [START] Api function description: openml.run.get -->

</div>
<div class="tab-pane" id="openml_run_get">
<h3 id=openml_run_get>openml.run.get</h3>
<p><i>Returns the details of a specific run</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET run_id</code> (Required)</dt><dd>The id of the run</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.run.get</h5>

This XSD schema is applicable for both uploading and downloading run details. <br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.run.upload.xsd">XSD Schema</a>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:run xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:run_id&gt;1&lt;/oml:run_id&gt;
  &lt;oml:uploader&gt;1&lt;/oml:uploader&gt;
  &lt;oml:task_id&gt;68&lt;/oml:task_id&gt;
  &lt;oml:implementation_id&gt;61&lt;/oml:implementation_id&gt;
  &lt;oml:setup_id&gt;6&lt;/oml:setup_id&gt;
  &lt;oml:setup_string&gt;weka.classifiers.trees.REPTree -- -M 2 -V 0.001 -N 3 -S 1 -L -1 -I 0.0&lt;/oml:setup_string&gt;
  &lt;oml:parameter_setting&gt;
    &lt;oml:name&gt;61_I&lt;/oml:name&gt;
    &lt;oml:value&gt;0.0&lt;/oml:value&gt;
  &lt;/oml:parameter_setting&gt;
  &lt;oml:parameter_setting&gt;
    &lt;oml:name&gt;61_L&lt;/oml:name&gt;
    &lt;oml:value&gt;-1&lt;/oml:value&gt;
  &lt;/oml:parameter_setting&gt;
  &lt;oml:parameter_setting&gt;
    &lt;oml:name&gt;61_M&lt;/oml:name&gt;
    &lt;oml:value&gt;2&lt;/oml:value&gt;
  &lt;/oml:parameter_setting&gt;
  &lt;oml:parameter_setting&gt;
    &lt;oml:name&gt;61_N&lt;/oml:name&gt;
    &lt;oml:value&gt;3&lt;/oml:value&gt;
  &lt;/oml:parameter_setting&gt;
  &lt;oml:parameter_setting&gt;
    &lt;oml:name&gt;61_S&lt;/oml:name&gt;
    &lt;oml:value&gt;1&lt;/oml:value&gt;
  &lt;/oml:parameter_setting&gt;
  &lt;oml:parameter_setting&gt;
    &lt;oml:name&gt;61_V&lt;/oml:name&gt;
    &lt;oml:value&gt;0.001&lt;/oml:value&gt;
  &lt;/oml:parameter_setting&gt;
  &lt;oml:input_data&gt;
    &lt;oml:dataset&gt;
      &lt;oml:did&gt;9&lt;/oml:did&gt;
      &lt;oml:name&gt;autos&lt;/oml:name&gt;
      &lt;oml:url&gt;http://openml.liacs.nl/files/download/9/dataset_9_autos.arff&lt;/oml:url&gt;
    &lt;/oml:dataset&gt;
  &lt;/oml:input_data&gt;
  &lt;oml:output_data&gt;
    &lt;oml:file&gt;
      &lt;oml:did&gt;63&lt;/oml:did&gt;
      &lt;oml:name&gt;description&lt;/oml:name&gt;
      &lt;oml:url&gt;http://openml.liacs.nl/data/download/63/weka_generated_run5258986433356798974.xml&lt;/oml:url&gt;
    &lt;/oml:file&gt;
    &lt;oml:file&gt;
      &lt;oml:did&gt;64&lt;/oml:did&gt;
      &lt;oml:name&gt;predictions&lt;/oml:name&gt;
      &lt;oml:url&gt;http://openml.liacs.nl/data/download/64/weka_generated_predictions5823074444642592781.arff&lt;/oml:url&gt;
    &lt;/oml:file&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;area_under_roc_curve&lt;/oml:name&gt;
      &lt;oml:implementation&gt;4&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.786876&lt;/oml:value&gt;
      &lt;oml:array_data&gt;[�,0.976312,0.861162,0.815581,0.745833,0.756304,0.75239]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;confusion_matrix&lt;/oml:name&gt;
      &lt;oml:implementation&gt;10&lt;/oml:implementation&gt;
      &lt;oml:array_data&gt;[[0,0,0,0,0,0,0],[0,3,135,12,0,0,0],[0,31,698,178,161,18,14],[0,0,160,2464,510,198,18],[0,0,105,886,1398,127,184],[0,0,56,578,317,532,117],[0,0,68,237,440,267,338]]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;f_measure&lt;/oml:name&gt;
      &lt;oml:implementation&gt;12&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.511938&lt;/oml:value&gt;
      &lt;oml:array_data&gt;[0,0.032609,0.601206,0.639585,0.505972,0.388038,0.334488]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;kappa&lt;/oml:name&gt;
      &lt;oml:implementation&gt;13&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.373111&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;kb_relative_information_score&lt;/oml:name&gt;
      &lt;oml:implementation&gt;14&lt;/oml:implementation&gt;
      &lt;oml:value&gt;4242.098053&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;mean_absolute_error&lt;/oml:name&gt;
      &lt;oml:implementation&gt;21&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.149488&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;mean_prior_absolute_error&lt;/oml:name&gt;
      &lt;oml:implementation&gt;27&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.220919&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;number_of_instances&lt;/oml:name&gt;
      &lt;oml:implementation&gt;34&lt;/oml:implementation&gt;
      &lt;oml:value&gt;10250&lt;/oml:value&gt;
      &lt;oml:array_data&gt;[0,150,1100,3350,2700,1600,1350]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;os_information&lt;/oml:name&gt;
      &lt;oml:implementation&gt;53&lt;/oml:implementation&gt;
      &lt;oml:array_data&gt;[ Oracle Corporation, 1.7.0_51, amd64, Linux, 3.7.10-1.28-desktop ]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;precision&lt;/oml:name&gt;
      &lt;oml:implementation&gt;35&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.516877&lt;/oml:value&gt;
      &lt;oml:array_data&gt;[0,0.088235,0.571195,0.565786,0.494692,0.465849,0.503726]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;predictive_accuracy&lt;/oml:name&gt;
      &lt;oml:implementation&gt;36&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.530049&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;prior_entropy&lt;/oml:name&gt;
      &lt;oml:implementation&gt;38&lt;/oml:implementation&gt;
      &lt;oml:value&gt;2.326811&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;recall&lt;/oml:name&gt;
      &lt;oml:implementation&gt;39&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.530049&lt;/oml:value&gt;
      &lt;oml:array_data&gt;[0,0.02,0.634545,0.735522,0.517778,0.3325,0.25037]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;relative_absolute_error&lt;/oml:name&gt;
      &lt;oml:implementation&gt;40&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.676663&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;root_mean_prior_squared_error&lt;/oml:name&gt;
      &lt;oml:implementation&gt;41&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.331758&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;root_mean_squared_error&lt;/oml:name&gt;
      &lt;oml:implementation&gt;42&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.303746&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;root_relative_squared_error&lt;/oml:name&gt;
      &lt;oml:implementation&gt;43&lt;/oml:implementation&gt;
      &lt;oml:value&gt;0.915564&lt;/oml:value&gt;
    &lt;/oml:evaluation&gt;
    &lt;oml:evaluation&gt;
      &lt;oml:name&gt;scimark_benchmark&lt;/oml:name&gt;
      &lt;oml:implementation&gt;55&lt;/oml:implementation&gt;
      &lt;oml:value&gt;1973.4091512218106&lt;/oml:value&gt;
      &lt;oml:array_data&gt;[ 1262.1133708514062, 1630.9393838458018, 932.0675956790141, 1719.5408190761134, 4322.384586656718 ]&lt;/oml:array_data&gt;
    &lt;/oml:evaluation&gt;
  &lt;/oml:output_data&gt;
&lt;/oml:run&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>220: Please provide run_id</dt><dd>In order to view run details, please provide run_id</dd></dl>
<dl><dt>221: Run not found</dt><dd>The run id was invalid, run not found</dd></dl>
</div>

<!-- [END] Api function description: openml.run.get -->



<!-- [START] Api function description: openml.run.upload -->


</div>
<div class="tab-pane" id="openml_run_upload">
<h3 id=openml_run_upload>openml.run.upload</h3>
<p><i>Uploads the results of a run to OpenML</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST description</code> (Required)</dt><dd>An XML file describing the run</dd></dl>
<dl><dt><code>POST &lt;output_files&gt;</code> (Required)</dt><dd>All output files that should be generated by the run, as described in the task xml. For supervised classification tasks, this is typically a file containing predictions</dd></dl>
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash, provided by the server on authentication (1 hour valid)</dd></dl>
</div>
<h5>Schema's</h5>
<div class="panel panel-info">
<h5>openml.run.upload</h5>

This XSD schema is applicable for both uploading and downloading run details. <br/>
<a type="button" class="btn btn-primary" href="https://github.com/openml/website/blob/master/openml_OS/views/pages/rest_api/xsd/openml.run.upload.xsd">XSD Schema</a>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>200: Please provide session_hash</dt><dd>In order to share content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>201: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>202: Please provide run xml</dt><dd>Please provide run xml</dd></dl>
<dl><dt>203: Could not validate run xml by xsd</dt><dd>Please double check that the xml is valid. </dd></dl>
<dl><dt>204: Unknown task</dt><dd>The task with this id was not found in the database</dd></dl>
<dl><dt>205: Unknown implementation</dt><dd>The implementation with this id was not found in the database</dd></dl>
<dl><dt>206: Invalid number of files</dt><dd>The number of uploaded files did not match the number of files expected for this task type</dd></dl>
<dl><dt>207: File upload failed</dt><dd>One of the files uploaded has a problem</dd></dl>
<dl><dt>208: Error inserting setup record</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>210: Unable to store run</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>211: Dataset not in databse</dt><dd>One of the datasets of this task was not included in database, please contact api administrators</dd></dl>
<dl><dt>212: Unable to store file</dt><dd>Internal server error, please contact api administrators</dd></dl>
<dl><dt>213: Parameter in run xml unknown</dt><dd>One of the parameters provided in the run xml is not registered as parameter for the implementation nor its components</dd></dl>
<dl><dt>214: Unable to store input setting</dt><dd>Internal server error, please contact API support team</dd></dl>
<dl><dt>215: Unable to evaluate predictions</dt><dd>Internal server error, please contact API support team</dd></dl>
<dl><dt>216: Error thrown by Java Application</dt><dd>The Java application has thrown an error. Additional information field is provided</dd></dl>
<dl><dt>217: Error processing output data: unknown or inconsistent evaluation measure</dt><dd>One of the provided evaluation measures could not be matched with a record in the math_function / implementation table.</dd></dl>
<dl><dt>218: Wrong implementation associated with run: this implements a math_function</dt><dd>The implementation implements a math_function, which is unable to generate predictions. Please select another implementation. </dd></dl>
<dl><dt>219: Error reading the XML document</dt><dd>The xml description file could not be verified. </dd></dl>
</div>

<!-- [END] Api function description: openml.run.upload -->



<!-- [START] Api function description: openml.run.delete -->


</div>
<div class="tab-pane" id="openml_run_delete">
<h3 id=openml_run_delete>openml.run.delete</h3>
<p><i>Deletes a run from the database. </i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST run_id</code> (Required)</dt><dd>The id of the run to be deleted</dd></dl>
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash to be checked</dd></dl>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>390: Please provide session_hash</dt><dd>In order to remove your content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>391: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>392: Run does not exists</dt><dd>The run id could not be linked to an existing run.</dd></dl>
<dl><dt>393: Run is not owned by you</dt><dd>The run was owned by another user. Hence you cannot delete it.</dd></dl>
<dl><dt>394: Deleting run failed.</dt><dd>Deleting the run failed. Please contact support team. </dd></dl>
</div>

<!-- [END] Api function description: openml.run.delete -->




<!-- [START] Api function description: openml.job.get -->


</div>
<div class="tab-pane" id="openml_job_get">
<h3 id=openml_job_get>openml.job.get</h3>
<p><i>Retrieves a job that is scheduled and not yet performed</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>GET workbench</code> (Required)</dt><dd>The name of the workbench that is performing the job</dd></dl>
<dl><dt><code>GET task_type_id</code> (Required)</dt><dd>The task type of which the job should be.</dd></dl>
</div>
<h5>Example Response</h5>
<div class='codehighlight'>
<pre class='pre-scrollable'>
<code class='html'>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;oml:job xmlns:oml="http://openml.org/openml"&gt;
  &lt;oml:learner&gt;weka.classifiers.rules.Ridor -- -F 3 -S 1 -N 2.0&lt;/oml:learner&gt;
  &lt;oml:task_id&gt;1&lt;/oml:task_id&gt;
&lt;/oml:job&gt;

</code>
</pre>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>340: Please provide workbench and task type.</dt><dd>Please provide workbench and task type.</dd></dl>
<dl><dt>341: No jobs available.</dt><dd>There are no jobs that need to be executed.</dd></dl>
</div>

<!-- [END] Api function description: openml.job.get -->




<!-- [START] Api function description: openml.setup.delete -->


</div>
<div class="tab-pane" id="openml_setup_delete">
<h3 id=openml_setup_delete>openml.setup.delete</h3>
<p><i>Removes a setup from the database. Can only be done if no runs are performed on this setup.</i></p>

<h5>Arguments</h5>
<div class="panel">
<dl><dt><code>POST setup_id</code> (Required)</dt><dd>The id of the setup that should be removed</dd></dl>
<dl><dt><code>POST session_hash</code> (Required)</dt><dd>The session hash to be checked</dd></dl>
</div>
<h5>Error codes</h5>
<div class='panel panel-danger'>
<dl><dt>400: Please provide session_hash</dt><dd>In order to remove your content, please authenticate (openml.authenticate) and provide session_hash</dd></dl>
<dl><dt>401: Authentication failed</dt><dd>The session_hash was not valid. Please try to login again, or contact api administrators</dd></dl>
<dl><dt>402: Setup does not exists</dt><dd>The setup id could not be linked to an existing setup.</dd></dl>
<dl><dt>404: Setup is in use by other content (runs, schedules, etc). Can not be deleted</dt><dd>The setup is used in runs. Delete this other content before deleting this setup. </dd></dl>
<dl><dt>405: Deleting setup failed.</dt><dd>Deleting the setup failed. Please contact support team. </dd></dl>
</div>
</div>
<!-- [END] Api function description: openml.setup.delete -->
