<?php

namespace CodeIQ;

class FizzBuzzSpecification {

//     private $message;
//     private $spec;

//     public function __construct($spec) {
//         $this->spec = $spec;
//     }

//     public function setMessage($message) {
//         $this->message = $message;
//     }
//     public function getSpec() {
//         return $this->spec;
//     }

//     public function getMessage() {
//         return $this->message;
//     }

        protected $divisor;

        public function __construct($divisor)
        {
            $this->divisor = $divisor;
        }

        public function isSatisfiedBy($number)
        {
            return ($number % $this->divisor == 0);
        }
}