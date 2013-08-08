<?php
namespace CodeIQ;

class FizzBuzzApplication {

//     private $specObjects;

//     /**
//      * コンストラクタ。
//      */
//     public function __construct() {
//     }

//     /**
//      * 数字とメッセージを追加する。
//      * @param FizzBuzzSpecification $specObj
//      * @param string $message
//      */
//     public function addSpecAndMessage(FizzBuzzSpecification $specObj, $message) {
//         $specObj->setMessage($message);
//         $this->specObjects[] = $specObj;
//     }


//     /**
//      * fizzbuzz実行。
//      * @param array $data
//      */
//     public function run($data) {
//         array_walk($data, function($number) {
//             $this->fizzbuzz($number);
//         });
//     }


//     /**
//      * fizzbuzzの内容。
//      */
//     private function fizzbuzz($d) {
//         foreach ($this->specObjects as $specObj) {
//             if ($d % $specObj->getSpec() == 0) {
//                 echo $specObj->getMessage(), "<br>";
//                 return;
//             }
//         }
//         echo $d, "<br>";
//     }


        private $specAndMessages;

        public function __construct()
        {
            $this->specAndMessages = [];
        }

        public function addSpecAndMessage(FizzBuzzSpecification $spec, $message)
        {
            $this->specAndMessages[] = ['spec'=>$spec, 'message'=>$message];
        }

        public function run($data)
        {
            array_walk($data, function($number) {
                echo $this->checkSpecAndGetMessage($number).PHP_EOL;
            });
        }

        public function checkSpecAndGetMessage($number)
        {
            foreach ($this->specAndMessages as $specAndMessage) {
                if ($specAndMessage['spec']->isSatisfiedBy($number)) {

                    return $specAndMessage['message'];
                }
            }

            return $number;
        }




}