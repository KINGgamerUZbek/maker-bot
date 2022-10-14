<?php

define('API_KEY',"5526182330:AAFgcQaEF5l123tvmduAlMOJgxdjJ6_U04A"); 
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

$admin = "5012555808"; 


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

function joinchat($chatid){
   global $name, $cmid;
$ch1 = file_get_contents("sozlama/ch1.txt");
$ret = bot("getChatMember",[
         "chat_id"=>"@$ch1",
         "user_id"=>$chatid,
         ]);
$ch2 = file_get_contents("sozlama/ch2.txt");
$ret1 = bot("getChatMember",[
         "chat_id"=>"@$ch2",
         "user_id"=>$chatid,
         ]);
$ch3 = file_get_contents("sozlama/ch3.txt");
$ret2 = bot("getChatMember",[
         "chat_id"=>"@$ch3",
         "user_id"=>$chatid,
         ]);
$ch4 = file_get_contents("sozlama/ch4.txt");
$ret3 = bot("getChatMember",[
         "chat_id"=>"@$ch4",
         "user_id"=>$chatid,
         ]);
$stat = $ret ->result->status;
$stat1 = $ret1 ->result->status;
$stat2 = $ret2 ->result->status;
$stat3 = $ret3 ->result->status;
 if(($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member") and ($stat3=="creator" or $stat3=="administrator" or $stat3=="member")){
        return true;
    } else {
        bot('deleteMessage',[
        'chat_id'=>"chatid",        'message_id'=>$cmid
        ]); 
        bot('sendPhoto',[
        'chat_id'=>$chatid,
        'photo'=>"https://t.me/",
        'caption'=>"🔐 <b>@$ch1 | @$ch2 | @$ch3 | @$ch4 Вы не сможете использовать бота, если не подпишетесь на каналы!</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>" 📢   Подписывайся   📢 ",'url'=>"https://t.me/$Tgraph_uz_news"],
['text'=>" 📢   Подписывайся   📢 ",'url'=>"https://t.me/$stickergram_uzb"]],
[['text'=>" 📢   Подписывайся   📢 ",'url'=>"https://t.me/$uz_foydali_kanal_uz"],
['text'=>" 📢   Подписывайся   📢 ",'url'=>"https://t.me/$pulbepuluz"]],
        [['text'=>"✅ Проверять ✅",'callback_data'=>"tekshir"]]
        ]
        ])
        ]);
        return false;
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$tx = $message->text;
$from_id = $update->message->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;
$reply = $message->reply_to_message->text;

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true,
        ]);

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$cfid = $callback->message->from->id;
$user1 = $message->from->username;
$botname = bot('getme',['UnverstBot'])->result->username;
$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;
$adminuser = "Mars_Coder";
$time=date('H:i',strtotime('0 hour'));
$soat = date("H:i",strtotime("0 hour"));
$sana = date('d.m.Y',strtotime("0 hour"));
$user = file_get_contents("Unknown_Blogger.ids");
$guruh = file_get_contents("pul/guruh.db");
$blocklar = file_get_contents("block.dat");
mkdir("referal");
mkdir("stat");
mkdir("step");
mkdir("user");
mkdir("prouser");
mkdir("botlarim");
mkdir("botlarim/$fid");
mkdir("user/$fid");
mkdir("prouser/$fid");
mkdir("ban");
mkdir("sozlama");
if(!file_exists("referal/$fid.txt")){  
    file_put_contents("referal/$fid.txt","0");
}
if(file_get_contents("stat/stat.txt")){
} else{
file_put_contents("stat/stat.txt", "0");
}
if(file_get_contents("tarif/tarif.txt")){
} else{
file_put_contents("tarif/tarif.txt", "0");
}


$referalsum = file_get_contents("referal/$fid.txt");
$referalid = file_get_contents("referal/$fid.referal");
$referalcid = file_get_contents("referal/$ccid.referal");
$userstep = file_get_contents("step/$fid.txt");

$stat = file_get_contents("stat/usid.txt");
$kanbonmax = file_get_contents("admin/kanbonus.txt");


//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

    
  $home = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"🖥 Управление ботами 🖥"]],
    [['text'=>"👔 Личный кабинет"],['text'=>"💸 Зарабатывать"]],
    [['text'=>"🛒 Магазин ботов"],['text'=>"📋 Информация"]],
    [['text'=>"📨 Администратор"],['text'=>"📊 Статистика"]],
    ]
    ]);


   $panel = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
     [['text'=>"💸 Настройка баланса"],
     ['text'=>"🎁 Настройка бонуса"]],
     [['text'=>"🔐 Настройка блокировки"],
     ['text'=>"📡 Настройки канала"]],
     [['text'=>"📨 Настройки сообщения"],
     ['text'=>"🤖 Настройки бота"]],
     [['text'=>"🔙Назад"],['text'=>"🔝 Главное меню"]],
    ]
    ]);




    $bots = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📱 Top раздел"],
['text'=>"📱 Pro раздел"]],
[['text'=>"📱 Vip раздел"],
['text'=>"📱 Mega раздел"]],
[['text'=>"🔙  Назад"],['text'=>"🔝 Главное меню"]],
]
]);
    
$top = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"📅 Tez kunda..."]],
    [['text'=>"📅 Tez kunda..."]],
    [['text'=>"🔙     Назад"],['text'=>"🔝 Главное меню"]],
    ]
    ]);

$pro = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"🤖 ConstuctorPRO [UZ] V0.4"]],
    [['text'=>"🤖 ConstuctorPRO [RU] V0.4 [Tez kunda...]"]],
    [['text'=>"🔙     Назад"],['text'=>"🔝 Главное меню"]],
    ]
    ]);

$vip = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"💼 SpecialSMM [UZ] V0.4 [Tez kunda...]"]],
    [['text'=>"💼 SpecialSMM [RU] V0.4 [Tez kunda...]"]],
    [['text'=>"🔙     Назад"],['text'=>"🔝 Главное меню"]],
    ]
    ]);



//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

$mega = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"📅 Tez kunda..."]],
    [['text'=>"📅 Tez kunda..."]],
    [['text'=>"🔙     Назад"],['text'=>"🔝 Главное меню"]],
    ]
    ]);


$pulsozla = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
     [['text'=>"💳 Система кошельков"]],
     [['text'=>"💸 Давать деньги"],['text'=>"💸 Умножить деньги"]],
     [['text'=>"💵 Цена ботов"],['text'=>"💵 Реферальная цена"]],
  [['text'=>"🔙 Назад"],['text'=>"🔝 Главное меню"]],
]
]);



if($tx =="💸 Настройка баланса" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать на панель настроек баланса.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$pulsozla,
]);
}


//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

$blok = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"🔒 Блокировка"],['text'=>"🔓 Выйти из блока"]],
  [['text'=>"🔙 Назад"],['text'=>"🔝 Главное меню"]],
]
]);



