<?php
require_once 'DisplaySourceFileImpl.class.php';
?>
<?php
    /**
     * DisplaySourceFileImpl���饹�򥤥󥹥��󥹲����롣
     * ���Ƥ�ɽ������ե�����ϡ���ShowFile.class.php��
     */
    $show_file = new DisplaySourceFileImpl('./ShowFile.class.php');

    /**
     * �ץ졼��ƥ����Ȥȥϥ��饤�Ȥ����ե��������Ƥ򤽤줾��
     * ɽ������
     */
    $show_file->display();
?>
