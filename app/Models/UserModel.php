<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'users';
  protected $primaryKey = 'uniid';
  protected $allowedFields = ['first_name', 'last_name',  'status', 'profile_pic', 'uniid', 'position'];



}