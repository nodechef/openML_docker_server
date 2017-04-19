<oml:setup_parameters xmlns:oml="http://openml.org/openml">
  <oml:flow_id><?php echo $setup->implementation_id; ?></oml:flow_id>
<?php foreach($parameters as $p): ?>
	<oml:parameter>
		<oml:full_name><?php echo htmlspecialchars($p->fullName); ?></oml:full_name>
		<oml:parameter_name><?php echo htmlspecialchars($p->name); ?></oml:parameter_name>
		<oml:data_type><?php echo htmlspecialchars($p->dataType); ?></oml:data_type>
		<oml:default_value><?php echo htmlspecialchars($p->defaultValue); ?></oml:default_value>
		<oml:value><?php echo htmlspecialchars($p->value); ?></oml:value>
	</oml:parameter>
<?php endforeach; ?>
</oml:setup_parameters>
