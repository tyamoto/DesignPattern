<?php
require_once 'Chatroom.class.php';
require_once 'User.class.php';
?>
<?php
    $chatroom = new Chatroom();

    $sasaki = new User('������');
    $suzuki = new User('����');
    $yoshida = new User('����');
    $kawamura = new User('��¼');
    $tajima = new User('����');

    $chatroom->login($sasaki);
    $chatroom->login($suzuki);
    $chatroom->login($yoshida);
    $chatroom->login($kawamura);
    $chatroom->login($tajima);

    $sasaki->sendMessage('����', '�轵��ͽ��ϡ�') ;
    $suzuki->sendMessage('��¼', '��̩�Ǥ�') ;
    $yoshida->sendMessage('�븶', '�����Ǥ�����') ;
    $tajima->sendMessage('������', '�����⤷�Ƥޤ�') ;
    $kawamura->sendMessage('����', '����Ƕ��̤Ǥ���������') ;
?>
