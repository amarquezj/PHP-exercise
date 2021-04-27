<?php

namespace App\Controllers;

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
		
        //$model = new StudiesModel();
        //return $model ->get_projects($projectFolder, $corporationId);
    }

}
