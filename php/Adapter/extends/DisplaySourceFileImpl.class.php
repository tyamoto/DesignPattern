<?php
require_once 'DisplaySourceFile.class.php';
require_once 'ShowFile.class.php';
?>
<?php
/**
 * DisplaySourceFile������������饹
 */
class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile
{
    /**
     * ���󥹥ȥ饯��
     */
    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    /**
     * ���ꤵ�줿�������ե������ϥ��饤��ɽ������
     */
    public function display()
    {
        parent::showHighlight();
    }
}
?>
