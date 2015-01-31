<?php

class ExcelUploadController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $reader;

	protected $file;

	public function index()
	{
		return View::make('upload');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 *	Process Student File - Insert student info into database
	 */
	public function processStudentFile($fileReader)
	{
		DB::table('sinhvien')->delete();
		// Load student sheet and skip header row
		$sheet = $fileReader->skip(3)->toArray();
		// Extract Student data
		$needed = $sheet[0];
		// Student table
		$table = 'sinhvien';
		// Student record
		$studentRecord = array(
			'masv' 	   => null,
			'ho' 	   => null,
			'ten' 	   => null,
			'ngaysinh' => null,
			'gioitinh' => null,
			'h' 	   => null,
			'noisinh'  => null,
			'ghichu'   => null,
			'malop'    => null,
			'he'       => null,
			'nganh'    => null,
			'khoa'     => null);

		foreach ($needed as $student) {
			$date = explode('/', $student[4]);
			$date = '19' . $date[2] . '-' . $date[1] . '-' . $date[0];

			$studentRecord['masv'] = $student[1];
			$studentRecord['ho'] = $student[2];
			$studentRecord['ten'] = $student[3];
			$studentRecord['ngaysinh'] = date('Y-m-d', strtotime($date));
			$studentRecord['gioitinh'] = $student[5];
			$studentRecord['h'] = $student[6];
			$studentRecord['noisinh'] = $student[7];
			$studentRecord['ghichu'] = $student[8];
			$studentRecord['malop'] = $student[9];
			$studentRecord['he'] = $student[10];
			$studentRecord['nganh'] = $student[11];
			$studentRecord['khoa'] = $student[12];
	
			// dd($studentRecord);
			try {
				DB::table($table)->insert(
					array(
						'masv' 	   => $studentRecord['masv'],
						'ho' 	   => $studentRecord['ho'],
						'ten' 	   => $studentRecord['ten'],
						'ngaysinh' => $studentRecord['ngaysinh'],
						'gioitinh' => $studentRecord['gioitinh'],
						'h' 	   => $studentRecord['h'],
						'noisinh'  => $studentRecord['noisinh'],
						'ghichu'   => $studentRecord['ghichu'],
						'malop'    => $studentRecord['malop'],
						'he'       => $studentRecord['he'],
						'nganh'    => $studentRecord['nganh'],
						'khoa'     =>$studentRecord['khoa']
				));
			} catch (\Illuminate\Database\QueryException $e) {
				dd('SQL Error: '. $e->getMessage());
			}
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$file = Input::file('excelfile');

		if($file === null) {
			Session::flash('message', 'No file uploaded');
			return Redirect::back();
		}

		$reader = Excel::load($file, 'UTF-8');
		// $reader->formatDates(true, 'd-m-Y');

		$filename = $file->getClientOriginalName();

		// Process file based on file name
		// Thong tin sinh vien.xls
		$b = strpos($filename, 'Tai san');

		if(strpos($filename, 'Thong tin sinh vien') !== false) 
			$this->processStudentFile($reader);
		elseif(strpos($filename, 'Tai san') !== false)
			$this->processTaiSanFile($reader);
		elseif(strpos($filename, 'Chuong trinh dao tao') !== false)
			$this->processProgramFile($reader);
		elseif(strpos($filename, 'Chi hoat dong') !== false)
			$this->processChiHoatDongFile($reader);

		Session::flash('message', 'File ' . $filename . ' has been uploaded successfully');
		return Redirect::back();

		// Redirect::to('upload')->with('message','File ' . $filename . ' has been uploaded successfully');
	}

	public function processChiHoatDongFile($reader)
	{	
		// Get all sheets in file
		$worksheet = $reader->skip(4);

		// Process each sheet
		$worksheet->each(function($sheet){
			$title = $sheet->getTitle();

			// Get the year of sheet
			if (strpos($title, '_') !== false) 
				$year = substr($title, strpos($title, '_') + 1, 4);
			else
				$year = substr($title, strpos($title, '-') + 1, 4);

			// Process each row
			foreach($sheet as $row) {
				$needed = $row->toArray();

				// Ignore the empty row
				if ($needed[1] !== null)
				{
					if (strpos($needed[1], '.') !== false) {
						$hoatdong = array(
							'stt' => strval($needed[1]),
							'donvi' => $needed[2],
							'txcanhan' => $needed[3],
							'txcongcong' => $needed[4],
							'txvattu' => $needed[5],
							'txhoinghi' => $needed[6],
							'txcongtacphi' => $needed[7],
							'txthuegvtn' => $needed[8],
							'txthuegvnn' => $needed[9],
							'txchidoanra' => $needed[10],
							'txchidoanvao' => $needed[11],
							'txnvcmtungnganh' => $needed[12],
							'txkhac' => $needed[13],
							'ktxkhtscd' => $needed[14],
							'ktxdtluuhs' => $needed[15],
							'ktxuduanquocte' => $needed[16],
							'ktxctmtqg' => $needed[17],
							'ktxkhac' => $needed[18],
							'nam' => $year
						);

						try {
							Hoatdong::create(array(
								'stt' => $hoatdong['stt'],
								'donvi' => $hoatdong['donvi'],
								'txcanhan' => $hoatdong['txcanhan'],
								'txcongcong' => $hoatdong['txcongcong'],
								'txvattu' => $hoatdong['txvattu'],
								'txhoinghi' => $hoatdong['txhoinghi'],
								'txcongtacphi' => $hoatdong['txcongtacphi'],
								'txthuegvtn' => $hoatdong['txthuegvtn'],
								'txthuegvnn' => $hoatdong['txthuegvnn'],
								'txchidoanra' => $hoatdong['txchidoanra'],
								'txchidoanvao' => $hoatdong['txchidoanvao'],
								'txnvcmtungnganh' => $hoatdong['txnvcmtungnganh'],
								'txkhac' => $hoatdong['txkhac'],
								'ktxkhtscd' => $hoatdong['ktxkhtscd'],
								'ktxdtluuhs' => $hoatdong['ktxdtluuhs'],
								'ktxuduanquocte' => $hoatdong['ktxuduanquocte'],
								'ktxctmtqg' => $hoatdong['ktxctmtqg'],
								'ktxkhac' => $hoatdong['ktxkhac'],
								'nam' => $hoatdong['nam']
							));
						} catch (\Illuminate\Database\QueryException $e) {
							dd('SQL Error: '. $e->getMessage());
						}
					}		
				}
			}

			// echo '<p> Out of sheet </p>';
		});
	}

	public function processProgramFile($r)
	{
		$t = $r->skip(3);

		// sheet
		$sheets = $t->toArray();

		for ($i = 0; $i < count($sheets); $i++) {
			// sheet that is not empty
			if($sheets[$i] != null) {
				$records = $sheets[$i];

				foreach ($records as $record) {
					$program = [
						'stt'		=> $record[1],
						'mamonhoc'  => $record[2],
						'tenmonhoc' => $record[3],
						'tc' => $record[5],
						'bb' => $record[6],
						'cg' => $record[7],
						'ts' => $record[8],
						'lt' => $record[9],
						'bt' => $record[10],
						'th' => $record[11],
						'btl' => $record[12],
						'da' => $record[13],
						'la' => $record[14],
						'hocky' => $record[15],
						'namhoc' => $record[16],
						'khoa' => $record[17],
						'he' => $record[18],
						'nganh' => $record[19]
					];


					// Create model and insert data to Database
					try {
						Program::create(array(
							'stt' => $program['stt'],
							'mamonhoc' => $program['mamonhoc'],
							'tenmonhoc' => $program['tenmonhoc'],
							'tc' => $program['tc'],
							'bb' => $program['bb'],
							'cg' => $program['cg'],
							'ts' => $program['ts'],
							'lt' => $program['lt'],
							'bt' => $program['bt'],
							'th' => $program['th'],
							'btl' => $program['btl'],
							'da' => $program['da'],
							'la' => $program['la'],
							'hocky' => $program['hocky'],
							'namhoc' => $program['namhoc'],
							'khoa' => $program['khoa'],
							'he' => $program['he'],
							'nganh' => $program['nganh']
						));
					} catch (\Illuminate\Database\QueryException $e) {
						dd('SQL Error: '. $e->getMessage());
					}
				}
				
			}
		}
		// echo '<p>' . count($needed) . '</p>';
		// dd($sheet);
	}

	public function processTaiSanFile($reader)
	{
		$property = Property::whereNotNull('donvi');
		$property->delete();

		$reader->skip(3);
		$reader->each(function($sheet) {
			$sheetTitle = $sheet->getTitle();

			// Sheet year
			$year = substr($sheetTitle, strlen($sheetTitle) - 4, 4);

			$needed = $sheet->toArray();
			// Collect Asset (Tai san) array
			foreach ($needed as $asset) {
				if (strpos(strval($asset[1]), '.') === false) 
					continue;
				$stt = strval($asset[1]);
				$donvi = $asset[2];
				$nguyengia1 = $asset[3];
				$haomonnamtruoc1 = $asset[4];
				$khauhao1 = $asset[5];
				$biendong1 = $asset[6];

				$nguyengia2 = $asset[7];
				$haomonnamtruoc2 = $asset[8];
				$khauhao2 = $asset[9];
				$biendong2 = $asset[10];

				$nguyengia3 = $asset[11];
				$haomonnamtruoc3 = $asset[12];
				$khauhao3 = $asset[13];
				$biendong3 = $asset[14];

				Property::create(array(
					'stt' => $stt,
					'donvi' => $donvi,
					'nguyengia' => $nguyengia1,
					'haomonnamtruoc' => $haomonnamtruoc1,
					'khauhao' => $khauhao1,
					'biendong' => $biendong1,
					'loaitaisan' => 1,
					'nam' => $year
				));
				// Dung chung khoa
				
				Property::create(array(
					'stt' => $stt,
					'donvi' => $donvi,
					'nguyengia' => $nguyengia2,
					'haomonnamtruoc' => $haomonnamtruoc2,
					'khauhao' => $khauhao2,
					'biendong' => $biendong2,
					'loaitaisan' => 2,
					'nam' => $year
				));
				// Dung chung truong

				Property::create(array(
					'stt' => $stt,
					'donvi' => $donvi,
					'nguyengia' => $nguyengia3,
					'haomonnamtruoc' => $haomonnamtruoc3,
					'khauhao' => $khauhao3,
					'biendong' => $biendong3,
					'loaitaisan' => 3,
					'nam' => $year
				));
			}
		});
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	function GmtTimeToLocalTime($time) {
	    date_default_timezone_set('UTC');
	    $new_date = date('Y/m/d', strtotime($time));
	    // $new_date->setTimeZone(new DateTimeZone('Asia/Saigon'));
	    // return $new_date->format("Y-m-d");
	    return $new_date;
	}


}
