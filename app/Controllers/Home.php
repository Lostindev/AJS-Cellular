<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index($page = 'home')
	{	
		if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
		{
			
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['title'] = 'iPhone Repair Akron Ohio | Unlock iPhones | Flashing | Jailbreaking';
		$data['description'] = 'Akron Ohio iPhone screen repairs, back glass repairs, jailbreaking, flashing & much more! We do most android repairs also. Get cash for your phone today, stop in for an estimate.';
		$data['page'] = $page;

		echo view('users/header', $data);
		echo view($page, $data);
		echo view('users/footer', $data);
	}

	//--------------------------------------------------------------------

}
