
  
$date = getdate();
$ngay = $date['mday'];
$thang = $date['mon'];
$nam = $date['year'];
$ngayht = strtotime($ngay.'-'.$thang.'-'.$nam);

$tennguoimua = "Key Free";
$ngay1 = "Hôm nay";
$ngay2 = "Ngày Mai";

function kemtrangay(){

global $ngay1;
global $ngay2;
global $check;
global $songay;
global $ngaycon;

$date = getdate();
$ngay = $date['mday'];
$thang = $date['mon'];
$nam = $date['year'];
$ngayht = strtotime($ngay.'-'.$thang.'-'.$nam);
$ngaybd = strtotime($ngay1);
$ngaykt = strtotime($ngay2);
$ngay = abs($ngaykt - $ngaybd);
$songay = floor($ngay / (60*60*24));
$tgngay = abs($ngaykt - $ngayht);
$ngaycon = floor($tgngay / (60*60*24));
if($ngaykt < $ngayht ){
	@system("clear");
	echo "\033[1;31mkey hết hạn";
$check = 3;
exit;}
	if($ngaykt > $ngayht && $ngayht >= $ngaybd)
	{
		@system("clear");
		echo "\033[1;32mThời hạn key: \033[1;37m".$songay." \033[1;32mngày \n";
		echo "\033[1;32mTừ \033[1;37m".$ngay1." \033[1;32mđến \033[1;37m".$ngay2;
		echo "\n\033[1;32mCòn \033[1;37m".$ngaycon."\033[1;32m ngày";
		$check = 2 ; 
		}
	if($ngaykt == $ngayht )
	{
		@system("clear");
		echo "\033[1;32mThời hạn key:\033[1;37m ".$songay." \033[1;32mngày \n";
		echo "\033[1;32mTừ \033[1;37m".$ngay1." \033[1;32mđến \033[1;37m".$ngay2;
		echo "\n\033[1;32m Hết hạn sau hôm nay";
		$check = 2 ;
		}
}


$daucau = "\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> ";
$ip = file_get_contents("https://kiemtraip.com/raw.php");
$thanhngang ="\n\033[1;31m────────────────────────────────────────────────────────────\n";

