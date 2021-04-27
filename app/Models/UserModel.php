<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'users';
  protected $primaryKey = 'uniid';
  protected $allowedFields = ['first_name', 'last_name',  'status', 'profile_pic', 'uniid', 'position'];



  function verifyUniid($uniid){
    $db      = \Config\Database::connect();
    //Retrieve User with Uniid 
    $builder = $db->table('users');
    $builder->select("activation_date, uniid, status, recover_date");
    $builder->where('uniid', $uniid);
    $result = $builder->get();
    if($builder->countAll = 1){
      return $result->getRow();
    }else{
      return false;
    }
  }



}