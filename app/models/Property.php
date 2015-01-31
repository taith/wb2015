<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Property extends Eloquent {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'taisan';

	public $timestamps = false;

	public $donvi;

	public $nguyengia;

	public $haomonnamtruoc;

	public $khauhao;

	public $biendong;

	public $loaitaisan;

	public $nam;

	protected $fillable = array('stt', 'donvi', 'nguyengia', 'haomonnamtruoc', 
								'khauhao', 'biendong', 'loaitaisan', 'nam');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');

}
