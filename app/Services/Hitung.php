<?php

namespace App\Services;

/**
* 
*/
class Hitung
{
	public function sekalaFuzzyLower($var){
		$cek_var = explode('/',$var);
		if (count($cek_var)>1) {
			if ($var == '1/1') {
	        	return '1/3';
	        }elseif ($var=='1/2') {
	        	return '1/4';
	        }elseif ($var=='1/3') {
	        	return '1/5';
	        }elseif ($var=='1/4') {
	        	return '1/6';
	        }elseif ($var=='1/5') {
	        	return '1/7';
	        }elseif ($var=='1/6') {
	        	return '1/8';
	        }elseif ($var=='1/7') {
	        	return '1/9';
	        }elseif ($var=='1/8') {
	        	return '1/9';
	        }elseif ($var=='1/9') {
	        	return '1/9';
	        }
		}else{
			if ($var == 1 || $var == 2 || $var ==3) {
		        return 1;
	        }elseif ($var==4) {
	        	return 2;
	        }elseif ($var==5) {
	        	return 3;
	        }elseif ($var==6) {
	        	return 4;
	        }elseif ($var==7) {
	        	return 5;
	        }elseif ($var==8) {
	        	return 6;
	        }elseif ($var==9) {
	        	return 7;
	        }
		}
    }

    public function sekalaFuzzyMiddle($var){
    	$cek_var = explode('/',$var);
		if (count($cek_var)>1) {
			if ($var == '1/1') {
	        	return '1/1';
	        }elseif ($var=='1/2') {
	        	return '1/2';
	        }elseif ($var=='1/3') {
	        	return '1/3';
	        }elseif ($var=='1/4') {
	        	return '1/4';
	        }elseif ($var=='1/5') {
	        	return '1/5';
	        }elseif ($var=='1/6') {
	        	return '1/6';
	        }elseif ($var=='1/7') {
	        	return '1/7';
	        }elseif ($var=='1/8') {
	        	return '1/8';
	        }elseif ($var=='1/9') {
	        	return '1/9';
	        }
    	}else{
			if ($var == 1) {
	        	return 1;
	        }elseif ($var==2) {
	        	return 2;
	        }elseif ($var==3) {
	        	return 3;
	        }elseif ($var==4) {
	        	return 4;
	        }elseif ($var==5) {
	        	return 5;
	        }elseif ($var==6) {
	        	return 6;
	        }elseif ($var==7) {
	        	return 7;
	        }elseif ($var==8) {
	        	return 8;
	        }elseif ($var==9) {
	        	return 9;
	        }
    	}
    }

    public function sekalaFuzzyUpper($var, $inverse=''){
    	$cek_var = explode('/',$var);
		if (count($cek_var)>1) {
			if ($var == '1/1' || $var=='1/2' || $var=='1/3') {
	        	return '1';
	        }elseif ($var=='1/4') {
	        	return '1/2';
	        }elseif ($var=='1/5') {
	        	return '1/3';
	        }elseif ($var=='1/6') {
	        	return '1/4';
	        }elseif ($var=='1/7') {
	        	return '1/5';
	        }elseif ($var=='1/8') {
	        	return '1/6';
	        }elseif ($var=='1/9') {
	        	return '1/7';
	        }

    	}else{
			if ($var == 1) {
	        	return 3;
	        }elseif ($var==2) {
	        	return 4;
	        }elseif ($var==3) {
	        	return 5;
	        }elseif ($var==4) {
	        	return 6;
	        }elseif ($var==5) {
	        	return 7;
	        }elseif ($var==6) {
	        	return 8;
	        }elseif ($var==7) {
	        	return 9;
	        }elseif ($var==8) {
	        	return 9;
	        }elseif ($var==9) {
	        	return 9;
	        }
    	}
    }

    public function setBagi($var){
    	$var_cek=explode('/',$var);
    	if (count($var_cek)>1) {
    		return $var_cek[0]/$var_cek[1];
    	}else{
    		return $var;
    	}
    }

    public function table_vektor($m2,$m1,$l1=0,$u2=0){
    	if ($m2>=$m1) {
    		return 1;
    	}elseif($l1>=$u2){
    		return 0;
    	}else{
    		return round(($l1-$u2)/($m2-$u2)-($m1-$l1),6);
    	}

    	//echo "M1 $m1 == M2 $m2 == L $l1 == U $u2";
    }
}