if($tx =="🔐 Настройка блокировки" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать на панель настройки блокировки.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$blok,
]);
}



$xabar = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"📨 Сообщение 👥"],['text'=>"📨 Сообщение 👤"]],
  [['text'=>"🔙 Назад"],['text'=>"🔝 Главное меню"]],
]
]);



if($tx =="📨 Настройки сообщения" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать в панель настроек сообщений.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$xabar,
]);
}



//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

$bonuschi = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"🎁 Супер бонус 👥"],['text'=>"🎁 Супер бонус 👤"]],
  [['text'=>"🔙 Назад"],['text'=>"🔝 Главное меню"]],
]
]);



if($tx =="🎁 Настройка бонуса" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать в панель настройка бонуса.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$bonuschi,
]);
}




$bott = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"🟢 Включить"],['text'=>"🔴 Закрывать"]],
  [['text'=>"🔙 Назад"],['text'=>"🔝 Главное меню"]],
]
]);



if($tx =="🤖 Настройки бота" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать в панель настройки бота.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$bott,
]);
}




$yordam = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⭐ Оценка бота"],['text'=>"🏆 Рейтинг"]],
[['text'=>"📖 Руководство"],['text'=>"📹 Видео урок"]],
[['text'=>"⚙ Команды бота"],['text'=>"ℹ О боте"]],
  [['text'=>"🔙Назад"],['text'=>"🔝 Главное меню"]],
]
]);


   $baho = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"⭐"]],
    [['text'=>"⭐⭐"]],
    [['text'=>"⭐⭐⭐"]],
    [['text'=>"⭐⭐⭐⭐"]],
    [['text'=>"⭐⭐⭐⭐⭐"]],
    [['text'=>"🔙   Назад"],['text'=>"🔝 Главное меню"]],
    ]
    ]);

//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.


if($tx == "⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@$botname Спасибо за оценку!</b>",
'parse_mode'=>"html",
'reply_markup'=>$baho,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>⭐ Они оценили бота.

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 👨‍💼 Пользователь: $name
 👑 Имена пользователей: @$user1
 🆔️ Идентификационный номер: <a href='tg://user?id=$uid'> $uid </a>

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


 ⭐ Рейтинг: ⭐


 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
'parse_mode'=>"html",
]);
}



if($tx == "⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@$botname Спасибо за оценку!</b>",
'parse_mode'=>"html",
'reply_markup'=>$baho,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>⭐ Они оценили бота.

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 👨‍💼 Пользователь: $name
 👑 Имена пользователей: @$user1
 🆔️ Идентификационный номер: <a href='tg://user?id=$uid'> $uid </a>

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


 ⭐ Рейтинг: ⭐⭐


 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
'parse_mode'=>"html",
]);
}


//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@$botname Спасибо за оценку!</b>",
'parse_mode'=>"html",
'reply_markup'=>$baho,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>⭐ Они оценили бота.

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 👨‍💼 Пользователь: $name
 👑 Имена пользователей: @$user1
 🆔️ Идентификационный номер: <a href='tg://user?id=$uid'> $uid </a>

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


 ⭐ Рейтинг: ⭐⭐⭐


 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
'parse_mode'=>"html",
]);
}



if($tx == "⭐⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@$botname Спасибо за оценку!</b>",
'parse_mode'=>"html",
'reply_markup'=>$baho,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>⭐ Они оценили бота.

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 👨‍💼 Пользователь: $name
 👑 Имена пользователей: @$user1
 🆔️ Идентификационный номер: <a href='tg://user?id=$uid'> $uid </a>

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


 ⭐ Рейтинг: ⭐⭐⭐⭐


 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
'parse_mode'=>"html",
]);
}


if($tx == "⭐⭐⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@$botname Спасибо за оценку!</b>",
'parse_mode'=>"html",
'reply_markup'=>$baho,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>⭐ Они оценили бота.

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 👨‍💼 Пользователь: $name
 👑 Имена пользователей: @$user1
 🆔️ Идентификационный номер: <a href='tg://user?id=$uid'> $uid </a>

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


 ⭐ Рейтинг: ⭐⭐⭐⭐⭐


 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
'parse_mode'=>"html",
]);
}




  if($text=="💵 Цена ботов" and $cid==$admin){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>"<b>💸 Чтобы настроить цену ботов, отправьте следующее представление:

  Пример:

</b> <code>/bot-500</code>",
  'parse_mode'=>"html",
  'reply_markup'=>$rpl,
  ]);
  }
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

  if(mb_stripos($text, "/bot-")!==false){
    $m1 = explode("-",$text);
   $m2 = $m1[1];
   file_put_contents("bot.txt","$m2");
   bot('sendMessage',[
  'chat_id'=>$admin,
  'text'=>"<b>💸 Цена ботов изменена на $m2!</b>",
    'parse_mode'=>"html",
'reply_markup'=>$pulsozla,
   ]);
  }



$kanall = json_encode([
     'resize_keyboard'=>true,
     'keyboard'=>[
[['text'=>"1️⃣ - Канал"],['text'=>"2️⃣ - Канал"]],
[['text'=>"3️⃣ - Канал"],['text'=>"4️⃣ - Канал"]],
  [['text'=>"🔙 Назад"],['text'=>"🔝 Главное меню"]],
]
]);

if($tx =="📡 Настройки канала" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>📡 Добро пожаловать в систему каналов.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$kanall,
]);
}

          $step = file_get_contents("stat/$cid.step");
   if($tx=="1️⃣ - Канал" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>1️⃣ - Чтобы настроить канал, отправьте имя пользователя канала следующим образом:
 
</b> <code>MyKonsNews</code>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
file_put_contents("stat/$cid.step","ch1");
} 

