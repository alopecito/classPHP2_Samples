<?php

class UserModel extends BaseModel
{
    public $id;
    public $username;
    public $password;
    public $isAdmin;

    protected $TableName = 'users';
    protected $ModelName = 'UserModel';
}
