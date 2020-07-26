<?php


class config
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "asbeza",
        $tablename = "producttb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password,$dbname);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query

        // execute query
       
    }

    // get product from the database
    public function getData(){

       // $sql = "SELECT id FROM $this->tablename";
$result= $this->con->query("SELECT * FROM $this->tablename");
       // $result = mysqli_query($this->con, $sql);

        if($result->num_rows > 0){
            
            return $result;
        }
    }

    public function getData2($id){

        // $sql = "SELECT id FROM $this->tablename";
 $result= $this->con->query("SELECT * FROM $this->tablename WHERE id= $id ");
        // $result = mysqli_query($this->con, $sql);
 
         if($result->num_rows > 0){
             
             return $result;
         }
     }

     public function search($name){

        $result= $this->con->query("SELECT * FROM $this->tablename WHERE product_name like '%$name%' ");
       
if($result->num_rows > 0){
    return $result;
}
     }
//      public function getIncart(){

    
//         // $sql = "SELECT id FROM $this->tablename";
//  $result= $this->con->query("SELECT * FROM $this->tablename WHERE inCart = 0 ");
//         // $result = mysqli_query($this->con, $sql);
 
//          if($result->num_rows > 0){
             
//              return $result;
//          }
//      }

//      public function updateIncart($productid){

    
//         // $sql = "SELECT id FROM $this->tablename";
//  $result= $this->con->query("UPDATE $this->tablename SET inCart = 0 WHERE id ='$productid' ");
 
//         // $result = mysqli_query($this->con, $sql);
 
//         if(!$result){
//             echo "FUck Aymen";
//         }
     //}
}

// $link = mysqli_connect("localhost","root", "", "asbeza");

// $result= $link->query("SELECT id FROM producttb");
// if($result->num_rows >0){
//     $row = $result->fetch_assoc();
//     echo $row['id'];
// }



