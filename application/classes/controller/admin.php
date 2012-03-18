<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {

	public function action_index()
	{
		$query = DB::select()->from('urls');
		$results = $query->execute()->as_array();
		
		$data['title'] = "Title of the page";
		$data['urls'] = $results;
		$data['base_url'] = "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'];
		unset(Database::$instances['default']);
		
		$view = View::factory('admin/list', $data);
		$this->response->body($view->render());
	}

	public function action_list()
	{
		$query = DB::select()->from('urls');
		$results = $query->execute()->as_array();
		
		$data['title'] = "Title of the page";
		$data['urls'] = $results;
		$data['base_url'] = "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']; 
		unset(Database::$instances['default']);
		
		$view = View::factory('admin/list', $data);
		$this->response->body($view->render());
	}

} // End Welcome
