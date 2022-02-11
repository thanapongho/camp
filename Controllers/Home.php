<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function html01()
    {
        return view('html01');
    }
    public function html02()
    {
        return view('html02');
    }
    public function html03()
    {
        return view('html03');
    }
    public function html04()
    {
        return view('html04');
    }
    public function html05()
    {
        return view('html05');
    }
    public function form1()
    {
        return view('html-workshop/form1');
    }
    public function form2()
    {
        return view('html-workshop/form2');
    }
    public function form3()
    {
        return view('html-workshop/form3');
    }
    public function form4()
    {
        return view('html-workshop/form4');
    }
    public function form5()
    {
        return view('html-workshop/form5');
    }
    public function form6()
    {
        return view('css-workshop/css01');
    }
    public function css01()
    {
        return view('css-workshop/css01');
    }
    public function css02()
    {
        return view('css-workshop/css02');
    }
    public function css03()
    {
        return view('css-workshop/css03');
    }
    public function php01()
    {
        return view('php-workshop/php01');
    }
    public function php02()
    {
        return view('php-workshop/php02');
    }
    public function php03()
    {
        return view('php-workshop/php03');
    }
    public function php04()
    {
        return view('php-workshop/php04');
    }
}
