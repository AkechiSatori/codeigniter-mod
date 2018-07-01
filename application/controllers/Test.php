<?php
class test extends MY_Controller
{
    public function w($id)
    {
        return [
            'code' => 0,
            'id' => $id
        ];
    }
}
