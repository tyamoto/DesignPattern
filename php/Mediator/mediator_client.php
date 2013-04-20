<?php
require_once 'Chatroom.class.php';
require_once 'User.class.php';
?>
<?php
    $chatroom = new Chatroom();

    $sasaki = new User('º´¡¹ÌÚ');
    $suzuki = new User('ÎëÌÚ');
    $yoshida = new User('µÈÅÄ');
    $kawamura = new User('ÀîÂ¼');
    $tajima = new User('ÅÄÅç');

    $chatroom->login($sasaki);
    $chatroom->login($suzuki);
    $chatroom->login($yoshida);
    $chatroom->login($kawamura);
    $chatroom->login($tajima);

    $sasaki->sendMessage('ÎëÌÚ', 'Íè½µ¤ÎÍ½Äê¤Ï¡©') ;
    $suzuki->sendMessage('ÀîÂ¼', 'ÈëÌ©¤Ç¤¹') ;
    $yoshida->sendMessage('Çë¸¶', '¸µµ¤¤Ç¤¹¤«¡©') ;
    $tajima->sendMessage('º´¡¹ÌÚ', '¤ª¼ÙËâ¤·¤Æ¤Þ¤¹') ;
    $kawamura->sendMessage('µÈÅÄ', '»ä»ö¤Ç¶²½Ì¤Ç¤¹¤¬¡¦¡¦¡¦') ;
?>