if($step=="ch1" and $cid==$admin){ 
file_put_contents("sozlama/ch1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>1️⃣ - Настройка канала изменена на @$tx.</b>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
if($tx=="2️⃣ - Канал" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>2️⃣ - Чтобы настроить канал, отправьте имя пользователя канала следующим образом:
 
</b> <code>MyKonsNews</code>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
file_put_contents("stat/$cid.step","ch2");
} 
 //Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($step=="ch2" and $cid==$admin){ 
file_put_contents("sozlama/ch2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>2️⃣ - Настройка канала изменена на @$tx.</b>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="3️⃣ - Канал" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>3️⃣ - Чтобы настроить канал, отправьте имя пользователя канала следующим образом:
 
</b> <code>MyKonsNews</code>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
file_put_contents("stat/$cid.step","ch3");
} 

if($step=="ch3" and $cid==$admin){ 
file_put_contents("sozlama/ch3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>3️⃣ - Настройка канала изменена на @$tx.</b>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");

$step = file_get_contents("stat/$cid.step");
   if($tx=="4️⃣ - Канал" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>4️⃣ - Чтобы настроить канал, отправьте имя пользователя канала следующим образом:
 
</b> <code>MyKonsNews</code>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
file_put_contents("stat/$cid.step","ch4");
} 

if($step=="ch4" and $cid==$admin){ 
file_put_contents("sozlama/ch4.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>4️⃣ - Настройка канала изменена на @$tx.</b>", 
'parse_mode'=>'html', 
'reply_markup'=>$kanall, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");


//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.


if($text=="🎁 Супер бонус 👤"){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"<b>🎁 Создайте супер бонус в следующем порядке:

 Пример:

</b><code>/bonus 12345</code>",
'parse_mode'=>'html',
'reply_markup'=>$rpl,
]);
}
$promo = file_get_contents("ch1.txt");
$ball = file_get_contents("ch2.txt");
$aa = "-1001608565019";
$ab = "-1001608565019";
if(mb_stripos($text, "/bonus")!==false){
if($cid == $admin){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch1.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🎁 Отправьте сумму супер бонуса в следующем порядке:

 Пример:

</b><code>/ball 1000</code>",
'parse_mode'=>'html',
'reply_markup'=>$rpl,
]);
}
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if(mb_stripos($text, "/ball")!==false){
if($cid == $admin){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch2.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🎁 Супербонус отправлен на канал @MyKonsNews. </b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
 ]);
 bot("sendmessage",[
 'chat_id'=>$aa,
 'text'=>"<b>🚀🚀🚀 Игра началась!

 🤖 Наш бот: @$botname
 📢 Наш канал: @MyKonsNews
 📢 Наш канал: @PhpUzCode 
 📢 Наша группа: @PhpUzCode _GROUP
 👨‍💻 Админ: @$adminuser

 🎁 Время броска бонуса: $time $sana

 🔰 Нажмите на кнопку ниже, чтобы получить бонус.</b>",
 'parse_mode'=>'html',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🎁 Получить бонус", "url"=>"https://t.me/$botname?start=$promo"]],
]
])
]);
}
}

if($text=="/start $promo"){
$olmos = file_get_contents("referal/$cid.txt");
$miqdor = $olmos + $ball;
file_put_contents("referal/$cid.txt","$miqdor");
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>"<b>🎁 Поздравляем, вы получили бонус в размере $ball cyм.</b>",
'parse_mode'=>"html",
]);
unlink("ch1.txt");
bot('sendMessage',[
'chat_id'=>$ab,
'text'=>"<b>🙅‍♂️ Вот и все!

 🎊 Игра окончена.
 👑 Победитель $name
 🥳 Ему дали $ball cyм.
 🤖 Наш бот: @$botname
 📢 Наш канал: @MyKonsNews
 📢 Наш канал: @PhpUzCode 
 📢 Наша группа: @PhpUzCode _GROUP
 👨‍💻 Админ: @$adminuser

 🎁 Время приостановки бонуса: $time $sana</b>",
'parse_mode'=>'html',
]);
unlink("ch2.txt");
}


$bonus22 = file_get_contents("$admin.ttxt");
$bepul1 = file_get_contents("bonus2.txt");
mkdir("rubl");
if($text=="🎁 Супер бонус 👥" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🎁 Укажите, сколько человек воспользуется супербонусом:",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("$admin.ttxt","bonusa");
unlink('rubl/olindi1.txt');
unlink('rubl/berildi1.txt');
}

if($bonus22=="bonusa" and $cid==$admin){
file_put_contents("bonus2.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>🎁 Супербонус отправлен на канал @MyKonsNews. </b>",
'parse_mode'=>"html",
'reply_markup'=>$panel,    
]);
unlink("$admin.ttxt");
bot('sendmessage',[
'chat_id'=>"-1001608565019",
'text'=>"<b>🚀🚀🚀 Игра началась!

 👨‍💼 Участник: 0 за
 👪 Участвовало: 0 / 0 за
 🥳 Сумма бонуса: 0 cyмов.
 🤖 Наш бот: @$botname
 📢 Наш канал: @MyKonsNews
 📢 Наш канал: @PhpUzCode 
 📢 Наша группа: @PhpUzCode _GROUP
 👨‍💻 Админ: @$adminuser

 🎁 Время броска бонуса: $time $sana

 🔰 Нажмите на кнопку ниже, чтобы получить бонус.</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎁 Получить бонус","callback_data"=>"bo"]],
]
]),
]);
}

if($data == "bo"){
$olindi=file_get_contents("bonus2.txt");
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"\n"); 
if($eea==$olindi or $olindi==$eea){
bot('deleteMessage',[
'chat_id'=>"-1001608565019",
'message_id'=>$cmid,
]);
}else{
$id = $update->callback_query->id;
$frid= $update->callback_query->from->id;
$ee1 = file_get_contents("rubl/olindi1.txt");
if(mb_stripos($ee1,$frid)!==false){
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"😈 У вас есть бонус!",
"show_alert"=>true,
]);
}else{
$bonusrand = rand(1000,3000);
$id = $update->callback_query->id;
$pul = file_get_contents("referal/$frid.txt");
$bonus=$pul+$bonusrand;
file_put_contents("referal/$frid.txt","$bonus");
file_put_contents("rubl/$frid.txt",1);
$frid= $update->callback_query->from->id;
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"
🎉 Поздравляем, вам был предложен бонусный бонус в размере $bonusrand и сум!",
'show_alert'=>true,
]);
file_put_contents("rubl/olindi1.txt","\n".$frid, FILE_APPEND);
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"\n"); 
$olmos = file_get_contents("rubl/berildi1.txt");
$mm3 = $olmos+$bonusrand;
file_put_contents("rubl/berildi1.txt","$mm3");
$mn2 = file_get_contents("rubl/berildi1.txt");
$olindi=file_get_contents("bonus2.txt");
bot('editMessageText',[
'chat_id'=>"-1001608565019",
'message_id'=>$cmid,
'text'=>"<b>🚀🚀🚀 Игра началась!

 👨‍💼 Участник: $olindi за
 👪 Участвовало: $eea / $olindi за
 🥳 Сумма бонуса: $mn2 cyмов.
 🤖 Наш бот: @$botname
 📢 Наш канал: @MyKonsNews
 📢 Наш канал: @PhpUzCode 
 📢 Наша группа: @PhpUzCode _GROUP
 👨‍💻 Админ: @$adminuser

 🎁 Время броска бонуса: $time $sana

 🔰 Нажмите на кнопку ниже, чтобы получить бонус.</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎁 Получить бонус","callback_data"=>"bo"]],
]
]),
]);
}
}
}


$rpl = json_encode([
  'resize_keyboard'=>false,
  'force_reply'=>true,
  'selective'=>true,
]);

//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($text=="💵 Реферальная цена" and $cid==$admin){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>"<b>💸 Чтобы изменить реферальную цену, отправьте следующее:</b>

