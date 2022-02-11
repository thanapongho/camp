<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function show_input()
    {
        return view('v_show_input');
    }
    public function show_value()
    {
        $data['name_title'] = $this->request->getPost('name_title');        
        $data['id'] = $this->request->getPost('id');
        $data['first_name'] = $this->request->getPost('first_name');
        $data['last_name'] = $this->request->getPost('last_name');
        $data['dob'] = $this->request->getPost('dob');
        $data['email'] = $this->request->getPost('email');
        $data['year'] = $this->request->getPost('year');
        $data['cluster'] = $this->request->getPost('cluster');
        $data['code'] = $this->request->getPost('code');

        $file = $this->request->getFile('image'); //getFile
        if($file->isValid()){ //CheckFileInput Is correct?
            $image_name = $file->getRandomName(); //protect FileName errors from same FileName            $file->move('./picture', $image_name);
            $file->move('./picture/', $image_name);
        }
        $data['image'] = $image_name;

        $file = $this->request->getFile('file');
        if($file->isValid()){
            $file_name = $file->getRandomName();
            $file->move('./file/', $file_name);
        }
        $data['file'] = $file_name;


        return view('v_show_value', $data);
    }
    
}
