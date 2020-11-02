<?php 

namespace App\Controllers;

class Location extends BaseController 
{

    public function index($page = 'location') {
        $data['title'] = ' ';
        $data['description'] = ' ';
        $data['page'] = $page;

        echo view('users/header', $data);
        echo '<h2>This is the ' . $page . ' page' . "</h2>";
        echo view('users/footer', $data);
    }

};