<code>/ref-100</code>",
  'parse_mode'=>"html",
  'reply_markup'=>$rpl,
  ]);
  }

  if(mb_stripos($text, "/ref-")!==false){
    $m1 = explode("-",$text);
   $m2 = $m1[1];
   file_put_contents("sozlama/ref.txt","$m2");
   bot('sendMessage',[
  'chat_id'=>$admin,
  'text'=>"<b>💸 Реферальная цена изменена на $m2 за сум.</b>",
  'parse_mode'=>"html",
  'reply_markup'=>$pulsozla,
   ]);
  }


//pul berish
if(mb_stripos($tx, "💸 Давать деньги")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>💸 Следуйте приведенной ниже команде, чтобы дать деньги!

 Например:</b>

<code>/plus
$admin
1000</code>",
'parse_mode' => 'html',
'reply_markup'=>$rpl,
]);
}else
if(mb_stripos($tx, "/plus")!==false){
if($cid == $admin){
$id = explode("\n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>💳 Ваш счет пополнен.

 ➖➖➖➖➖➖➖➖➖➖➖

 🆔 Идентификационный номер: $id1
 💳 Заполнено: $id2 сумов

 ➖➖➖➖➖➖➖➖➖➖➖ </b>",
'parse_mode' => 'html',
'reply_markup'=>$pulsozla,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "<b>💳 Ваш счет пополнен на $id2 сумов.</b>",
'parse_mode'=>'html',
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>👨‍💻 Эта панель будет открыта только для администратора.</b>",
'parse_mode'=>'html',
]);
}
}//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.


//pul ayirish
if($text == "💸 Умножить деньги"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>💸 Следуйте приведенной ниже команде, чтобы вывести деньги!

 Например:</b>

<code>/minus
$admin
1000</code>",
'parse_mode' => 'html',
'reply_markup'=>$rpl,
]);
}elseif(mb_stripos($text, "/minus")!==false){
if($cid == $admin){
$id = explode("\n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos-$id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>💳 Он был списан с вашего счета.

 ➖➖➖➖➖➖➖➖➖➖

 🆔 Идентификационный номер: $id1
 💳 Решено: $id2 сум.

 ➖➖➖➖➖➖➖➖➖➖</b>",
'parse_mode' => 'html',
'reply_markup'=>$pulsozla,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "<b>💳 Сумма $id2 была списана с вашего счета.</b>",
'parse_mode'=>'html',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>👨‍💻 Эта панель будет открыта только для администратора.</b>",
'parse_mode'=>'html',
]);
}//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
}


$on = file_get_contents("on.txt");
if ($on == "off" && $cid = "$admin"){
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🛠 Техническое обслуживание продолжается!

     ▪️ Администрация бота ведет техническую работу над этим ботом.
     ▪️ По этой причине меню отключено администраторами и в настоящее время недоступно для пользователей.
     ▪️ Все функции будут восстановлены после завершения.
    
     🔰 Если вы являетесь администратором этого бота, вы можете отключить этот режим!

     👉 👨‍💻 Панель администратора |  🤖 Система ботов
    
     📝 Для остальных:
     ℹ️ Вернитесь позже и нажмите кнопку / start, чтобы проверить статус бота!</b>",
        'parse_mode'=>'html',
]);
}//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
//o'chirish
if($text == "🔴 Закрывать" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"🔴 <b>Выключен...</b>",
  'parse_mode'=>'html',
]);
}
//yoqish
if($text == "🟢 Включить" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"🟢 <b>Включен...</b>",
  'parse_mode'=>'html',
]);
}



$xabar = file_get_contents("send.txt");
if($text == "📨 Сообщение 👥"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>📨 Чтобы отправить сообщение, отправьте текст:
 Отправьте команду /cancel для отмены.</b>",
'parse_mode'=>"html",
'reply_markup'=>$rpl,
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>👨‍💻 Эта панель будет открыта только для администратора.</b>",
'parse_mode'=>'html',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>❌❌❌  Отменено!  ❌❌❌</b>",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("Zaylobidinovich.txt");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'html'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"<b>📨 Ваше сообщение отправлено всем пользователям.</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]); unlink("send.txt");
}



//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.


if($text == "📨 Сообщение 👤"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"📨 Отправить сообщение пользователю в следующем порядке:

Например:

/sms 🆔️ Cообщение",
'reply_markup'=>$rpl,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*👨‍💻 Эта панель будет открыта только для администратора.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"<b>📨 Новый cообщение</b>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

<b>👨‍💼  Абонент : </b><a href = 'tg://user?id=$uid'>$name</a>
<b>👑  Имя пользователя : @$user1
🆔️  Идентификационный номер : </b><a href = 'tg://user?id=$uid'>$uid</a>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


<b>📨 Сообщение: $sms</b>


➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖",
'parse_mode'=>"html", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"📨 Ваше сообщение отправлено пользователю.",
'parse_mode'=>"markdown", 
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*👨‍💻 Эта панель будет открыта только для администратора.*",
'parse_mode'=>'Markdown',
]);
}
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.




$rpl = json_encode([
  'resize_keyboard'=>false,
  'force_reply'=>true,
  'selective'=>true,
]);


 if($type=="private"){
if($text == "🔓 Выйти из блока" and $cid==$admin){
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🔓 Отправьте 🆔️ номер пользователя для удаления из блока:" ,
       'parse_mode'=>'markdown',  
       'reply_markup'=>$rpl,
       ]);
       }}
       if($reply == "🔓 Отправьте 🆔️ номер пользователя для удаления из блока:"){  
$fayl = file_get_contents("block.db");
$fayl2 = "$text";
$fayl3 = str_replace($fayl2," ",$fayl);
file_put_contents("block.db","$fayl3");
$fayl = file_get_contents("block.db");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "*🔓 [$text] Выйти из блока.*" ,
       'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
      ]); 
      bot('sendmessage', [
      'chat_id' =>$text,
       'text' => "*🖐 Привет $name
 Вы были разблокированы администратором.

 🔃 Отправьте команду перезапуска /start !*" ,
       'parse_mode'=>'markdown', 
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
   [["text"=>'👨‍💻 Администратор', 'url'=>"https://t.me/$adminuser"]],
]
]),
]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
//Blocklash
if($text=="🔒 Блокировка"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🔓 Отправьте 🆔️ номер пользователя, которого нужно заблокировать:",
'reply_markup'=>$rpl,
]);
}
}
if($reply=="🔓 Отправьте 🆔️ номер пользователя, которого нужно заблокировать:"){
file_put_contents("block.db","$blocks\n$text");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"*🔓 [$text] Заблокировано.*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);
        bot('SendMessage',[
   'chat_id'=>$text,
        'text'=>"*🖐 Привет $name
 Вы заблокированы администратором.

 🔃 Не отправлять команду перезапуска /start !*", 
        'parse_mode'=>'markdown', 
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
   [["text"=>'👨‍💻 Администратор', 'url'=>"https://t.me/$adminuser"]],
]
]),
]);
}


$blocks=file_get_contents("block.db");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"*🖐 Привет $name
 Вы заблокированы администратором.

 🔃 Не отправлять команду перезапуска /start !*" ,
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨‍💻 Администратор", "url"=>"https://t.me/$adminuser"]],
]
])
]);return false;
}



