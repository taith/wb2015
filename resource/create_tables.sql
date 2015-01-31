-- Bang Thu Nhap Giang Vien
CREATE TABLE `thunhapgiangvien` (
	`stt` INT NOT NULL,
	`macc1` VARCHAR(10),
	`magv` VARCHAR(10),
	`hoten` VARCHAR(50),
	`macc2` VARCHAR(10),
	`hesoluong` DECIMAL(5,4),
	`ptmggiangday` DECIMAL(3,2),
	`ckhoanbangluong` FLOAT,
	`tienvuotgio` FLOAT,
	`hdongnckh` FLOAT,
	`bsoangiaotrinh` FLOAT,
	`ttkhac` FLOAT,
	`hocky` SMALLINT,
	CONSTRAINT thunhapgiangvien_pk PRIMARY KEY (`macc1`)
);

-- Bang Thong tin Sinh Vien
CREATE TABLE `sinhvien`
(
	`masv` INT NOT NULL,
	`ho` VARCHAR(20),
	`ten` VARCHAR(15),
	`ngaysinh` DATE,
	`gioitinh` TINYINT,
	`h` CHAR(5),
	`noisinh` VARCHAR(50),
	`ghichu` VARCHAR(50),
	`malop` VARCHAR(20),
	`he` VARCHAR(50),
	`nganh` VARCHAR(50),
	`khoa` VARCHAR(50),

	CONSTRAINT sinhvien_pk PRIMARY KEY (`masv`)
);

CREATE TABLE `taisan` (
	`stt` INT NOT NULL,
	`donvi` VARCHAR(50),
	`nguyengia` DECIMAL(15,4),
	`haomonnamtruoc` DECIMAL(15,4),
	`khauhoa` DECIMAL(15,4),
	`biendong` DECIMAL(15,4),
	`loaitaisan` TINYINT, -- 1: Dung rieng bo mon, 2: Dung chung voi khoa, 3: Dung chung toan truong
	`nam` INT,
	CONSTRAINT taisan_pk PRIMARY KEY (`stt`)
);

CREATE TABLE `monhocdangky` 
(
	`stt` INT NOT NULL,
	`masv` INT NOT NULL,
	`mamonhoc` VARCHAR(10) NOT NULL,
	`nhom` TINYINT,
	`to` TINYINT,
	`tenmonhoc` VARCHAR(50),
	`dvh` DECIMAL(2,1),
	`hoten` VARCHAR(50),
	`ngaysinh` DATE,
	`gioitinh` TINYINT,
	`hocky` TINYINT,
	`namhoc` VARCHAR(10),
	CONSTRAINT monhocdangky_pk PRIMARY KEY (`masv`, `mamonhoc`)

);

CREATE TABLE `khoiluonggiangday` 
(
	`tengv` VARCHAR(50) NOT NULL,
	`hocvi` VARCHAR(10),
	`magv` VARCHAR(10) NOT NULL,
	`bomon` VARCHAR(50),
	`stt` INT,
	`loai` VARCHAR(5),
	`mamonhoc` VARCHAR(10),
	`diengiai` VARCHAR(50),
	`nhom` TINYINT,
	`toth` TINYINT,
	`malop` VARCHAR(10),
	`siso` DECIMAL(3,0),
	`tiet` DECIMAL(3,1),
	`cnhat` DECIMAL(3,1),
	`hesolop` DECIMAL(3,1),
	`hesomh` DECIMAL(3,1),
	`hesold` DECIMAL(3,1),
	`tietqd` DECIMAL(3,1),
	`hocky` TINYINT,
	`namhoc` VARCHAR(10),
	CONSTRAINT khoiluonggiangday_pk PRIMARY KEY (`magv`, `malop`)

);

CREATE TABLE `chuongtrinhdaotao` 
(
	`stt` INT NOT NULL,
	`mamonhoc` VARCHAR(10),
	`tenmonhoc` VARCHAR(50),
	`tc` INT,
	`bb` TINYINT,
	`cg` TINYINT,
	`ts` INT,
	`lt` TINYINT,
	`bt` TINYINT,
	`btl` TINYINT,
	`da` TINYINT,
	`la` TINYINT,
	`hocky` TINYINT,
	`namhoc` VARCHAR(10),
	`khoa` VARCHAR(15),
	`he` VARCHAR(50),
	`nganh` VARCHAR(80),
	
	CONSTRAINT chuongtrinhdaotao_pk PRIMARY KEY (`mamonhoc`)

);

CREATE TABLE `chihoatdong` (
	`stt` INT NOT NULL,
	`sstt` VARCHAR(4) NOT NULL,
	`donvi` VARCHAR(50),
	-- Chi thuong xuyen
	`txcanhan` DECIMAL(15,4),
	`txcongcong` DECIMAL(15,4),
	`txvattu` DECIMAL(15,4),
	`txthongtin` DECIMAL(15,4),
	`txhoinghi` DECIMAL(15,4),
	`txcongtacphi` DECIMAL(15,4),
	`txthuegvtn` DECIMAL(15,4),
	`txthuegvnn` DECIMAL(15,4),
	`txchidoanra` DECIMAL(15,4),
	`txchidoanvao` DECIMAL(15,4),
	`txnvcmtungnganh` DECIMAL(15,4),
	`txkhac` DECIMAL(15,4),

	-- Chi khong thuong xuyen
	`ktxkhtscd` DECIMAL(15,4),
	`ktxdtluuhs` DECIMAL(15,4),
	`ktxuduanquocte` DECIMAL(15,4),
	`ktxctmtqg` DECIMAL(15,4),
	`ktxkhac` DECIMAL(15,4),
	`nam` INT,
	CONSTRAINT thunhapgiangvien_pk PRIMARY KEY (`stt`, `sstt`)
);

ALTER TABLE `chihoatdong` CONVERT TO CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';
ALTER TABLE `chuongtrinhdaotao` CONVERT TO CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';
ALTER TABLE `sinhvien` CONVERT TO CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';
ALTER TABLE `thunhapgiangvien` CONVERT TO CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';
ALTER TABLE `taisan` CONVERT TO CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';
ALTER TABLE `khoiluonggiangday` CONVERT TO CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';
ALTER TABLE `monhocdangky` CONVERT TO CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';
