<?php
    
    class Validator{
        private $data;

        public function __construct($data){
            $this->data = $data;
        }

        private function trimfunction($sanatization){
            $trimed = [];
            foreach($sanatization as $san){
                array_push($trimed, trim($san));
            }
            return $trimed;
            
        }
        public function valid($submit){
            if(isset($this->data[$submit])){
                $sanit = [
                    'username_sanit' => filter_var($this->data['username'],FILTER_SANITIZE_STRING),
                    'pass_sanit' => password_hash($this->data['password'],PASSWORD_DEFAULT),
                    'email_valid' => filter_var($this->data['email'],FILTER_VALIDATE_EMAIL)
                ];

               $sanit = $this->trimfunction($sanit);
               var_dump($sanit);
              
            }
           
        }

    }