<?php
class hape{
public $merk;
public $tahun;
public $os;
public $ram;

public function __construct($merk,$tahun,$os,$ram){
	$this->merk=$merk;
	$this->tahun=$tahun;
	$this->os=$os;
	$this->ram=$ram;
}
public function get_merk(){
return $this->merk;
}
public function get_tahun(){
return $this->tahun;
}
public function get_os(){
return $this->os;	
}
public function get_ram(){
return $this->ram;
}
}
?>