<?php
class test extends MY_Controller
{
    public function w(int $id, string $str = 'meow', bool $type = true, array $arr = [])
    {
        return [
            'code' => 0,
            'id' => $id,
            'str' => $str,
            'type' => $type,
            'array' => $arr,
        ];
    }
}
