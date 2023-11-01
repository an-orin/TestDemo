@system('clear');
date_default_timezone_set('Asia/Ho_Chi_Minh');
error_reporting(0);
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1200;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Config ]***/
$_SESSION['version'] = "9.5";
$_SESSION['shop'] = "Shopducphat.com";
/***[ Đánh Dấu Bản Quyền ]***/
$dp_tool = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$ndp = $do."[".$trang ."=.=".$do."] ";
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
$useragent = "Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36";
/***[ Banner ]***/
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL CMT ĐẠO FB
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────
";



$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";
system('clear');

echo $logo;
$khock=[];
echo $dp_tool.$luc."Bạn Muốn Nhập Bao Nhiêu Cookie\033[1;37m: $vang";
       $slg = trim(fgets(STDIN));
for($a=1;$a<=$slg;$a++){
echo "\e[1;37m".str_repeat('= ', 35)."\n";
echo $dp_tool.$luc."Vui Lòng Nhập Cookie Thứ \033[1;37m$a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khock,$nhapck); }
$soacc=count($khock);
echo "\e[1;37m".str_repeat('= ', 35)."\n";
$khoCMT=[];
echo $dp_tool.$luc."Bạn Muốn Nhập Bao Nhiêu Nội Dung\033[1;37m: $vang";
       $snd = trim(fgets(STDIN));
for($b=1;$b<=$snd;$b++){
echo "\e[1;37m".str_repeat('= ', 35)."\n";
echo $dp_tool.$luc."Nhập Nội Dung Thứ \033[1;37m$b: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoCMT,$nhapck); }
$soacc=count($khoCMT);
echo "\e[1;37m".str_repeat('= ', 35)."\n";
echo $dp_tool.$luc."Nhập Delay\033[1;37m: $vang";
       $delay=trim(fgets(STDIN));
echo $dp_tool.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Chuyển Acc\033[1;37m: $vang";
   $yyy=trim(fgets(STDIN));
echo $dp_tool.$luc."Nhập Số Lần Spam\033[1;37m: $vang";
       $stop=trim(fgets(STDIN));
echo "\e[1;37m".str_repeat('= ', 35)."\n";
$kho_ID = [];
while (true){
       for($xz=0;$xz<count($khock);$xz++){
$cookie = $khock[$xz];
$access_token = laytoken($cookie);
if ( $access_token == "2") { echo $do." Cookie Die.                   \n"; }

$page = thongtin('me', $cookie, $useragent);
$tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
$idfb = explode('%',explode('?lst=', $page)[1])[0];

echo $vang."ID FB: ".$luc.$idfb.$do." | ".$vang."Tên FB: ".$luc.$tenfb."".$res."\n";
echo "\e[1;37m".str_repeat('= ', 35)."\n"; 
$spam=0;
while (true){
if ($spam == 1) {break; }
 foreach ( $khoCMT as $msg ){
   $list = gethome($cookie);
   $link2 = explode('">Bày tỏ cảm xúc',explode('/reactions/picker/?',$list)[1])[0];
   $url = 'https://mbasic.facebook.com/reactions/picker/?'.str_replace('&amp;','&',$link2);
   $id = explode('&origin_uri',explode('?ft_id=',$url)[1])[0];
if ($id !== '' ){
       $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    $get = json_decode($access);
       $g = $get->error;
   if ($get -> {'code'} == 190) {
                    echo "Cookie Die !!?!                  \n";
                    array_splice($khock,$xz,1);
                    $spam = 1; break; }
    if ($get -> {'code'} == 368) {
                    echo "\033[1;91m".$get -> {'message'};
                    echo "\n";
                    $spam = 1; break;}
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
$dem++;
echo "\033[1;31m[\033[1;33m$dem\033[1;31m] \033[1;31m| \033[1;36m".date('H:i:s')."\033[1;31m | \033[1;37m$id \033[1;31m| \033[1;37m$msg \n";
if ($dem >= $stop ){ echo $luc." Đã Spam Thành Công \033[1;37m$dem \033[1;32mBài Viết  \n"; exit; }
    delay($delay);
 if($dem % $yyy == 0){$spam = 1; break; }
} else { echo $do." Đang Lướt Tìm Bài Viết.                      \r"; }
}
}
} 
}
function laytoken($cookie){
  /* Copyright © 2021 - 2022 : Nguyễn Đức Phát */
    $head= array("Connection: keep-alive","Keep-Alive: 300","authority: m.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
    $ch=curl_init();
  curl_setopt_array($ch , array(
    CURLOPT_URL => "https://business.facebook.com/business_locations",
    CURLOPT_USERAGENT => $_SESSION['useragent'],
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
    $access_token = 'EAA'.explode('","', explode('EAA', $access)[1])[0];
    if(strlen($access_token) > 5){
      return $access_token;
    } else {
      return '2';
    }
}
function thongtin($id, $cookie, $useragent)
{

    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/' . $id . '/about';
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    $page1 = json_decode($page);

    return $page;
}
function gethome($cookie){
/* Copyright © 2021 - 2022 : Nguyễn Đức Phát */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/home.php');
$head[] = "Connection: keep-alive";
       $head[] = "Keep-Alive: 300";
       $head[] = "authority: m.facebook.com";
       $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
       $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
       $head[] = "cache-control: max-age=0";
       $head[] = "upgrade-insecure-requests: 1";
       $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
       $head[] = "sec-fetch-site: none";
       $head[] = "sec-fetch-mode: navigate";
       $head[] = "sec-fetch-user: ?1";
       $head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function delay ($delay){
       for($tt = $delay ;$tt>= 1;$tt--){
}
echo "\r\e[1;95m   ⚡An Orin⚡                       \r";
}

function cmtdao($banner, $dp_tool ){
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}

