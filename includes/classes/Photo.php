<?php

class Photo extends DBRecord
{
  protected static $dbTable = "photos";
  protected static $dbFields = array('title', 'description', 'fileName', 'type', 'size');
  protected $id;
  protected $title;
  protected $description;
  protected $fileName;
  protected $type;
  protected $size;
  protected $tmpPath;
  protected $uploadDir = "upload";

  public function setFile($file)
  {
  	if(empty($file)) {
  		return false;
  	} else {
  		$this->filename     = basename($file['name']);
  		$this->tmpPath      = $file['tmp_name'];
  		$this->type         = $file['type'];
  		$this->size         = $file['size'];
  	}
  }

  public function save()
  {
  	$target_path = SITE_ROOT.DS.'public'.DS.$this->uploadDir.DS.$this->filename;
  	if(file_exists($target_path)) {
  		return false;
  	}
  	if(move_uploaded_file($this->tmpPath, $target_path)) {
  		if($this->create()) {
  			unset($this->tmpPath);
  			return true;
  		}
  		else {
  			return false;
  		}
  	}
  }

 public function picturePath() 
 {
 	return $this->uploadDir.DS.$this->filename;
 }
}

?>
