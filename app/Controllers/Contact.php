<?php

namespace App\Controllers;

class Contact extends BaseController
{

    public function index($page = 'contact')
    {
        $data['title'] = ' ';
        $data['description'] = ' ';
        $data['page'] = $page;

        echo view('users/header', $data);
        echo '<h2>This is the ' . $page . ' page' . "</h2>";
        echo view('users/footer', $data);
    }
};
