<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //students
    public function student(){
        $students = [
    [
        "id" => 1,
        "name" => "Rahul Sharma",
        "email" => "rahul@example.com",
        "phone" => "9876543210",
        "age" => 20,
        "gender" => "Male",
        "course" => "B.Tech CSE",
        "semester" => 4,
        "city" => "Delhi"
    ],
    [
        "id" => 2,
        "name" => "Priya Singh",
        "email" => "priya@example.com",
        "phone" => "9876543211",
        "age" => 21,
        "gender" => "Female",
        "course" => "BCA",
        "semester" => 6,
        "city" => "Lucknow"
    ],
    [
        "id" => 3,
        "name" => "Amit Kumar",
        "email" => "amit@example.com",
        "phone" => "9876543212",
        "age" => 19,
        "gender" => "Male",
        "course" => "B.Tech IT",
        "semester" => 2,
        "city" => "Kanpur"
    ],
    [
        "id" => 4,
        "name" => "Sneha Verma",
        "email" => "sneha@example.com",
        "phone" => "9876543213",
        "age" => 22,
        "gender" => "Female",
        "course" => "MCA",
        "semester" => 2,
        "city" => "Noida"
    ],
    [
        "id" => 5,
        "name" => "Vikash Yadav",
        "email" => "vikash@example.com",
        "phone" => "9876543214",
        "age" => 20,
        "gender" => "Male",
        "course" => "B.Tech ME",
        "semester" => 4,
        "city" => "Patna"
    ],
    [
        "id" => 6,
        "name" => "Anjali Gupta",
        "email" => "anjali@example.com",
        "phone" => "9876543215",
        "age" => 21,
        "gender" => "Female",
        "course" => "B.Com",
        "semester" => 5,
        "city" => "Varanasi"
    ],
    [
        "id" => 7,
        "name" => "Rohit Mishra",
        "email" => "rohit@example.com",
        "phone" => "9876543216",
        "age" => 23,
        "gender" => "Male",
        "course" => "MBA",
        "semester" => 3,
        "city" => "Prayagraj"
    ],
    [
        "id" => 8,
        "name" => "Pooja Patel",
        "email" => "pooja@example.com",
        "phone" => "9876543217",
        "age" => 20,
        "gender" => "Female",
        "course" => "B.Sc",
        "semester" => 4,
        "city" => "Indore"
    ],
    [
        "id" => 9,
        "name" => "Deepak Jain",
        "email" => "deepak@example.com",
        "phone" => "9876543218",
        "age" => 22,
        "gender" => "Male",
        "course" => "BBA",
        "semester" => 6,
        "city" => "Jaipur"
    ],
    [
        "id" => 10,
        "name" => "Neha Tiwari",
        "email" => "neha@example.com",
        "phone" => "9876543219",
        "age" => 19,
        "gender" => "Female",
        "course" => "B.Tech ECE",
        "semester" => 2,
        "city" => "Bhopal"
    ],
    [
        "id" => 11,
        "name" => "Arjun Singh",
        "email" => "arjun@example.com",
        "phone" => "9876543220",
        "age" => 21,
        "gender" => "Male",
        "course" => "B.Tech CSE",
        "semester" => 6,
        "city" => "Gorakhpur"
    ],
    [
        "id" => 12,
        "name" => "Kavita Sharma",
        "email" => "kavita@example.com",
        "phone" => "9876543221",
        "age" => 20,
        "gender" => "Female",
        "course" => "BCA",
        "semester" => 4,
        "city" => "Agra"
    ],
    [
        "id" => 13,
        "name" => "Saurabh Verma",
        "email" => "saurabh@example.com",
        "phone" => "9876543222",
        "age" => 22,
        "gender" => "Male",
        "course" => "MCA",
        "semester" => 4,
        "city" => "Meerut"
    ],
    [
        "id" => 14,
        "name" => "Riya Gupta",
        "email" => "riya@example.com",
        "phone" => "9876543223",
        "age" => 21,
        "gender" => "Female",
        "course" => "B.Com",
        "semester" => 6,
        "city" => "Lucknow"
    ],
    [
        "id" => 15,
        "name" => "Mohit Kumar",
        "email" => "mohit@example.com",
        "phone" => "9876543224",
        "age" => 20,
        "gender" => "Male",
        "course" => "B.Tech Civil",
        "semester" => 4,
        "city" => "Kanpur"
    ]
];
        return view('student', compact('students'));
    }
}
