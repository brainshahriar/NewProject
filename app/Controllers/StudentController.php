<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
	public function index()
	{
		$student= new StudentModel();
        $data['students']=$student->findAll();
        return view ('students/index.php',$data);
	}
	public function create()
	{
		return view ('students/create');
	}
	public function store()
	{
		$student = new StudentModel();
		$data=[
          'Name'=>$this->request->getPost('Name'),
		  'email'=>$this->request->getPost('email'),
		  'phone'=>$this->request->getPost('phone'),
		  'course'=>$this->request->getPost('course')
		  
		];
		$student->save($data);
		//return redirect('students')->with('status','Student Inseted Successfully');
	}
	public function edit( $Id = null)
    {
        $student = new StudentModel();
        $data['students']=$student->find($Id);
        return view('students/edit',$data);
    }
	public function update($Id = null)
    {
        $student = new StudentModel();
        $data = [
            'Name'=>$this->request->getPost('Name'),
            'email'=>$this->request-> getPost('email'),
            'phone'=>$this-> request-> getPost('phone'),
            'course'=>$this-> request-> getPost('course')
        ];
        $student->update($Id,$data);
        return redirect()->to(base_url('students'))->with('status','Student Updated Successfully');
	}
}
?>