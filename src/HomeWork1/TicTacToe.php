<?php

//Задачу - не сделал. !<=====

class TicTacToe
{
    public function check()
    {
        $ttt = [
            ['o','x','o'],
            ['x','o','o'],
            ['x','o',null],
        ];

        $tttFull = [
            ['o','x','o'],
            ['x','o','o'],
            ['x','o','x'],
        ];
        foreach ($ttt as $key => $value){
            if (in_array(null, $value, true)) {
                return false;
            }
        }
    }
}
$result = new TicTacToe();
$result->check(); // returns false
//$judge->check($tttFull); // returns false
