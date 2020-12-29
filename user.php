<?php
    class User{
        
        private $username;
        private $email;
        private $yearOfBirth;
        private $sex;

        public function setUsername($username): void {
            $this->username = $username;
        }

        public function getUsername() {
            return $this->username;
        }

        public function setEmail($email): void {
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setYearOfBirth($yearOfBirth): void {
            $this->yearOfBirth = $yearOfBirth;
        }

        public function getYearOfBirth(){
            return $this->yearOfBirth;
        }

        public function setSex($sex): void {
            $this->sex = $sex;
        }

        public function getSex(){
            return $this->sex;
        }

        public function __toString()
        {
            return $this->username." ".$this->email." ".$this->yearOfBirth." ".$this->sex;
        }

        //Khi deserialize, thong tin se luu vao file info.php, loi Insecure Deserialization o ham nay
        public function __wakeup()
        {
            file_put_contents("info.php", $this->username." ".$this->email." ".$this->yearOfBirth." ".$this->sex);
        }
    }

