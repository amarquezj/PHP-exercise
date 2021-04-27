<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserList extends BaseController
{
	public function index()
	{
		//Save users array in order to send it to the view
		$data["users"] = $this->retrieve_users();

		return view('users_list' , $data);
	}

	//This function retrieve all the users of the Users table
	public function retrieve_users(){
		$model = new UserModel();
        $users = $model->findAll();
		return $users;
    }

}
