<?php

// use Illuminate\Auth\UserTrait;
// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableTrait;
// use Illuminate\Auth\Reminders\RemindableInterface;

class Program extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'chuongtrinhdaotao';

	public $primarKey = 'mamonhoc';

	public $timestamps = false;

	public $mamonhoc;

	public $tenmonhoc;

	public $tc;

	public $bb;

	public $cg;

	public $ts;

	public $lt;

	public $bt;

	public $th;

	public $btl;

	public $da;

	public $la;

	public $hocky;

	public $namhoc;

	public $khoa;

	public $he;

	public $nganh;

	protected $fillable = array('stt', 'mamonhoc', 'tenmonhoc', 'tc', 'bb', 
								'cg', 'ts', 'lt', 'bt', 'th', 'btl', 'da', 
								'la', 'hocky', 'namhoc', 'khoa', 'he', 'nganh');
	// protected $fillable = array('stt', 'donvi', 'nguyengia', 'haomonnamtruoc', 
	// 							'khauhao', 'biendong', 'loaitaisan', 'nam');
}
