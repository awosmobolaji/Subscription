<?php
   include_once "shared/constant.php";
?>
<?php
  // Class Definition
Class Carddetails{
    // member variables
    var $cardnumber;
    var $cardtype;
    var $accounttype;
    var $expiry;
    var $cvv;
    var $pin;
   
    var $dbcon; #db connection handler

    // construct
    function __construct()
    {
        $this->dbcon = new MYSQLi(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE_NAME); 
        if($this->dbcon->connect_error){
         die("Connection Failed".$this->dbcon->connect_error);
        }  
    }
    // Begin insertUser Method
    function insertCarddetails($cardnumber, $cardtype,$accounttype,$expiry,$cvv,$pin){

    // prepare statement
    $statement = $this->dbcon->prepare("INSERT INTO carddetails(cardnumber,cardtype,accounttype,expiry,cvv,pin)VALUES(?,?,?,?,?,?)");
    // bind param
    $statement->bind_param("ssssss",$cardnumber, $cardtype,$accounttype,$expiry,$cvv,$pin);
    // execute statement $cardtype
    $statement->execute();
            if($statement->error){
                $result ="error".$statement->error;
            }else{
                $result = "<div style='text-align:center; color:green'>You have successfully added your Card</div>";
            }
            return $result;
        }
    // end insert user method
}
?>
