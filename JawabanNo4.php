<?php
function buyNoodle($tanggal,$b)
{
// asumsi harga mie 10000
	$b=$b/10000;

	if($tanggal%2==1)
	{
		if($tanggal%5==0)
		{
			$i_tiga=0;
			do
			{
				$b=$b/3;
				$i_tiga++;
			
			} 
			while($b%3>1);
			$i_tiga=$i_tiga*5;
			return $b+$i_tiga;		

		}
		else
		{

			$i_tiga=0;
			do
			{
				$b=$b/3;
				$i_tiga++;
			
			} 
			while($b%3>1);
			return $b+$i_tiga;
		}
	}
	elseif($tanggal%2==0)
	{
		if($tanggal%5==0)
		{
			$i_empat=0;
			do
			{
				$b=$b/4;
				$i_empat++;
			
			} 
			while($b%4>1);
			$i_empat=$i_empat*10;
			return $b+$i_empat;		

		}
		else
		{
			$i_empat=0;
			do
			{
				$b=$b/4;
				$i_empat++;
			
			} 
			while($b%4>1);
			return $b+$i_empat;
		}

	}




}
 
 echo round(buyNoodle(25, 90000),-0);

//tgl ganjil 3 mie bonus 1,

//tgal genap 4 mie bonus 1

// tgl kelipatan 5 anggka genap bonus mie kali 10
//tgl kelipatan 5 anggka ganjil bonus mie kali 5


?>

