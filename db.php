<?php 
class Database{
 protected $db;
 function __construct(){
  $this->db=new mysqli('localhost','root','','julia_soc');

 }
}
 ?>