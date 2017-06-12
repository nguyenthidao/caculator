<?php
    class Caculator{
        private $operator;

        public function __construct(IOperator $operator)
        {
            $this->operator = $operator;
        }

        public function execute($firstNumber, $secondNumber)
        {
            return $this->operator->execute($firstNumber, $secondNumber);

        }
    }