//
@system("clear");
$check = 1;
while(true){
 $keyfree0 = $ngay;	
if($keyfree0 == 1){
$keyfree = "loptelink.com/nywMCp";
$keyfree1 = "resesetrdtydrxf";
}
if($keyfree0 == 2   ){
$keyfree = "loptelink.com/b7WF7sx";
$keyfree1 = "iggiguiuihiuidf";
}
if($keyfree0 ==   23 ){
$keyfree = "loptelink.com/JgDx3";
$keyfree1 = "iuhoihoibjyyt";
}
if($keyfree0 ==  17  ){
$keyfree = "loptelink.com/BRgg4w";
$keyfree1 = "iuhiuhbvvytytvhvhj";
}
if($keyfree0 ==    31){
$keyfree = "loptelink.com/eKX7K2";
$keyfree1 = "iuhoihoiiiuuhbbuj";
}
if($keyfree0 ==    6){
$keyfree = "loptelink.vip/GIGHE7Z";
$keyfree1 = "kuahkuhiuhoihashiau";
}
if($keyfree0 ==    7){
$keyfree = "loptelink.vip/AqcIw15w";
$keyfree1 = "lljshyyagshhcjascvk";
}
if($keyfree0 ==  8  ){
$keyfree = "loptelink.vip/Je6HY8";
$keyfree1 = "jjshagsdfvvnnn";
}
if($keyfree0 ==   9 ){
$keyfree = "loptelink.vip/W1W5ezK";
$keyfree1 = "iuuashvnvajsjllskjhj";
}
if($keyfree0 ==    10){
$keyfree = "loptelink.vip/KPWZO";
$keyfree1 = "jjnnbbcgcahduajuc";
}
if($keyfree0 ==    11){
	$keyfree = "loptelink.com/jvmm5gg3";
	$keyfree1 = "scvxbfsdaaeadc";
}
if($keyfree0 ==    12){
		$keyfree = "loptelink.com/sANx6aFW";
		$keyfree1 = "slkfsdnvsdnvlsdcl";
}
if($keyfree0 ==    13){
		$keyfree = "loptelink.com/y69dyCNe";
		$keyfree1 = "ahjfnsvsnjsvnsjvskcac";
}
if($keyfree0 ==    14){
		$keyfree = "loptelink.com/H5Nc";
		$keyfree1 = "nmmxjchsbcsjj";
}
if($keyfree0 ==    15){
	$keyfree = "loptelink.com/GiyO";
	$keyfree1 = "mmcjbdcbsudbsivsv";
}
if($keyfree0 ==    16){
$keyfree = "loptelink.com/xC2FbHH";
$keyfree1 = "iugugudsjsdvsdv";
}
if($keyfree0 ==    4){
$keyfree =  "loptelink.com/VjoECAB";
$keyfree1 =  "suihefhiihsvsvijs";
}
if($keyfree0 ==    18){
$keyfree =  "loptelink.com/68xxy";
$keyfree1 =  "woieiehfhc";
}
if($keyfree0 ==    19){
$keyfree =  "loptelink.com/Vv7USx2p";
$keyfree1 =  "euefifvidehsjuwq";
}
if($keyfree0 ==    20){
$keyfree =  "loptelink.com/j12SquGj";
$keyfree1 =  "wuygfhfvsdijsghasfcasi";
}
if($keyfree0 ==    21){
$keyfree =  "loptelink.com/BDB4h";
$keyfree1 =  "wsefiuhsvoisis";
}
if($keyfree0 ==    22){
$keyfree =  "loptelink.com/qpDt";
$keyfree1 =  "YHGygUuyGgGUu";
}
if($keyfree0 ==    3){
$keyfree =  "loptelink.com/OfhJqFzX";
$keyfree1 =  "YUyGUyguGYygYGunhHNB";
}
if($keyfree0 ==    24){
$keyfree =  "loptelink.com/n1gs6whd";
$keyfree1 =  "JHGhBHVHVJHVhvhvhvb";
}
if($keyfree0 ==    25){
$keyfree =  "loptelink.com/nh5OiGg";
$keyfree1 =  "iuHUHhihiHIHIii";
}
if($keyfree0 ==    26){
$keyfree =  "loptelink.com/Al5r";
$keyfree1 =  "yguyivvcbx";
}
if($keyfree0 ==    27){
$keyfree =  "loptelink.com/02ADBckG";
$keyfree1 =  "juygisdcudvhhausc";
}
if($keyfree0 ==    28){
$keyfree =  "loptelink.com/hHomEG";
$keyfree1 =  "fUYUygccYHvvHb";
}
if($keyfree0 ==    29){
$keyfree =  "loptelink.com/MxDmPD";
$keyfree1 =  "iuhiUHIhiuhOHjubjm";
}
if($keyfree0 ==    30){
$keyfree =  "loptelink.com/KFugZY";
$keyfree1 =  "yuGGBmmNN";
}
if($keyfree0 ==    5){
$keyfree =  "loptelink.com/3jDta";
$keyfree1 =  "jNJNJMmLKNjnj";
}
if($keyfree0 ==    32){
$keyfree =  "loptelink.com/dd4kyo";
$keyfree1 =  "knJNjnNnKNknKnKNKN";
}
if($keyfree0 ==    33){
$keyfree =  "loptelink.com/4iHI2";
$keyfree1 =  "KNKJNnMnbgvFc";
}





//
if (file_exists("keytoolfree_anorin.txt")){
$filename = "keytoolfree_anorin.txt";
$fp = fopen($filename, "r");//mở file ở chế độ đọc
 
$contents = fread($fp, filesize($filename));//đọc file
 if($keyfree1 == $contents)
 {
	  fclose($fp);//đóng file
	  $check = 2;

echo $daucau.$luc."Đang xác thực...";

		break;
 }else{
		unlink("keytoolfree_anorin.txt");
	 }
	fclose($fp);
}elseif(!file_exists("keytoolfree_anorin.txt")){
	break;
}
}


