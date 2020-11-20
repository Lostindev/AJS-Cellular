<?php 

namespace App\Controllers;

class Location extends BaseController 
{

    public function index($page = 'location') {
        $data['title'] = 'AJs Cellular Akron Ohio | Get Directions | Contact Us ';
        $data['description'] = 'Get directions to AJs Cellular, located in downtown Akron. Call us at 330-962-4434 for cell phone help or questions regarding your device.';
        $data['page'] = $page;

        echo view('users/header', $data);
        echo view('location', $data);
        echo view('users/footer', $data);
    }

};