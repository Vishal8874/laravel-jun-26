<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    private function getUsers(){
        return [
    [
        'id' => 1,
        'name' => 'Sarah Ahmed',
        'email' => 'sarah@example.com',
        'phone' => '+1 555 0184',
        'avatar' => 'avatar-1.jpg',
        'role' => 'Admin',
        'team' => 'Operations',
        'status' => 'Active',
        'location' => 'New York, USA',
        'joined' => 'Jan 12, 2026',
        'last_login' => 'Today',
        'projects' => 14,
    ],

    [
        'id' => 2,
        'name' => 'Rafi Khan',
        'email' => 'rafi@example.com',
        'phone' => '+1 555 0245',
        'avatar' => 'avatar-2.jpg',
        'role' => 'Manager',
        'team' => 'Sales',
        'status' => 'Active',
        'location' => 'Chicago, USA',
        'joined' => 'Feb 03, 2026',
        'last_login' => 'Yesterday',
        'projects' => 9,
    ],

    [
        'id' => 3,
        'name' => 'Nadia Islam',
        'email' => 'nadia@example.com',
        'phone' => '+1 555 0367',
        'avatar' => 'avatar-3.jpg',
        'role' => 'Editor',
        'team' => 'Content',
        'status' => 'Pending',
        'location' => 'Los Angeles, USA',
        'joined' => 'Mar 18, 2026',
        'last_login' => '2 days ago',
        'projects' => 6,
    ],

    [
        'id' => 4,
        'name' => 'Mina Torres',
        'email' => 'mina@example.com',
        'phone' => '+1 555 0478',
        'avatar' => 'avatar-4.jpg',
        'role' => 'Viewer',
        'team' => 'Finance',
        'status' => 'Suspended',
        'location' => 'Miami, USA',
        'joined' => 'Apr 07, 2026',
        'last_login' => '1 week ago',
        'projects' => 2,
    ],

    [
        'id' => 5,
        'name' => 'Jon Oliver',
        'email' => 'jon@example.com',
        'phone' => '+1 555 0599',
        'avatar' => 'avatar-5.jpg',
        'role' => 'Analyst',
        'team' => 'Data',
        'status' => 'Active',
        'location' => 'Seattle, USA',
        'joined' => 'Apr 22, 2026',
        'last_login' => '3 hours ago',
        'projects' => 11,
    ],
];
    }

    public function index()
    {

        $users = $this->getUsers();

        return view('admin.dashboard', compact('users'));
    }

    public function userDetails($id){
        
        $user = collect($this->getUsers())->firstWhere('id', $id);

        return view('admin.user-details', compact('user'));
    }
    
    public function charts()
    {
        return view('admin.charts');
    }

    
}
