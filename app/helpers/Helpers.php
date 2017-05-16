<?php

/**
* helpers Class
*/
class Helpers
{

	public static function dateChange($date, $type)
	{
		return date($type, strtotime($date));
	}

	public static function dateIndo($date)
	{
		$hari = [
			'Sun' => 'Mingggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jum`at',
			'Sat' => 'Sabtu',
		];

		$day = $hari[date('D', strtotime($date))];
		$tgl = date('d/m/Y', strtotime($date));
		return $day . '<br>' . $tgl;
	}

	public static function number($number)
	{
		if (!empty($number)) {
			return number_format($number, 2, ',', '.');
		} else {
			return 0;
		}
	}

	public static function numberPrint($number)
	{

		if (!empty($number)) {
			if ($number < 0) {
				$total = $number - $number - $number;
				return '('.number_format($total, 2, ',', '.').')';
			} else {
				return number_format($number, 2, ',', '.');
			}
		} else {
			return '0,00';
		}
	}

	public static function errorSend($type)
	{
		$result = '';
		if ($type === 'user') {
	            $result .= '<div class="alert alert-danger alert-dismissible">';
                $result .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                $result .= 'Username atau Password invalid</div>';
		} elseif ($type === 'token') {
	            $result .= '<div class="alert alert-danger alert-dismissible">';
                $result .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                $result .= '<h4><i class="icon fa fa-ban"></i>Error 550 - Permission denied</h4>';
                $result .= 'Anda kami anggap Robot anda telah melanggar Peraturan</div>';
		}

		return $result;
	}

	public static function notify($type, $text)
	{
		if ($type === 'error') {
            $notify = [
                'title' => 'Errors',
                'text'  => $text,
                'type'  => 'error'
            ];
		} elseif ($type === 'warning'){
			$notify = [
	            'title' => 'Warning',
	            'text'  => $text,
	            'type'  => 'warning',
	        ];
		} elseif ($type === 'success'){
			$notify = [
	            'title' => 'Success',
	            'text'  => $text,
	            'type'  => 'success',
	        ];
		}

		return $notify;
	}

	public static function usergroup($string)
	{
		$result = explode(',', $string);
        return $result;
	}

	public static function provinsi()
	{
   		$prov = DataWilayah::findByIdLevelWil("1");
		$tag  = '<option value="">Pilih Provinsi</option>';
   		foreach ($prov as $key => $value) {
				$tag .= '<option value="' . $value->id . '">' . $value->name . '</option>';
   		}
      
      return $tag;
	}

}