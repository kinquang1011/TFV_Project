<?php
session_start();
$path = "/home/quangctn/source/TFV_Project/TFV_Project/application/views";
function online($path)
{
    $rip = $_SERVER['REMOTE_ADDR'];
    $sd = time();
    $count = 1;
    $maxu = 1;

    $file1 = "$path/counter/online.log";
    $lines = file($file1);
    $line2 = "";

    foreach ($lines as $line_num => $line)
    {
        if($line_num == 0)
        {
            $maxu = $line;
        }
        else
        {
            $fp = strpos($line,'****');
            $nam = substr($line,0,$fp);
            $sp = strpos($line,'++++');
            $val = substr($line,$fp+4,$sp-($fp+4));
            $diff = $sd-$val;

            if($diff < 300 && $nam != $rip)
            {
                $count = $count+1;
                $line2 = $line2.$line;
            }
        }
    }

    $my = $rip."****".$sd."++++\n";
    if($count > $maxu)
        $maxu = $count;

    $open1 = fopen($file1, "w");
    fwrite($open1,"$maxu\n");
    fwrite($open1,"$line2");
    fwrite($open1,"$my");
    fclose($open1);
    $count=$count;
    $maxu=$maxu+200;

    return $count;
}
///////////////////////
$ip = $_SERVER['REMOTE_ADDR'];

$file_ip = fopen($path.'/counter/ip.txt', 'rb');

while (!feof($file_ip)) $line[]=fgets($file_ip,1024);
for ($i=0; $i<(count($line)); $i++) {
    list($ip_x) = explode("\n",$line[$i]);
    if ($ip == $ip_x) {$found = 1;}
}
fclose($file_ip);

/*if (!($found==1)) {*/
$file_ip2 = fopen($path.'/counter/ip.txt', 'ab');

$line = "$ip\n";
fwrite($file_ip2, $line, strlen($line));
$file_count = fopen($path.'/counter/count.txt', 'rb');
$data = '';
while (!feof($file_count)) $data .= fread($file_count, 4096);
fclose($file_count);
list($today, $yesterday, $total, $date, $days) = explode("%", $data);
if ($date == date("Y m d")) $today++;
else {
    $yesterday = $today;
    $today = 1;
    $days++;
    $date = date("Y m d");
}
$total++;
$line = "$today%$yesterday%$total%$date%$days";

$file_count2 = fopen($path.'/counter/count.txt', 'wb');
fwrite($file_count2, $line, strlen($line));
fclose($file_count2);
fclose($file_ip2);
/*}*/
function today($path)
{
    $file_count = fopen($path.'/counter/count.txt', 'rb');
    $data = '';
    while (!feof($file_count)) $data .= fread($file_count, 4096);
    fclose($file_count);
    list($today, $yesterday, $total, $date, $days) = explode("%", $data);
    return $today;
}
function yesterday($path)
{
    $file_count = fopen($path.'/counter/count.txt', 'rb');
    $data = '';
    while (!feof($file_count)) $data .= fread($file_count, 4096);
    fclose($file_count);
    list($today, $yesterday, $total, $date, $days) = explode("%", $data);
    return $yesterday;
}
function avg($path)
{
    $file_count = fopen($path.'/counter/count.txt', 'rb');
    $data = '';
    while (!feof($file_count)) $data .= fread($file_count, 4096);
    fclose($file_count);
    list($today, $yesterday, $total, $date, $days) = explode("%", $data);
    return $total;
}
?>
<div class="col-xs-12 col-md-3 col-lg-3">
    <div id="myright">
        <h1>
            <p>TFV TƯ VẤN</p>
        </h1>
        <div id="myrightgroup">
            <ul>

                <?php if (count($loadRightItem) < 6) {
                    for ($i = 0; $i < count($loadRightItem); $i++) { ?>
                        <a href='<?php echo base_url() . "home/tin-tuc-danh-muc/" . $loadRightItem[$i]['CodeSubCatalogy'] ?>'
                           class="nounderline">
                            <li><?php echo $loadRightItem[$i]['Name'] ?></li>
                        </a>


                    <?php }
                } else {
                    for ($j = 0; $j < 6; $j++) { ?>
                        <a href='<?php echo base_url() . "home/tin-tuc-danh-muc/" . $loadRightItem[$j]['CodeSubCatalogy'] ?>'
                           class="nounderline">
                            <li><?php print_r($loadRightItem[$j]['Name']) ?></li>
                        </a>
                    <?php }
                } ?>


            </ul>
        </div>

        <h1>
            <p>BÀI VIẾT LIÊN QUAN
            <p>
        </h1>
        <div id="myrightarticle">
            <ul>
                <?php if (count($loadRightArticle) < 5) {
                    for ($i = 0; $i < count($loadRightArticle); $i++) { ?>
                        <a href='<?php echo base_url() . "home/baiviet/" . $loadRightArticle[$i]['ID'] ?>'
                           class="nounderline">
                            <li><?php echo $loadRightArticle[$i]['Title'] ?></li>
                        </a>


                    <?php }
                } else {
                    for ($j = 0; $j < 5; $j++) { ?>
                        <a href='<?php echo base_url() . "home/baiviet/" . $loadRightArticle[$j]['ID'] ?>'
                           class="nounderline">
                            <li><?php print_r($loadRightArticle[$j]['Title']) ?></li>
                        </a>
                    <?php }
                } ?>

            </ul>
        </div>
        <h1>
            <p>LIÊN HỆ
            <p>
        </h1>

        <div id="myrightcontact" >
            <a href="https://facebook.com/dat.quang.31" target="_blank">
                <img src="http://localhost/TFV_Project/public/images/contact.jpg" class=img-responsive" alt="contact" height="253" width="253"> </a>
        </div>

        <div id="counter"  >
            <div class="col-xs-6 col-md-6 col-lg-6" ><h4> <img src="http://localhost/TFV_Project/public/images/online.jpg" width="20px" height="20px"> Online: <?php echo online($path);?></h4> </div>
            <div class="col-xs-6 col-md-6 col-lg-6" ><h4> <img src="http://localhost/TFV_Project/public/images/today.png" width="20px" height="20px"> Hôm nay: <?php echo today($path); ?></h4> </div>
            <div class="col-xs-6 col-md-6 col-lg-6" ><h4> <img src="http://localhost/TFV_Project/public/images/yesterday.png" width="20px" height="20px"> Hôm qua: <?php echo yesterday($path); ?></h4> </div>
            <div class="col-xs-6 col-md-6 col-lg-6" ><h4> <img src="http://localhost/TFV_Project/public/images/total.png" width="20px" height="20px"> Tổng: <?php echo avg($path); ?></h4> </div>
        </div>
    </div>
</div>



