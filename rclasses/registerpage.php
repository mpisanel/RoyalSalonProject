<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registerpage
 *
 * @author SONY
 */
include_once "connection.php";
class registerpage{

        private $name = "";
        private $surname = "";
        private $address = "";
        private $email = "";
        private $phoneNo = "";
        private $password = "";


        public function __construct() {
        }

        public function getID() {
            return $this->id;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function setSurname($surname)
        {
            $this->surname = $surname;
        }
        public function getSurname() {
            return $this->surname;
        }
         public function setAddress($address)
        {
            $this->address = $address;
        }
        public function getAddress() {
            return $this->address;
        }
         public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getEmail() {
            return $this->email;
        }
         public function setPhoneNo($phoneNo)
        {
            $this->phoneNo = $phoneNo;
        }
        public function getPhoneNo() {
            return $this->phoneNo;
        }
         public function setPassword($password)
        {
            $this->password = $password;
        }
        public function getPassword() {
            return $this->password;
        }
        /*public function setBank($bank)
        {
            $this->bank = $bank;
        }
        public function getBank() {
            return $this->bank;
        }
         public function setCurdNo($card_no)
        {
            $this->card_no = $card_no;
        }
        public function getCardNo() {
            return $this->card_no;
        }*/
        public function registerCustomer($name, $surname, $address, $email, $phoneNo, $password)
        {
            $conn = new mysqli("localhost","root","root","rsp_db");
            $query = "INSERT INTO customer(name,surname,address,phoneno,email)"
                . " VALUES('$name', '$surname', '$address',$phoneNo,'$email')";
            
            $query1 = "INSERT INTO login(phoneno,email,password)"
                . " VALUES('$phoneNo','$email','$password')";


            if ($conn->connect_error)
            {
                die('Could not connect to database!');
            }
            else
            {
                if($conn->query($query)&& $conn->query($query1)) {
                 require 'loginpage.php';
                    ?>
                    <script>
                        alert('customer regestererd!!!');
                     </script>
                     <?php
                }
                else {

                    echo $conn->error;
                }
            }
            exit();
        }
    public function customerReport()
    {
        $conn = new mysqli("localhost","root","","a_a_tinkers_db");
        $sqlStatement = "Select * from customer";
        $result = mysqli_query($conn,$sqlStatement);
        if(mysqli_num_rows($result) > 0)
        {
            echo "<table class='table table-hover'><tr><th>Customer ID</th><th>Name</th><th>Surname</th><th>Adrdress</th><th>Email</th></tr>";
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>".$row["customer_id"]."</td><td>".$row["customer_name"]."</td><td>".$row["customer_surname"]."</td><td>".$row["customer_address"]."</td><td>".$row["customer_email"]."</td></tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<p id='errors'>No results</p>";
        }
    }
    }
?>