if($check == 1)
{


$daucau = "\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> ";
$dodai = strlen($keyfree);
if($dodai == 21){
$khoangtrang = " ";
}
if($dodai == 20){
$khoangtrang = "  ";
}
if($dodai == 19){
$khoangtrang = "   ";
}
if($dodai == 18){
$khoangtrang = "    ";
}
if($dodai == 17){
$khoangtrang = "     ";
}
if($dodai == 16){
$khoangtrang = "      ";
}
if($dodai == 15){
$khoangtrang = "       ";
}
if($dodai == 14){
$khoangtrang = "        ";
}
if($dodai == 13){
$khoangtrang = "         ";
}
if($dodai == 12){
$khoangtrang = "          ";
}
if($dodai == 0){
$khoangtrang = "                      ";
}

$tennguoimua = "Key Free";
$ngay1 = "Hôm nay";
$ngay2 = "Ngày Mai";

$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL VIP FREE
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────\n";
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
@system('clear');
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $daucau.$luc."IP Hiện Tại Của Bạn Là: ".$vang.$ip."\n";
echo $daucau.$luc."Chúc Bạn Ngày Một Ngày Tốt Lành.\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo $daucau.$luc."Key Tool Phải Lấy Lại Mỗi Ngày Nhé \n";
echo $daucau.$luc."Link Key Free: \033[95m".$keyfree.$khoangtrang."\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo $daucau.$luc."Mua Key IB Zalo: \033[1;33m0777374145\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo $daucau.$luc."Nhập Key Đã Mua(Hoặc Key Bạn Đã Vượt Link): \033[1;36m";
$nhapkhoa = trim(fgets(STDIN));
if ($nhapkhoa == $keyfree1){
$check = 2 ; 
if ($check == 2)
{	
echo"\033[1;32mVui Lòng Chờ Giây Lát !";
sleep(2);
$myfile = fopen("keytoolfree_anorin.txt", "w");

$txt = $nhapkhoa;
fwrite($myfile, $txt);    
fclose($myfile);
	}
}



$key1 = "kobtt";
if($nhapkhoa == $key1){
$tennguoimua = "Youtube King Of AOV";
$ngay1 = '01-10-1970';
$ngay2 = '01-10-3000';
}
$key2 = "vytt";
if($nhapkhoa == $key2){
$tennguoimua = "Thanh Vy";
$ngay1 = '24-12-1991';
$ngay2 = '27-12-2021';
}
$key3 = "namtrung12";
if($nhapkhoa == $key3){
$ngay1 = '01-10-2021';
$ngay2 = '30-10-2021';
}
$key4 = "fukokami";
if($nhapkhoa == $key4){
$ngay1 = '01-10-2021';
$ngay2 = '04-10-2021';
}
$key5 = "hoangnhat";
if($nhapkhoa == $key5){
$ngay1 = '01-10-2021';
$ngay2 = '25-10-2021';
}
$key6 = "tranphongandy";
if($nhapkhoa == $key6){
$ngay1 = '01-10-2021';
$ngay2 = '12-11-2021';
}/*
$key7 = "Juscavalli";
if($nhapkhoa == $key7){
$ngay1 = '18-08-2021';
$ngay2 = '08-11-2021';
}*/
$key8 = "vip";
if($nhapkhoa == $key8){
$ngay1 = '26-09-2021';
$ngay2 = '27-10-2021';
}
$key9 = "tranthuong";
if($nhapkhoa == $key9){
$ngay1 = '01-10-2021';
$ngay2 = '30-10-2021';
}



//==============================	





$key22 = "vytt";
if($nhapkhoa == $key22){
$tennguoimua = "Thanh Vy";
$ngay1 = '24-12-1991';
$ngay2 = '27-12-3021';

$date = getdate();
$ngay = $date['mday'];
$thang = $date['mon'];
$nam = $date['year'];
$ngayht = strtotime($ngay.'-'.$thang.'-'.$nam);
$ngaybd = strtotime($ngay1);
$ngaykt = strtotime($ngay2);
$ngay = abs($ngaykt - $ngaybd);
$songay = floor($ngay / (60*60*24));
$tgngay = abs($ngaykt - $ngayht);
$ngaycon = floor($tgngay / (60*60*24));
if($ngaykt < $ngayht ){
	@system("clear");
	echo "\033[1;31mkey hết hạn";

	unlink('filekeyvip.txt');
$check = 3;
exit;
	}
if($ngaykt > $ngayht && $ngayht >= $ngaybd)
{


	@system("clear");
	echo "\033[1;32mThời hạn key: \033[1;37m".$songay." \033[1;32mngày \n";
	echo "\033[1;32mTừ \033[1;37m".$ngay1." \033[1;32mđến \033[1;37m".$ngay2;
	echo "\n\033[1;32mCòn \033[1;37m".$ngaycon."\033[1;32m ngày";
	$check = 2 ; 
	}
if($ngaykt == $ngayht )
{
	@system("clear");
	echo "\033[1;32mThời hạn key:\033[1;37m ".$songay." \033[1;32mngày \n";
	echo "\033[1;32mTừ \033[1;37m".$ngay1." \033[1;32mđến \033[1;37m".$ngay2;
	echo "\n\033[1;32m Hết hạn sau hôm nay";
$check = 2 ;
	}

}

//==============================	





$key19 = "kobtt";
if($nhapkhoa == $key19){
$ngay1 = '18-08-1970';
$ngay2 = '08-11-3000';

$date = getdate();
$ngay = $date['mday'];
$thang = $date['mon'];
$nam = $date['year'];
$ngayht = strtotime($ngay.'-'.$thang.'-'.$nam);
$ngaybd = strtotime($ngay1);
$ngaykt = strtotime($ngay2);
$ngay = abs($ngaykt - $ngaybd);
$songay = floor($ngay / (60*60*24));
$tgngay = abs($ngaykt - $ngayht);
$ngaycon = floor($tgngay / (60*60*24));
if($ngaykt < $ngayht ){
	@system("clear");
	echo "\033[1;31mkey hết hạn";

	unlink('filekeyvip.txt');
$check = 3;
exit;
	}
if($ngaykt > $ngayht && $ngayht >= $ngaybd)
{


	@system("clear");
	echo "\033[1;32mThời hạn key: \033[1;37m".$songay." \033[1;32mngày \n";
	echo "\033[1;32mTừ \033[1;37m".$ngay1." \033[1;32mđến \033[1;37m".$ngay2;
	echo "\n\033[1;32mCòn \033[1;37m".$ngaycon."\033[1;32m ngày";
	$check = 2 ; 
	}
if($ngaykt == $ngayht )
{
	@system("clear");
	echo "\033[1;32mThời hạn key:\033[1;37m ".$songay." \033[1;32mngày \n";
	echo "\033[1;32mTừ \033[1;37m".$ngay1." \033[1;32mđến \033[1;37m".$ngay2;
	echo "\n\033[1;32m Hết hạn sau hôm nay";
$check = 2 ;
	}

}


//==============================	


}
if($check != 2){
kemtrangay();
}

