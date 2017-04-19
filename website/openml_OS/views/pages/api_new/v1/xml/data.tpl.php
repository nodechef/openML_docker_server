<oml:data xmlns:oml="http://openml.org/openml">
  <?php foreach( $datasets as $data ): ?>
  <oml:dataset>
    <oml:did><?php echo $data->did; ?></oml:did>
    <oml:name><?php echo $data->name; ?></oml:name>
    <oml:version><?php echo $data->version; ?></oml:version>
    <oml:status><?php echo $data->status; ?></oml:status>
    <oml:format><?php echo $data->format; ?></oml:format>
    <?php foreach( $data->qualities as $quality => $value ): ?>
    <oml:quality name="<?php echo $quality; ?>"><?php echo $value; ?></oml:quality>
    <?php endforeach; ?>
    <?php if( property_exists( $data, 'tags' ) ): foreach( $data->tags as $tag ): ?>
      <oml:tag><?php echo $tag; ?></oml:tag>
    <?php endforeach; endif; ?>
  </oml:dataset>
  <?php endforeach; ?>
</oml:data>