$hamyon =json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💳 Клик кошелек"],['text'=>"🥝 Киви кошелек"]],
  [['text'=>"🔙    Назад"],['text'=>"🔝 Главное меню"]],
]
]);
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

$rpl = json_encode([
  'resize_keyboard'=>false,
  'force_reply'=>true,
  'selective'=>true,
]);


if($tx == "💳 Система кошельков" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>💳 Добро пожаловать в систему кошельков.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$hamyon,
]);
}

if($tx=="💳 Клик кошелек" and ($cid) == $admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>💳 Нажмите, чтобы войти в кошелек в следующем порядке:</b>

 <code>/click-8800303225687213</code>",
'parse_mode'=>"html",
  'reply_markup'=>$rpl,
]);
}

 if(mb_stripos($text, "/click-")!==false){
        $m1 = explode("-",$text);
       $m2 = $m1[1];
       file_put_contents("ch2.txt","$m2");
       bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"💳 Номер кошелька Клик изменен на $m2.",
'reply_markup'=>$hamyon,
       ]);
      }
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx=="🥝 Киви кошелек" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🥝 Для подключения киви кошелька введите в следующем порядке:</b>

<code> /qiwi-+998939687845</code>",
    'parse_mode'=>"html",
  'reply_markup'=>$rpl,
    ]);
    }

if(mb_stripos($text, "/qiwi-")!==false){
    $m1 = explode("-",$text);
       $m2 = $m1[1];
       file_put_contents("ch1.txt","$m2");
       bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🥝 Номер киви кошелька изменен на $m2.",
'reply_markup'=>$hamyon,
       ]);
      }



//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
if($tx == "🛍 Заказать"){
bot('SendMessage',[
  'chat_id'=>$cid,
  'text'=>"🛍 Отправьте имя бота, которого хотите заказать:",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="🛍 Отправьте имя бота, которого хотите заказать:"){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"<b>🛍  Новый заказать</b>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

<b>👨‍💼  Абонент : </b><a href = 'tg://user?id=$uid'>$name</a>
<b>👑  Имя пользователя : @$user1
🆔️  Идентификационный номер : </b><a href = 'tg://user?id=$uid'>$uid</a>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


<b>📨 Сообщение: $text</b>


➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*🛍 Ваш заказ принят.  Можно получить бан за неправильный заказ.  Администрация свяжется с вами в течение 24 часов.*",
'parse_mode'=>"markdown",
'reply_markup'=>$home,
]);
}


    $qoshish = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➕ Создание бота"],['text'=>"⚙ Настройки бота"]],
[['text'=>"📤 Продажа ботов"],['text'=>"📥 Покупка бота"]],
[['text'=>"🛍 Заказать"]],
  [['text'=>"🔙Назад"],['text'=>"🔝 Главное меню"]],
]
]);
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

$sozlash = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗄 Мои боты"],['text'=>"🗑 Удалить бота"]],
  [['text'=>"🔙  Назад"],['text'=>"🔝 Главное меню"]],
]
]);





if($tx == "🔙    Назад" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>📋 Выберите одно из следующих меню:</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$pulsozla,
    ]);
}




if($tx == "🔙   Назад" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать на панель инструментов!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$yordam,
    ]);
}
  //Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "🔙 Назад" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>👨‍💻 Добро пожаловать в панель администратора.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$panel,
    ]);
}



if($tx == "🔙     Назад" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать в панель создания ботов!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$bots,
    ]);
}




if($tx == "🔙  Назад" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать в управление ботами!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$qoshish,
    ]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "🔙Назад" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🖥  Вы вернулись в главное меню.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$home,
    ]);
}


if($tx == "🔝 Главное меню" and joinchat($fid)=="true"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>🖥  Вы вернулись в главное меню.</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$home,
        ]);
}


//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
if(isset($message)){
    $get = file_get_contents("stat/usid.txt");
    if(mb_stripos($get,$fid)==false){
        file_put_contents("stat/usid.txt", "$get\n$fid");
        bot('sendMessage',[
          'chat_id'=>-"1001608565019",
          'text'=>"<b>📢 Новый подписчики

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

👤 Абонент: $name
✳️ Имя пользователя: @$user1
🆔 Идентификационный номер:</b> <code>$uid</code>

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
          ",
 'parse_mode'=>'html',
           'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🛠️ Откройте бота 🛠️",'url'=>"https://t.me/$botname"]],
              ]
              ])
          ]);
    }
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.


    if ($tx == "/start"){
    if(joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>👋 Привет $name 
Добро пожаловать в наш бот!</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$home,
    ]);
}
} elseif (mb_stripos($tx, "/start")!==false) {
    if(joinchat($fid)=="true"){
        bot('sendMessage',[
        'chat_id' => $cid,
        'text' => "<b>👋 Привет $name 
Вы не можете пригласить себя в бота!</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$home,
        ]);
        
        if(mb_stripos($stat, $fid)==false){
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        $olmos = file_get_contents("referal/$ex[1].txt");
        $olmoslar = $olmos + $sum.txt;
        file_put_contents("referal/$ex[1].txt", $olmoslar);
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"<b>🔔 Ваш друг полностью зарегистрировался по вашей ссылке, и вы получили $ref сумму.</b>",
        'parse_mode'=>'html'
        ]);
        }
        }

    }else{
        if(mb_stripos($stat, $fid)==false){      
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"<b>🔔 Если ваш друг зарегистрируется полностью по вашей ссылке, вы получите $ref сумму.</b>",
        'parse_mode'=>'html'
        ]);
        file_put_contents("referal/$fid.referal", $ex[1]);
    }
    }else{
        unlink("referal/$fid.referal");
    }
    }
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($data == "tekshir"){
    if(joinchat($ccid) == "true"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid
        ]); 

        if($referalcid == true){
        	$ref = file_get_contents("sozlama/ref.txt");
        $olmos = file_get_contents("referal/$referalcid.txt");
        $olmoslar = $olmos + $ref;
        file_put_contents("referal/$referalcid.txt", $olmoslar);
         bot('sendMessage',[
        'chat_id'=>$referalcid,
        'text'=>"<b>🔔 Ваш друг полностью зарегистрировался по вашей ссылке и вам дали $ref cyм.</b> ",
        'parse_mode'=>'html'
        ]);
         unlink("referal/$ccid.referal");
     }

        bot('sendMessage',[
        'chat_id'=>$ccid,
        'text'=>"<b>🤖 Итак, вы зарегистрировались с нашего бота!

 📋 Выберите одно из следующих меню:</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$home,
        ]);
    }else{
        bot("answerCallbackQuery",[
        "callback_query_id"=>$callid,
        "text"=>"😈 Вы еще не зарегистрированы на нашем канале!",
        "show_alert"=>true,
        ]);
    }
}

if($tx == "📋 Информация" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать на панель инструментов!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$yordam,
    ]);
}


