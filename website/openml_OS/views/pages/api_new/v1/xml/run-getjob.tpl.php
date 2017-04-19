<oml:job xmlns:oml="http://openml.org/openml">
  <?php if( $source != false ): ?>
    <oml:learner><?php echo htmlspecialchars($source->setup_string); ?></oml:learner>
    <oml:task_id><?php echo htmlspecialchars($source->task_id); ?></oml:task_id>
  <?php endif; ?>
</oml:job>
