<?php
namespace App\Controllers;

use ActiveRecord\Table;
use App\Libraries\Controller;
use App\Models\Users;

class Sample extends Controller
{
    public function index()
    {
        
        $this->view('index');
    }

    public function signup()
    {
        $this->view('signup');
    }

    public function add()
    {
        $postdata = $_POST ?? array();
        // print_r($postdata);

        if (isset($postdata['fullname']) && isset($postdata['username']) && isset($postdata['email']) && isset($postdata['password'])) {
            $user =  $this->model('Users');
            $user->name = $postdata['fullname'];
            $user->username = $postdata['username'];
            $user->email = $postdata['email'];
            $user->password = $postdata['password'];
            $user->save();
        }

        $data['users'] = $this->model('Users')::all();
        $this->view('index', $data);
    }

    public function login()
    {
        $tab = $this->model('Users');
        $posts = $tab::find('all', array('conditions' => array()));
        $data['users'] = $this->model('Users')::all();
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];
        // echo $email." ".$password;
        $isadmin = $this->model('Users')::find_by_email_and_password_and_role_and_status($email, $password, 'admin', 'approved');
        $isuser = $this->model('Users')::find_by_email_and_password_and_role_and_status($email, $password, 'user', 'approved');
        
        if ($isadmin) {
            // echo '<br> Admin';
            $this->view('admin_dashboard', $data);
        } elseif ($isuser) {
            // print_r($isuser);
            $this->view('user_dashboard', $isuser);
        } else {
            echo '<br> You are not approved or invalid credentials';
        }
    }


    public function permission()
    {
        $data['users'] = $this->model('Users')::all();
        // print_r($_POST);
        $user = $this->model('Users')::find_by_id($_POST['userid']);
        if ($user->status=='approved') {
            $user->status="restricted";
        } else {
            $user->status="approved";
        }
        $user->save();
        $data['users'] = $this->model('Users')::all();
        $this->view('admin_dashboard', $data);
    }

    public function delete ($a, $b, $x)
    {
        $data['users'] = $this->model('Users')::all();
        $delid = $x;
        $post = $this->model('Users')::find_by_id($delid);
        $post->delete();
        $data['users'] = $this->model('Users')::all();
        $this->view('admin_dashboard', $data);
    }

   
    public function search()
    {
        $data['users'] = $this->model('Users')::all();
        // print_r($_POST);
        $search_input = $_POST['searchinput'];
        if ($search_input != "") {
            $data['users'] = array($this->model('Users')::find_by_name($search_input));
        }
        // $data['users'] = array($this->model('Users')::find_by_name($search_input));
        $this->view('admin_dashboard', $data);
    }

    public function edit()
    {
        $params = func_get_args();
        $data['users'] = $this->model('Users')::find_by_id($params[2]);
        // print_r($data['users']);
        $this->view('edit_by_admin', $data);
    }

    public function update()
    {
        $postdata = $_POST ?? array();
        // print_r($postdata['updatid']);
        if (isset($postdata['fullname']) && isset($postdata['username']) && isset($postdata['email']) && isset($postdata['password'])) {
            $user =  $this->model('Users')::find_by_id($postdata['updatid']);
            $user->name = $postdata['fullname'];
            $user->username = $postdata['username'];
            $user->email = $postdata['email'];
            $user->password = $postdata['password'];
            $user->save();
        }

        $data['users'] = $this->model('Users')::all();
        $this->view('admin_dashboard', $data);
    }

    public function adduser()
    {
        $this->view('adduser');
    }
    public function addnewuser()
    {
        $postdata = $_POST ?? array();
        // print_r($postdata);

        if (isset($postdata['fullname']) && isset($postdata['username']) && isset($postdata['email']) && isset($postdata['password'])) {
            $user =  $this->model('Users');
            $user->name = $postdata['fullname'];
            $user->username = $postdata['username'];
            $user->email = $postdata['email'];
            $user->password = $postdata['password'];
            $user->save();
        }

        $data['users'] = $this->model('Users')::all();
        $this->view('admin_dashboard', $data);
    }
    
    



}
