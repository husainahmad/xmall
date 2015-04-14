<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('bulan_list'))
{
	function bulan_list($kosong = 0)
	{
		$CI =& get_instance();
		$CI->lang->load('calendar');

		if($kosong) $result[0] = 'Semua bulan';
		$result['01'] = $CI->lang->line('cal_january1');
		$result['02'] = $CI->lang->line('cal_february1');
		$result['03'] = $CI->lang->line('cal_march1');
		$result['04'] = $CI->lang->line('cal_april1');
		$result['05'] = $CI->lang->line('cal_may1');
		$result['06'] = $CI->lang->line('cal_june1');
		$result['07'] = $CI->lang->line('cal_july1');
		$result['08'] = $CI->lang->line('cal_august1');
		$result['09'] = $CI->lang->line('cal_september1');
		$result['10'] = $CI->lang->line('cal_october1');
		$result['11'] = $CI->lang->line('cal_november1');
		$result['12'] = $CI->lang->line('cal_december1');
		
		return $result;
	}
}

if ( ! function_exists('bln_list'))
{
	function bln_list($kosong = 0)
	{
		$CI =& get_instance();
		$CI->lang->load('calendar');

		if($kosong) $result[0] = 'Semua bulan';
		$result['01'] = $CI->lang->line('cal_jan');
		$result['02'] = $CI->lang->line('cal_feb');
		$result['03'] = $CI->lang->line('cal_mar');
		$result['04'] = $CI->lang->line('cal_apr');
		$result['05'] = $CI->lang->line('cal_may');
		$result['06'] = $CI->lang->line('cal_jun');
		$result['07'] = $CI->lang->line('cal_jul');
		$result['08'] = $CI->lang->line('cal_aug');
		$result['09'] = $CI->lang->line('cal_sep');
		$result['10'] = $CI->lang->line('cal_oct');
		$result['11'] = $CI->lang->line('cal_nov');
		$result['12'] = $CI->lang->line('cal_dec');
		
		return $result;
	}
}

if ( ! function_exists('nama_bulan'))
{
	function nama_bulan($bulan)
	{
		$array_bulan = bulan_list();
		if(strlen($bulan) == 1) $bulan = '0'.$bulan;
		return $array_bulan[$bulan];
	}
}

if ( ! function_exists('nama_bln'))
{
	function nama_bln($bulan)
	{
		$array_bulan = bln_list();
		if(strlen($bulan) == 1) $bulan = '0'.$bulan;
		return $array_bulan[$bulan];
	}
}

if ( ! function_exists('to_rupiah'))
{
	function to_rupiah($value)
	{
		if($value < 0)
		{
			return '( Rp '.number_format(abs($value), 0, ',', '.').' )';
		}
		else
		{
			return 'Rp '.number_format($value, 0, ',', '.').'  ';
		}
	}
}

if ( ! function_exists('format_rupiah'))
{
	function format_rupiah($value)
	{
		if($value < 0)
		{
			return '( '.number_format(abs($value), 2, ',', '.').' )';
		}
		else
		{
			return '  '.number_format($value, 2, ',', '.').'  ';
		}
	}
}

if ( ! function_exists('prepare_numeric'))
{
	function prepare_numeric($value, $default = null)
	{
		if(isset($value) && $value != '')
			return floatval(str_replace('.','',$value)) * 1;
		return $default;
	}
}

if ( ! function_exists('format_date'))
{
	function format_date($date, $style='d/m/Y')
	{
		if (isset($date))
			return date($style, strtotime( $date ) );
		return '';
	}
}

if ( ! function_exists('prepare_date'))
{
	function prepare_date($date)
	{
		if (isset($date) && $date != '')
		{
			return implode( "-", array_reverse( explode("/", $date ) ) );
		}
		else
		{
			return null;
		}
	}
}
