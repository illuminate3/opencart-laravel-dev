<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $table = 'language';
	protected $primaryKey = 'language_id';
	const CREATED_AT = 'date_added';
	const UPDATED_AT = 'date_modified';

	static public function current($opencart)
	{
		return Language::where('code', '=', $opencart->session->data['language'])->first();
	}
}