//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "ℹ О боте" and joinchat($fid)=="true"){
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>💡 @$botname  — Создатель активных бизнес-ботов Telegram.

 💡 Вскоре после того, как проект был разработан, его заметили многие администраторы ботов.  Наиболее примечательным аспектом является то, что открыть бизнес-ботов Telegram больше не сложно, что делается на основе нескольких ходов.

 💡 Текущая версия проекта отправлена ​​на тестирование и это только начало.  Самые большие победы ждут проект в будущем.  Самые интересные и захватывающие обновления, запланированные для проекта, еще впереди.

 💡 Открытие, редактирование и настройка ботов совершенны и доставят удовольствие всем.  Разработчики проекта обещают большее управление.

 💡 Следите за всеми новостями и обновлениями на канале @MyKonsNews.  Все обновления предоставляются в полностью объясненной версии вместе с версией.  Самые большие обновления даются каждый месяц.

 💡 Мы никогда не устаем развиваться.  Вы тоже можете иметь самых важных бизнес-ботов с нами.  Ваш ботинок работает безопасно и быстро.  Оставайтесь с нами!

 ⚙️ Версия системы: v1.8.5

 👨‍💻 Разработчик:  <a href='tg://user?id=$admin'>Toshpo'latov Boburbek</a></b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"👨‍💻 Администратор",'url'=>"https://t.me/BOBURBEK_T7845"]],      
    ]
        ])
        ]);
}//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "📖 Руководство" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Руководство по созданию бота!

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 1️⃣- Найдите @BotFather в своем приложении Telegram и нажмите кнопку / start!

2️⃣- Отправьте команду /newbot @BotFather.

 3️⃣- Отправьте имя бота, которого хотите создать.

 4️⃣- Введите имя своего бота: (@Tetrisbot, @Tetris_bot или @Tetris_robot).

 5️⃣- Если вы все сделали правильно, @BotFather отправит вам токен вашего бота, сохраните его!

 6️⃣- Когда вы создаете бота, вы отправляете токен, отправленный @BotFather, когда наш бот запрашивает токен.

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 ❗ ПРИМЕЧАНИЕ:

 🛠 Если вы создадите двух одинаковых ботов, ваш предыдущий бот перестанет работать и начнет работать ваш новый бот!

 👨‍💻 Разработчик:  <a href='tg://user?id=$admin'>Toshpo'latov Boburbek</a></b>",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"👨‍💻 Администратор",'url'=>"https://t.me/BOBURBEK_T7845"]],      
    ]
        ])
    ]);
}

if($tx == "⭐ Оценка бота" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать на панель рейтинга ботов!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$baho,
    ]);
}


if($tx == "📹 Видео урок" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>📅 Быстрый день...</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$yordam,
    ]);
}

if($tx == "⚙ Команды бота" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>📅 Быстрый день...</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$yordam,
    ]);
}


if($text=="🏆 Рейтинг"){
$reyting = reyting();
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$reyting",
'parse_mode'=>'html',
]);
}

function reyting(){
$tx = $message->text;
$ex=explode("_",$tx);
$text = "<b>🤖 ТОП 50 пользователей:</b>\n\n";
$daten = [];
$rev = [];
$fayllar = glob("*referal/$ex[1]/*.*");
foreach($fayllar as $file){
if(mb_stripos($file,".txt")!==false){
$value = file_get_contents($file);
$id = str_replace(["referal/$ex[1]/",".txt"],["",""],$file);
$daten[$value] = $id;
$rev[$id] = $value;
}
echo $file;
}

asort($rev);
$reversed = array_reverse($rev);
for($i=0;$i<50;$i+=1){
$order = $i+1;
$id = $daten["$reversed[$i]"];
$text.= "<b>{$order}</b>. <a href='tg://user?id={$id}'>{$id}</a> - "."<i>".$reversed[$i]."</i>"." <b>cyм</b>"."\n";
}
return $text;
}



if($tx == "🖥 Управление ботами 🖥" and joinchat($fid)=="true"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>🤖 Добро пожаловать в управление ботами!</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$qoshish,
        ]);
}



if($tx == "➕ Создание бота" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать в панель создания ботов!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$bots,
    ]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "📱 Top раздел"){
bot('sendMessage',[
'chat_id'=>$cid,
   'text'=>"<b>✅ Этот раздел поможет вам создать Топ-ботов.

 👁‍ Удобство топовых ботов:

 ├ ▶ Создавайте топовых ботов.
 ├ ▶ Боты без рекламы.
 ├ ▶ Удобная панель управления.
 ├ ▶ Другие небольшие плюсы.
   
 🎯 Выберите бота, которого хотите создать:</b>",
    'parse_mode'=>'html',
'reply_markup'=>$top,
]);	
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "📱 Pro раздел"){
bot('sendMessage',[
'chat_id'=>$cid,
   'text'=>"<b>✅ Этот раздел поможет вам создать ботов Pro.

 👁‍ Удобство Pro ботов:

 ├ ▶ Создавайте про-ботов.
 ├ ▶ Боты без рекламы.
 ├ ▶ Удобная панель управления.
 ├ ▶ Другие небольшие плюсы.
   
 🎯 Выберите бота, которого хотите создать:</b>",
    'parse_mode'=>'html',
'reply_markup'=>$pro,
]);	
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "📱 Vip раздел"){
bot('sendMessage',[
'chat_id'=>$cid,
   'text'=>"<b>✅ Этот раздел поможет вам создать Vip-ботов.

 👁‍ Удобство вип ботов:

 ├ ▶ Создание вип-ботов.
 ├ ▶ Боты без рекламы.
 ├ ▶ Удобная панель управления.
 ├ ▶ Другие небольшие плюсы.
   
 🎯 Выберите бота, которого хотите создать:</b>",
    'parse_mode'=>'html',
'reply_markup'=>$vip,
]);	
}



//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "📱 Mega раздел"){
bot('sendMessage',[
'chat_id'=>$cid,
   'text'=>"<b>✅ Этот раздел поможет вам создать Meгa-ботов.

 👁‍ Удобство мега ботов:

 ├ ▶ Создание мега-ботов.
 ├ ▶ Боты без рекламы.
 ├ ▶ Удобная панель управления.
 ├ ▶ Другие небольшие плюсы.
   
 🎯 Выберите бота, которого хотите создать:</b>",
    'parse_mode'=>'html',
'reply_markup'=>$mega,
]);	
}


