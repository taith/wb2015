<?php

// use Illuminate\Auth\UserTrait;
// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableTrait;
// use Illuminate\Auth\Reminders\RemindableInterface;

class HoatDong extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'chihoatdong';

	// public $primarKey = 'stt';

	public $timestamps = false;

	public $donvi;

	public $txcanhan;

	public $txcongcong;

	public $txvattu;

	public $txhoinghi;

	public $txcongtacphi;

	public $txthuegvtn;

	public $txthuegvnn;

	public $txchidoanra;

	public $txchidoanvao;

	public $txnvcmtungnganh;

	public $txkhac;

	public $ktxkhtscd;

	public $ktxdtluuhs;

	public $ktxuduanquocte;

	public $ktxctmtqg;

	public $ktxkhac;

	public $nam;

	protected $fillable = array('stt', 'donvi','txcanhan','txcongcong','txvattu','txhoinghi','txcongtacphi','txthuegvtn','txthuegvnn','txchidoanra',
							'txchidoanvao','txnvcmtungnganh','txkhac','ktxkhtscd','ktxdtluuhs','ktxuduanquocte','ktxctmtqg','ktxkhac','nam');
}
