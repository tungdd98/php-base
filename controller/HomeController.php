<?php
class HomeController extends BaseController
{
    public function __construct()
    {
        $this->loadView("client/home/index", array());
        $this->setTemplate("base/client/index");
    }
}