if($tx == "🤖 ConstuctorPRO [UZ] V0.4"){
	$get = file_get_contents("referal/$fid.txt");
	$bot = file_get_contents("bot.txt");
	if($get < $bot){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>😔 К сожалению, на вашем счету недостаточно средств.</b>",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"↗️ Реферальная ссылка ↗️",'url'=>"https://t.me/share/url?url=https://t.me/$botname?start=$fid"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>" <b>🤖 Тип бота: 🤖 ConstuctorPRO [UZ] V0.4
🌐 Язык бота: узбекский
💸 Цена: $bot сум
📆 Ежедневная оплата: Недоступно
🏗 Текущая версия: бета-версия V0.4

🔰 Отправьте токен своего бота, чтобы продолжить разблокировку бота! </b>",
        'parse_mode'=>"html",
    'reply_markup'=>$pro,
    ]);
    file_put_contents("step/$fid.txt","makerbot&token");
    }
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
if($userstep == "makerbot&token" and $tx !== "/cancel" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    	file_put_contents("botlarim/$fid/bot.txt","$tx");
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📡  Загрузка...",
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/Maker/robot/bot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN", "$useradmin", $kod);
    
    mkdir("prouser/$fid/bot");
    if(file_get_contents("prouser/$fid/bot/bot.php")){
        unlink("prouser/$fid/bot/bot.php");
        unlink("prouser/$fid/bot/usid.txt");
        unlink("prouser/$fid/bot/grid.txt");
        $files = glob("prouser/$fid/bot/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/bot/baza");
    }
    file_put_contents("prouser/$fid/bot/bot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/MyKonsBot/bots/pro/Maker/robot/prouser/$fid/bot/bot.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"<b>🤖 Ваша лодка готова!

 ➖➖➖➖➖➖➖➖➖➖➖➖➖

 🤖 Тип бота: 🤖 ConstuctorPRO [UZ] V0.4
 🌐 Язык бота: узбекский
 📄 Имя бота: $nomi
 🔗 Движок бота: @$user
 🆔️ Номер бота: <code>$id</code>
 ⏰ Время создания: $sana | $time

 ➖➖➖➖➖➖➖➖➖➖➖➖➖

 ⬇️ Вы можете перейти в свой ботинок с помощью кнопки ниже.</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
"inline_keyboard"=>[
[["text"=>"↗️ Войти в бота ↗️","url"=>"https://t.me/$user"]],
]
]),
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001608565019",
        'message_id'=>$getid,
        'text'=>"<b>🤖 Создан новый бот!

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

 🤖 Тип бота: 🤖 ConstuctorPRO [UZ] V0.4
 🌐 Язык бота: узбекский
 📄 Имя бота: $nomi
 🔗 Движок бота: @$user
 🆔️ Номер бота: </b><code>$id</code><b>
 👨‍💻 Создатель: @$user1
 🆔 Идентификационный номер:</b> <code>$uid</code><b>
 ⏰ Время создания: $sana | $time

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
"inline_keyboard"=>[
[["text"=>"🛠️ Откройте бота 🛠️","url"=>"https://t.me/$botname"]],
]
]),
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= $bot;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>⛔  Я думаю, вы допустили ошибку при отправке токена!
 🔄 Повторно отправьте токен, чтобы убедиться, что он правильный!</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>⛔  Я думаю, вы допустили ошибку при отправке токена!
 🔄 Повторно отправьте токен, чтобы убедиться, что он правильный!</b>",
        'parse_mode'=>"html"
        ]);
   }
}


if($tx == "⚙ Настройки бота" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать в панель настройки бота!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$sozlash,
    ]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "🗄 Мои боты" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Список ваших ботов:

 ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

├▶ @$user...

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$sozlash,
    ]);
}

if($tx == "🗑 Удалить бота" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Список ваших ботов:

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

├▶ <b><code>/del 5167468166:AAFu3wSvzxSecicF099CT6l3IfIQ357M86Q</code></b>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$sozlash,
    ]);
}


if(mb_stripos($text, "/del")!==false){
	$ex=explode(" ", $text);
	$px=$ex[1];
 	file_get_contents("https://api.telegram.org/bot$px/deletewebhook");
    $to = file_get_contents("https://api.telegram.org/bot$px/getme");
    $json = json_decode($to);
    $user = $json->result->username;
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>"✅ @$user  автоматически удаляются из базы данных.

",
   'parse_mode' => 'html',
   'reply_markup'=>$sozlash,   
  ]);
}

//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "🛒 Магазин ботов" and joinchat($fid)=="true"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>📋 Выберите одно из следующих меню:</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"🥝 Киви кошелек",'callback_data'=>"qiwi"],['text'=>"💠 Клик кошелек",'callback_data'=>"click"]],
          [['text'=>"↗️ Пополнить счёт ↗️",'url'=>"https://t.me/BOBURBEK_T7845"]],      
    ]
        ])
        ]);
}

//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
       if($val->Ccy == 'RUB'){
               $response .= "<b>📊 Б. В. Курси: 1 ₽ -</b>" . $val->Rate . "<b>сум</b>";
           }
       }
      return $response;
   }
$ch1 = file_get_contents("ch1.txt");
      if($data == "qiwi"){
        bot('editMessageText',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
        'text'=>kurs()."
📋 Платежная система: 🥝 Киви кошелек

 💡 Статус автоплатежа: ВЫКЛЮЧЕН

 💳 Кошелек: <code>$ch1 </code>
 📝 Примечание: <code> $ccid </code>

 🔰 Внимание, если вы забудете ввести комментарий или введете его неправильно, ваш аккаунт не будет зачислен!  В таких случаях вы можете связаться с нами.",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"👨‍💻 Администратор",'url'=>"https://t.me/BOBURBEK_T7845"]],
    ]
    ])
    ]);
    }
$ch2 = file_get_contents("ch2.txt");
      if($data == "click"){
        bot('editMessageText',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
        'text'=>"📋 Платежная система: 💠 Клик кошелек 

 💡 Статус автоплатежа: ВЫКЛЮЧЕН

 💳 Карточка: <code>$ch2</code>
 📝 Примечание: <code> $ccid </code>

 🔰 Внимание, если вы забудете ввести комментарий или введете его неправильно, ваш аккаунт не будет зачислен!  В таких случаях вы можете связаться с нами.",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"👨‍💻 Администратор",'url'=>"https://t.me/BOBURBEK_T7845"]],
    ]
    ])
    ]);
   }
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
if(mb_stripos($text,"/update") !== false){ 
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"🔄  <b>Обновление...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'⬜⬜⬜⬜⬜⬜⬜⬜⬜⬜ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'⬛⬜⬜⬜⬜⬜⬜⬜⬜⬜  10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬜⬜⬜⬜⬜⬜⬜⬜  20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬜⬜⬜⬜⬜⬜⬜  30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬛⬜⬜⬜⬜⬜⬜  40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬛⬛⬜⬜⬜⬜⬜  50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬜⬜⬜⬜  60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬛⬜⬜⬜  70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬛⬛⬜⬜  80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬛⬛⬛⬜  90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛  100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.3);
    bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "<b>✅ Ваша информация обновлена.  База данных еще раз подтвердила безопасность вашей учетной записи.  Не стесняйтесь использовать нашего бота!</b>",
       'parse_mode'=>'html',  
       'reply_markup'=>$home,
]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
if($text=="/speed"){
$start_time = round(microtime(true) * 1000);
      $send=  bot('sendmessage', [
                'chat_id' => $cid,
                'text' =>"Загрузка...",
            ])->result->message_id;

                    $end_time = round(microtime(true) * 1000);
                    $time_taken = $end_time - $start_time;
                    bot('editMessagetext',[
                        "chat_id" => $cid,
                        "message_id" => $send,
                        "text" => "⚡ Скорость бота:  " . $time_taken .  " MB/S",
]);
}

