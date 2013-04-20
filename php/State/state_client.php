<?php
require_once 'User.class.php';
?>
<?php
    session_start();

    $context = isset($_SESSION['context']) ? $_SESSION['context'] : null;
    if (is_null($context)) {
        $context = new User('�ۤ�');
    }

    $mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
    switch ($mode) {
    case 'state':
        echo '<p style="color: #aa0000">���֤����ܤ��ޤ�</p>';
        $context->switchState();
        break;
    case 'inc':
        echo '<p style="color: #008800">������ȥ��åפ��ޤ�</p>';
        $context->incrementCount();
        break;
    case 'reset':
        echo '<p style="color: #008800">������Ȥ�ꥻ�åȤ��ޤ�</p>';
        $context->resetCount();
        break;
    }

    $_SESSION['context'] = $context;

    echo '�褦������' . $context->getUserName() . '����<br>';
    echo '���ߡ������󤷤�' . ($context->isAuthenticated() ? '���ޤ�' : '���ޤ���') . '<br>';
    echo '���ߤΥ�����ȡ�' . $context->getCount() . '<br>';
    echo $context->getMenu() . '<br>';
?>
