<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
	public function action_index()
	{
		$query = DB::select()->from('urls');
		$results = $query->execute()->as_array();
		
		$data['title'] = "Title of the page";
		$data['urls'] = $results;
		unset(Database::$instances['default']);
		
		$view = View::factory('home', $data);
		$this->response->body($view->render());
	}
	
	public function action_shorten_url()
	{
		$url = Arr::get($_POST, 'url', 'foo');;
		$query = DB::select()->from('urls')->where('url', '=', $url);
		$result = $query->execute()->as_array();
		
		$count = count($result);
		
		if ($count == 0) 
		{
			// these generate slightly different values, there is a good chance that we can
			//	still get a clash using these but for the purposes of this demo application 
			//	we will assume that this is 'good enough' for now
			$algorithms = array (
				'crc32',
				'crc32b',
			);
			
			foreach ($algorithms as $algorithm)
			{
				$hash = $this->get_shortened_url_from_id($url, $algorithm);
				
				// verify that we don't have a hash collision, if so we need to try a different mechanism
				$query = DB::select()->from('urls')->where('urlhash', '=', $hash);
				$result = $query->execute()->as_array();
				$count = count($result);
								
				if ($count == 0) 
				{
					$hash = $this->get_shortened_url_from_id($url);
					$insertQuery = DB::insert('urls', array('url', 'urlhash'))->values(array($url, $hash));
					$insertResult = $insertQuery->execute();

					$insertCount = count($insertResult);
					
					$data['url'] = $url;
		 			$data['url_hash'] = $hash;

					break;
				}
				else
				{
					$data['url'] = $url;
					$data['url_hash'] = 'error, unable to generate hash';
				}
			}
		}
		else if ($count == 1)
		{
			$data['url'] = $result[0]['url'];
 			$data['url_hash'] = $result[0]['urlhash'];
		}

		unset(Database::$instances['default']);
		
		$data['base_url'] = "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'];
		$data['title'] = "Url Shortener";
		
		$view = View::factory('shorten_url', $data);
		$this->response->body($view->render());
	}
	
	public function action_redirect()
	{
		$uri = substr(Request::current()->detect_uri(), 1);
		echo $uri;
		$url = Arr::get($_POST, 'url', 'foo');;
		$query = DB::select()->from('urls')->where('urlhash', '=', $uri);
		$result = $query->execute()->as_array();
		$count = count($result);
		
		if ($count > 0) 
		{
			header('HTTP/1.1 301 Moved Permanently');
			header('Location: ' .  $result[0]['url']);
			exit;
		}
	}
	
	function get_shortened_url_from_id ($url, $algorithm = 'crc32')
	{
		$out = hash($algorithm, $url);
		
		return $out;
	}

} // End Welcome
