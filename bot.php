<?php 


//Control de File cfg.json
$cfg="config.json";
if(file_exists($cfg)){
$config=json_decode(file_get_contents($cfg),true);
$name=$config["name"];}

//insertar data
while ($name==null){
	echo $p."\t[ at Sl Android ] \n\n";
	system ('clear');
   $name=readline("โข [ your name ]  ");
   echo"\n";
 if($name!=null){
	 $save=true;}
    else{
   echo $r."[error]=[Usted ingreso datos incorrectos ] \n",exit;}}

//escritura data  file json
if($save){
$data=json_encode([
"VESAK CARD CREATED BY Sl Android",
"name"=>$name,]);
file_put_contents($cfg,$data);}

//Control de File cfg.json
$cfg="config.json";
if(file_exists($cfg)){
$config=json_decode(file_get_contents($cfg),true);
$name=$config["name"];}
system ('clear');
system('gem install lolcat');
system('apt install toilet -y');
system('pkg install sl');
system('sl');
/*======Colors======*/
//$red = "\033[1;31m";
//$green = "\033[1;32m";



echo   " \033[1;31m-----------------------------------------------------------------
: + - \ | / - \ | / - \ | / - \ | / - \ | / - \ | / - \ | / - + :
: | <-------------------------------------------------------> | :
: / :                           \033[1;33m2021       \033[1;31m                 : \ :
: - :                                                       : - :
: \ :                                                       : / :
: | :                     \033[1;33m๐๐๐๐๐ ๐๐๐๐๐ ๐๐๐     \033[1;31m              : | :
: / :                                                       : \ :
: - :                                   \033[1;34mเถถเทเถฏเทเถฏเถ เทเถปเถซเถฑเท\033[1;31m           : - :
: \ :                                        \033[1;34mเถเถ เทเถ เทเถธเท\033[1;31m          : / :
: | :                                                       : | :
: / :                                                       : \ :
: - :  \033[1;36m๐๐ฒ : ๐๐๐ณ๐๐ซ         \033[1;31m                                  : - :
: \ : \033[1;36m๐ญ๐จ : $name     \033[1;31m                                      : / :
: | <-------------------------------------------------------> | :
: + - / | \ - / | \ - / | \ - / | \ - / | \ - / | \ - / | \ - + :
----------------------------------------------------------------  \n";

system("toilet --width 30 -f term -F border --gay 'ย    Sl   Androidย ย ย ย  'ย | lolcat");


