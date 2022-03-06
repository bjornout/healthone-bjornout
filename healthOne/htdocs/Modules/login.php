<?php

function saveLogin($userName, $password) {
    global $pdo;
    $sth = $pdo->prepare('INSERT INTO login (first_name, password) VALUES (:userName, :password) ');  
    $sth->bindParam("userName", $userName);   
    $sth->bindParam("password", $password);
    $sth->execute();

}


function checklogin(string $username, string $password){
    global $pdo;
    $sth = $pdo->prepare('SELECT email , first_name , last_name , role FROM login WHERE first_name = :u AND password = :p');
    $sth->bindParam("u", $username);
    $sth->bindParam("p", $password);
    $sth->setFetchMode(PDO::FETCH_CLASS, Login::class);
    $sth->execute();
    return $sth->fetch();
}

function changeProfile():bool
{
    global $pdo;
    $email=filter_input(type: INPUT_POST, variable_name: 'email', filter: FILTER_VALIDATE_EMAIL);
    $firstName=filter_input(type: INPUT_POST, variable_name: "firstname");
    $lastName=filter_input(type: INPUT_POST, variable_name: "lastname");

    if($email!==false && !empty($firstName) && !empty($lastName)) {
        $sth = $pdo->prepare('UPDATE user SET first_name=:f, last_name=:l WHERE email=:e');
        $sth->bindValue(":f", $firstName);
        $sth->bindValue(":l", $lastName);
        $sth->bindValue(":e", $email);
        $sth->execute();
        $_SESSION['user']->first_name=$firstName;
        $_SESSION['user']->last_name=$lastName;
        return true;
    } else {
        return false;
    }
}