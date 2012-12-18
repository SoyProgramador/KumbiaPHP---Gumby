<?php

/**
 * Controller por defecto si no se usa el routes
 * 
 */
class IndexController extends AppController
{

    public function index()
    {
        Flash::success("<a href='http://gumbyframework.com' target='_blank'>Más información sobre Gumby</a>");
    }

}
