<?php
/**
 * ���ꤵ�줿�ե���������Ƥ�ɽ�����륯�饹�Ǥ�
 */
class ShowFile
{
    /**
     * ���Ƥ�ɽ������ե�����̾
     *
     * @access private
     */
    private $filename;

    /**
     * ���󥹥ȥ饯��
     *
     * @param string �ե�����̾
     * @throws Exception
     */
    public function __construct($filename)
    {
        if (!is_readable($filename)) {
            throw new Exception('file "' . $filename . '" is not readable !');
        }
        $this->filename = $filename;
    }

    /**
     * �ץ졼��ƥ����ȤȤ���ɽ�����ޤ�
     */
    public function showPlain()
    {
        echo '<pre>';
        echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES);
        echo '</pre>';
    }

    /**
     * ������ɤ�ϥ��饤�Ȥ���ɽ�����ޤ�
     */
    public function showHighlight()
    {
        highlight_file($this->filename);
    }
}
?>
