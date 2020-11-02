<?php

namespace App\Controllers;

class Store extends BaseController
{

    public function index($page = 'store')
    {

        $data['title'] = 'Buy iPhone Akron Ohio | Cheap Phone Solutions | iPhone and Android';
        $data['description'] = 'We have the best deals on the latest devices. We buy and sell iPhones, androids, and accesories. Check out our selection of new phones.';
        $data['page'] = $page;

        echo view('users/header', $data);
        echo '<h2>This is the '.$page.' page'."</h2>";
        echo view('users/footer', $data);
    }
    //--------------------------------------------------------------------

}
