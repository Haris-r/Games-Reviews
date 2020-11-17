<?php
class HomeModel extends CI_Model{

    public function __construct()
    {
         $this->load->database();
    }

    //Get for all games
    public function getGame()
    {
        // You can use the select, from, and where functions to simplify this as seen in Week 13.
         $query = $this->db->query("SELECT * FROM activereviews");
         return $query->result();
    }

    //Get the details for a game once it has been clicked on.
    public function getReview($slug = FALSE)
    {
		$query = $this->db->query("SELECT * FROM activereviews Where slug = '$slug'");
		return $query->result();
    }// selects the game slugs for review page

    public function getComments(){

      $query = $this->db->query("SELECT * FROM activereviews INNER JOIN gamescomments ON (activereviews.ID = gamescomments.ReviewID) INNER JOIN users ON (gamescomments.UserID = users.UID) ORDER BY gamescomments.UID DESC");
      return $query->result();

      //This query gets everything from the active reviews, gamescomments and users
    }

    public function addComments($data){
      $this->db->insert("gamescomments",$data);
    }

    // the selected data is inputted
}
