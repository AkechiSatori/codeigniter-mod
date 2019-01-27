<?php
class test extends CI_Controller {
	public function w($id = 1, $str = 'wwww', $type = false, $arr = []) {
		return [
			'code' => 0,
			'id' => $id,
			'str' => $str,
			'type' => $type,
			'array' => $arr,
		];
	}
}
