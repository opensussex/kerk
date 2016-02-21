<?php
use Kerk\Controller;

class Home extends Controller
{

    private $meta_title = 'Kerk';

    public function index()
    {
        $view= 'home';
        $content_vars = null;
        $this->loadView('header', array('meta_title'=> $this->meta_title));
        $this->loadView($view, $content_vars);
        $this->loadView('footer');
    }
}
