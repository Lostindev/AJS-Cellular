<?php

namespace App\Controllers;

class Repairs extends BaseController
{

    public function index($page = 'repairs')
    {


        $data['title'] = 'iPhone Screen Replacement | Fix my iPhone Fast | Cell Phone Repairs';
        $data['description'] = 'We have the best deals on the latest devices. We buy and sell iPhones, androids, and accesories. Check out our selection of new phones.';
        $data['page'] = $page;

        echo view('users/header', $data);
        echo view('repairs', $data);
        echo view('users/footer', $data);
    }
    //--------------------------------------------------------------------

}
