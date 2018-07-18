<?php
class test extends MY_Controller
{
    public function w(int $id, string $str = 'meow')
    {
        return [
            'code' => 0,
            'id' => $id,
            'str' => $str,
        ];
    }
}