$pulishla = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗣 Реферальная система"],['text'=>"🎁 Ежедневный бонус"]],
  [['text'=>"🔙Назад"],['text'=>"🔝 Главное меню"]],
]
]);

if($tx == "💸 Зарабатывать" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤖 Добро пожаловать на панель заработка.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$pulishla,
]);
}



if($tx == "🗣 Реферальная система" and joinchat($fid)=="true"){
	$ref = file_get_contents("sozlama/ref.txt");
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>⚡️ Ссылки на ваши предложения:</b>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

<code>https://t.me/$botname?start=$cid</code>
<code>tg://resolve?domain=$botname&start=$cid</code>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

<b>🎁 Если ваш друг зарегистрируется по ссылке, вы получите $ref cyм.</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"↗️ Реферальная ссылка ↗️",'url'=>"https://t.me/share/url?url=https://t.me/$botname?start=$fid"]],
        ]
        ])
]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

if($tx == "🎁 Ежедневный бонус" and joinchat($fid)=="false"){ 
$bonustime = file_get_contents("bonus/$cid.txt");
$vaqt = date("d",strtotime("2 hour"));
$bonusrand = rand(1000,3000); 
if($bonustime == $vaqt){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>😈 У вас есть бонус!</b>",
'parse_mode'=>'html',
]);
}else{
$get = file_get_contents("referal/$fid.txt");
$bonus=$get+$bonusrand;
file_put_contents("referal/$fid.txt","$bonus");
file_put_contents("bonus/$cid.txt","$vaqt");
$ab = file_get_contents("bonus/bons.soni");
$ab = $ab + $bonusrand;
file_put_contents("bonus/bons.soni","$ab");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🎉 Поздравляем, вам был предложен бонусный бонус в размере $bonusrand и сум!</b>",
'parse_mode'=>'html',
]);
bot('sendMessage',[
    'chat_id'=>"@MyKonsNews",
    'text'=>"<b>👨‍💻 Пользователь: <a href = 'tg://user?id=$cid'>$username</a></b>

🎁 <b>Сумма бонуса: $bonusrand cум.
🆔 Идентификационный номер:</b> <code>$uid</code><b>

🤖 Наш бот: @$botname</b>",
'parse_mode'=>"html",
        'reply_markup'=>json_encode([
"inline_keyboard"=>[
[["text"=>"🛠️ Откройте бота 🛠️","url"=>"https://t.me/$botname"]],
]
]),
]);
}
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.
if($tx == "👔 Личный кабинет" and joinchat($fid)=="true"){
$olmos = file_get_contents("referal/$referalcid.txt");
        $olmoslar = $olmos + $ref;
	$balans = file_get_contents("referal/$fid.txt");
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"<b>👔 Добро пожаловать в личный кабинет.

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

┌ Ваше имя: $name
├ Ваш пользователь: @$user1
├ Ваш идентификационный номер: </b> <code> $cid </code> <b>
└ Ваш основной баланс: $balans сум

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"↗️ Пополнить счёт ↗️",'url'=>"https://t.me/BOBURBEK_T7845"]],      
    ]
    ])
   ]);
}


//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.

$lichka=file_get_contents("Zaylobidinovich.txt"); //tegilmasin buziladi
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("Zaylobidinovich.txt","$lichka\n$cid");
}
}
if($tx == "📊 Статистика" and joinchat($fid)=="true"){
      $us = file_get_contents("stat/usid.txt");
    $uscount = substr_count($us, "\n");
	$alaki = explode("\n",$alluser);
    $allusers = count($alaki)-1;
    $lichka=file_get_contents("Zaylobidinovich.txt");
$lich=substr_count($lichka,"\n");
$time=date('H:i:s',strtotime('0 hour'));
$bot = file_get_contents("stat/stat.txt");
       $all=substr_count($baza,"\n");
    $botpro = file_get_contents("stat/stat.txt");
    $bon = file_get_contents("bonus/bons.soni");
$hou = date("H",strtotime("0 hour"));
$ho = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["⓪","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①⓪","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②⓪","②①","②②","②③","⓪⓪"], $hou);
$minu = date("i",strtotime("0 hour"));
$mi = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["⓪","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①⓪","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②⓪","②①","②②","②③","②④","②⑤","②⑥","②⑦","②⑧","②⑨","③⓪","③①","③②","③③","③④","③⑤","③⑥","③⑦","③⑧","③⑨","④⓪","④①","④②","④③","④④","④⑤","④⑥","④⑦","④⑧","④⑨","⑤⓪","⑤①","⑤②","⑤③","⑤④","⑤⑤","⑤⑥","⑤⑦","⑤⑧","⑤⑨","⓪⓪"], $minu);
    $all = $bot + $botpro;
    bot('sendMessage',[
    'chat_id' => $cid,
    'text'=>"<b>📊  @$botname статистика

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

┌ Количество участников бота: $lich за
├ Всего топовых ботов: $bot за
├ Всего создано про-ботов: $botpro за
├ Всего создано вип-ботов: $bottrend за
├ Всего ботов: $all
├ Текущая дата: $sana
└ Текущее время: $time

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖</b>
    ",
    'parse_mode'=>"html",
    'reply_markup'=>$home,
    ]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.


if($text == "📨 Администратор"){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"📨 Отправьте свое сообщение на контакт: ",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="📨 Отправьте свое сообщение на контакт:"){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"<b>📨 Новое сообщение</b>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

<b>👨‍💼  Абонент : </b><a href = 'tg://user?id=$uid'>$name</a>
<b>👑  Имя пользователя : @$user1
🆔️  Идентификационный номер : </b><a href = 'tg://user?id=$uid'>$uid</a>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖


<b>📨 Cообщение: $text</b>


➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*📨 Ваше сообщение отправлено администратору.  За ложную жалобу можно получить бан.  Администрация свяжется с вами в течение 24 часов.*",
'parse_mode'=>"markdown",
'reply_markup'=>$home,
]);
}


if($tx =="/panel" and ($cid) == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>👨‍💻 Добро пожаловать в панель администратора.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$panel,
]);
}


if($tx == "/script" and $cid == $admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLFile(__FILE__),
'caption'=>"💻 @$botname 💻 PHP код",
]);
}
//Dasturchi: Jamoliddinov Umidjon (@NeT_CoDeR_Uz) 
//Manba qosin manbasiz kormay kanlingga manba bilan tarqat. Manba: @PhpUzCode.
//@PhpUzCode  Kanalida tarqatildi.


?>