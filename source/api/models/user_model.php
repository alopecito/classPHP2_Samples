<?php

class UserModel extends BaseModel
{
    public $id;
    public $username;
    public $password;
    public $isAdmin;

    protected $TableName = 'users';
    protected $ModelName = 'UserModel';

    public function getUserByUsername($username) {

    	$query = "SELECT * FROM {$this->TableName}  WHERE username = '$username'";
        $result = $this->db_connection->query($query);

        error_log("getUserByUsername SQL : $query");
        
        if (!$result) {
            throw new Exception("Database error: {$this->db_connection->error}", 500);            
        }
        
        if (!$result->num_rows != 1) {

        	throw new Exception('User does not exist', 400);  
        }

        $item = $result->fetch_object($this->ModelName);
        return $item;

    }

    public function storeToken($userId, $token) {

    	$genarationDateTime = date("Y-m-d H:i:s");
    	$genarationDateTime = date("Y-m-d H:i:s" ,strtotime('+2 hours'));

    	$query = "INSERT INTO tokens SET userId = $userId, token ='$token'," . "lastUpdateDateTime = "$now" , " . "expirationDateTime = "$twoHours" ";
    	error_log($query);

    	$result = $this->db_connection->query($query);
    	if (!$result) {
    		throw new Exception("Database error: {$this-> db_connection->error}", 500);
    		
    	}

    }



}
