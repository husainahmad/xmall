<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fungsi
{

	function Fungsi(){
		$this->CI =& get_instance();
    }
	
	function formatTanggal($tanggal) {
		if ($tanggal == '0000-00-00') { 
			return ''; 
		} else {
			$tgl = substr($tanggal,8,2);
			$bln = $this->bulan(substr($tanggal,5,2));
			$thn = substr($tanggal,0,4);
			return $tgl.' '.$bln.' '.$thn;
		}
	}
		
	function bulan($bulan) {
		switch($bulan) {
			case "1"	:	$NamaBulan="Januari"; break;
			case "2"	:	$NamaBulan="Februari"; break;
			case "3"	:	$NamaBulan="Maret"; break;
			case "4"	:	$NamaBulan="April"; break;
			case "5"	:	$NamaBulan="Mai"; break;
			case "6"	:	$NamaBulan="Juni"; break;
			case "7"	:	$NamaBulan="Juli"; break;
			case "8"	:	$NamaBulan="Agustus"; break;
			case "9"	:	$NamaBulan="September"; break;
			case "10"	:	$NamaBulan="Oktober"; break;
			case "11"	:	$NamaBulan="November"; break;
			case "12"	:	$NamaBulan="Desember"; break;
		}		
		return $NamaBulan;
	}

	function formatHari($hari) {
		switch($hari) {
			case "Sun"	:	$NamaHari="Minggu"; break;
			case "Mon"	:	$NamaHari="Senin"; break;
			case "Tue"	:	$NamaHari="Selasa"; break;
			case "Wed"	:	$NamaHari="Rabu"; break;
			case "Thu"	:	$NamaHari="Kamis"; break;
			case "Fri"	:	$NamaHari="Jumat"; break;
			case "Sat"	:	$NamaHari="Sabtu"; break;
		}		
		return $NamaHari;
	}


}