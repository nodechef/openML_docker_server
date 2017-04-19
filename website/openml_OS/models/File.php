<?php
class File extends Community {
  
  function __construct() {
    parent::__construct();
    $this->table = 'file';
    $this->id_column = 'id';
    $this->deleted_activated = 'id IS NOT NULL ';
  }
  
  function register_uploaded_file($file, $to_folder, $creator_id, $type, $access_policy = 'public') {
    $md5_hash = md5_file($file['tmp_name']);
    if($md5_hash === false) {
      return false;
    }
    
    create_dir( DATA_PATH . $to_folder );
    $newName = getAvailableName( DATA_PATH . $to_folder, $file['name'] );
    
    if( move_uploaded_file( $file['tmp_name'], DATA_PATH . $to_folder . $newName ) === false ) {
      return false;
    }
    
    $file_record = array(
      'creator' => $creator_id,
      'creation_date' => now(),
      'filepath' => $to_folder . $newName,
      'filesize' => filesize( DATA_PATH . $to_folder . $newName ),
      'filename_original' => $file['name'],
      'extension' => pathinfo($file['name'], PATHINFO_EXTENSION),
      'mime_type' => $file['type'],
      'md5_hash' => $md5_hash,
      'type' => $type,
      'access_policy' => $access_policy
    );
 
    $file_id = $this->insert($file_record);
    return $file_id;
  }
  
  function register_created_file($folder, $file, $creator_id, $type, $mime_type, $access_policy = 'public') {
    $full_path = DATA_PATH . $folder . $file;
    $md5_hash = md5_file($full_path);
    if($md5_hash === false) {
      return false;
    }
    $file_record = array(
      'creator' => $creator_id,
      'creation_date' => now(),
      'filepath' => $folder . $file,
      'filesize' => filesize($full_path),
      'filename_original' => $file,
      'extension' => pathinfo($file, PATHINFO_EXTENSION),
      'mime_type' => $mime_type,
      'md5_hash' => $md5_hash,
      'type' => $type,
      'access_policy' => $access_policy
    );
    return $this->insert($file_record);
  }
  
  function delete_file( $id ) {
    $file = $this->getById( $id );
    if( $file == false ) return false;
    
    $filepath = DATA_PATH . $file->filepath;
    if( file_exists( $filepath ) ) {
      $success = unlink( $filepath );
      if( $success ) {
        $this->db->delete( $this->table, array( $this->id_column => $id ) );
        return true;
      } else {
        // TODO: log in DB
        return false;
      }
    } else {
      // TODO: log in db
      return false;
    }
  }
}
?>
