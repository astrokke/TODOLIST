<?php

namespace Keha\Test\Controller;

use Keha\Test\App\AbstractController;
use Keha\Test\views\header;
use Keha\Test\views\head;

class IndexController extends AbstractController
{
    public function index()
    {
        //Create the instances of Head & Header
        $head = new head();
        $header = new header();
        //Call the displayHead & Header methods
        $head->displayHead();
        $header->displayHeader();
    }
}
