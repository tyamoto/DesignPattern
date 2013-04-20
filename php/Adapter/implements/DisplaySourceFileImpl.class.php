<?php
require_once 'DisplaySourceFile.class.php';
require_once 'ShowFile.class.php';
?>
<?php
/**
 * DisplaySourceFile������������饹
 */
class DisplaySourceFileImpl implements DisplaySourceFile
{
    /**
     * ShowFile���饹�Υ��󥹥��󥹤��ݻ�����
     */
    private $show_file;

    /**
     * ���󥹥ȥ饯��
     */
    public function __construct($filename)
    {
        $this->show_file = new ShowFile($filename);
    }

    /**
     * ���ꤵ�줿�������ե������ϥ��饤��ɽ������
     */
    public function display()
    {
        $this->show_file->showHighlight();
    }
}
?>
