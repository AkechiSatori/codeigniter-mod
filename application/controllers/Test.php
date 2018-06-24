<?php
class test extends CI_Controller
{
    public function w($id)
    {
        return [
            'code' => 0,
            'id' => $id,
        ];
    }
}
