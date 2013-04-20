<?php
require_once 'Data.class.php';
require_once 'DataCaretaker.class.php';
?>
<?php
//    session_start();

    $caretaker = new DataCaretaker();
    $data = isset($_SESSION['data']) ? $_SESSION['data'] : new Data();

    $mode = (isset($_POST['mode'])? $_POST['mode'] : '');

    switch ($mode) {
    case 'add':
        /**
         * �����Ȥ�Data���֥������Ȥ���Ͽ����
         * �������Υ����Ȥϥ��å�������¸���Ƥ���������
         */
        $data->addComment((isset($_POST['comment']) ? $_POST['comment'] : ''));
        break;
    case 'save':
        /**
         * �ǡ����Υ��ʥåץ���åȤ��ꡢDataCaretaker�˰��ꤷ��
         * ��¸����
         */
        $caretaker->setSnapshot($data->takeSnapshot());
        echo '<font style="color: #dd0000;">�ǡ�������¸���ޤ�����</font><br>';
        break;
    case 'restore':
        /**
         * DataCaretaker�˰��ꤷ����¸�������ʥåץ���åȤ��������
         * �ǡ�������������
         */
        $data->restoreSnapshot($caretaker->getSnapshot());
        echo '<font style="color: #00aa00;">�ǡ������������ޤ�����</font><br>';
        break;
    case 'clear':
        $data = new Data();
    }

    /**
     * ��Ͽ���������Ȥ�ɽ������
     */
    echo '���ޤǤΥ�����';
    if (!is_null($data)) {
        echo '<ol>';
        foreach ($data->getComment() as $comment) {
            echo '<li>' . htmlspecialchars($comment, ENT_QUOTES) . '</li>';
        }
        echo '</ol>';
    }

    /**
     * ���Υ��������ǻȤ��ǡ����򥻥å�������¸
     */
    $_SESSION['data'] = $data;
?>
<form action="" method="post">
�����ȡ�<input type="text" name="comment"><br>
<input type="submit" name="mode" value="add">
<input type="submit" name="mode" value="save">
<input type="submit" name="mode" value="restore">
<input type="submit" name="mode" value="clear">
</form>
