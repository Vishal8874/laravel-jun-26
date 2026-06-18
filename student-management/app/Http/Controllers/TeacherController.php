<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //get teachers
    private function getTeachers(){
        return [
    [
        'id' => 1,
        'name' => 'Amit Kumar',
        'email' => 'amit@example.com',
        'subject' => 'PHP',
        'experience' => '5 Years'
    ],
    [
        'id' => 2,
        'name' => 'Rahul Sharma',
        'email' => 'rahul@example.com',
        'subject' => 'Laravel',
        'experience' => '3 Years'
    ]
];
    }

    //teachers index
    public function index(){
        $teachers = $this->getTeachers();

return view('teachers.index', compact('teachers'));
    }


    //show teachers
    public function show($id){

    $teacher = collect($this->getTeachers())->firstWhere('id', $id);

    return view('teachers.show', compact('teacher'));

    }
}
