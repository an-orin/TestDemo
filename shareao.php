@system('clear');

$usag = "Mozilla/5.0 (Linux; Android 8.1.0; CPH1912) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36";
$nen_do ="\033[41m" ;
$nen_luc ="\033[42m" ;
$nen_vang ="\033[43m" ;
$nen_bien ="\033[46m" ;
$nen_trang ="\033[47m" ;
////
$nen_4 ="\033[45m" ;
$duoi = "\033[0m";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay=`date "+%d/%m/%Y"`;
$Gio=`date "+%H:%M"`;
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$BGreen="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;33m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.1.4472.202 Mobile Safari/537.36";
$dp_tool = $do."[".$trang ."=.=".$do."] ".$trang."=>";
$van = $do."[".$trang ."=.=".$do."] ".$trang."=>";
$k = "0";
$vt="0";
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SHARE ẢO COOKIE
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
";
echo $logo;

$useragent = 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36';
echo $dp_tool.$luc."Nhập ID Bài viết : \033[1;33m";
$id = trim(fgets(STDIN));
echo $dp_tool.$luc."Chạy Bao Nhiêu Share Thì Dừng : \033[1;33m";
$dung= trim(fgets(STDIN));
while(true){
echo $dp_tool.$luc."Nhập Cookie Facebook : \033[1;33m";
$ck = trim(fgets(STDIN));
echo "\e[1;31m".str_repeat('──', 32)."\n";
sleep(3);
$tk = laytoken($ck, $useragent);
if ( $tk == "die" ){
	echo $van." Cookie Die Rồi \n";
	continue;
}else{
	break;
}
}
while(true){
$share = share($tk,$id,$ck);
$id_s = $share["id"] ;
if ( !$id_s ){
	echo $van." Share Thất Bại Rồi Kiểm Tra Acc Hoặc ID Bài Viết \n";
	
}else{
$gio = date("H:i");
$tt = $tt+1;
echo "".$do." | ".$BBlue.$tt.$do." | ".$luc.$gio.$do." | ".$trang."SHARE".$do." | ".$vang.$id_s.$do." | \n";
if ( $tt == $dung ){
	echo $van." Đã Chạy Hoàn Thành $tt Share \n";
	exit;
}
}
}

function laytoken($cookie, $useragent) {
    $head= array("Connection: keep-alive","Keep-Alive: 300","authority: business.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
$ch=curl_init();
	curl_setopt_array($ch , array(
		CURLOPT_URL => "https://business.facebook.com/business_locations",
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_COOKIE => $cookie,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = curl_exec($ch);
	curl_close($ch);
$access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];
if(strlen($access_token) > 5){
	return $access_token;
} else {
	return 'die';
}
}

function share($tk,$id,$ck) {
 $url = "https://graph.facebook.com/me/feed?link=https://m.facebook.com/".$id."&published=0&access_token=".$tk;
 
 
 $tsm = array (
 'accept: */*',
        'accept-encoding: gzip, deflate',
        'connection: keep-alive',
        'content-length: 0',
        'cookie:'.$ck,
        'host: graph.facebook.com',
 );
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
   return $js;
}