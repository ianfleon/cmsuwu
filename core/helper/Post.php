<?php

class Post {

	public static function all()
	{
		$data = [
			[
			'judul' => 'Belajar membuat blog dengan CMSUWU',
			'isi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak'],
			[
			'judul' => 'Cara membuat kue kering',
			'isi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak']
		];

		return $data;
	}

	public static function current()
	{
		return self::all()[0];
	}

}