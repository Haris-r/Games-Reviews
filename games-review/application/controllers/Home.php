<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        // Load in your Models below.
        $this->load->model('HomeModel');
        
        // Consider creating new Models for different functionality.
    }

    public function index()
    {
        // Check to see if the User exists on the homepage. You will need to change this to look up the existance of a cookie.
		$userExists='';
        //Load data required for web page in array.

        // Change this to whatever title you wish.
        $data['title']  = 'Games Reviews';

        $cookies = get_cookie('active_user', TRUE);

              //  Condition checking if the user exists.
        if ($cookies == null)
        {
            $data['status'] = false;
        }
        else
        {
            $data['status'] = true;
        }
        $userExists = $data['status'];


        // Condition checking if the user exists.
        if (!$userExists)
        {
            //The user doesn't exist so change your page accordingly.
            $data['show'] = '';
        }
        else
        {
            //The user does exist so change your page accordigly.
            $data['show'] = $cookies;
        }

        
        // Get the data from our Home Model.
        $data['result'] = $this->HomeModel->getGame();
        
        //Load the view and send the data accross.
        $this->load->view('home', $data);
    }

    

    public function review($slug)
    {
        $cookies = get_cookie('active_user', TRUE);

        $data['activeUser'] = get_cookie('active_user', TRUE);
        $data['result'] = $this->HomeModel->getReview($slug); 
        
        if ($cookies == null)
        {
            $data['status'] = false;
        }
        else
        {
            $data['status'] = true;
        }
        $userExists = $data['status'];
        
        
        $this->load->view('review', $data);
    }

    // this function gets the specifc review using the slug from the model where the queries are

    public function Logout(){
        delete_cookie('active_user');
        redirect('login');
    }
    
    // Logs out the user by deleting the cookie and redirecting the page back to log-in in case the user wants to

    public function comments(){

        $commentData = $this->HomeModel->getComments();
        header('Content-Type: application/json');
        echo json_encode($commentData);


    }

    // the function is called from home model and echoes json array for specific games

    public function postComments(){

        $data['UserComment']= $this->input->post()['UserComment'];
        $data['UserID']= get_cookie('user_id', TRUE);
        $data['ReviewID']= get_cookie('reviewID',TRUE);

        $data['result']=$this->HomeModel->addComments($data);
    }

    // this function posts comments to the databse as well as the user who submitted the game


    // TODO: Create all other functions as required for further functionality (Comments, Login and so on.)
    // Note: You can redirect to a page by using the redirect function as follows:
    /*
        //Redirect Home
        redirect('http://localhost/games-review');
    */
  
}
