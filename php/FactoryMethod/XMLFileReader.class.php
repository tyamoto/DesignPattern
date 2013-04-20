<?php
require_once 'Reader.class.php';
?>
<?php
/**
 * XML�ե�������ɤ߹��ߤ�Ԥ����饹
 */
class XMLFileReader implements Reader {
    /**
     * ���Ƥ�ɽ������ե�����̾
     * @access private
     */
    private $filename;

    /**
     * �ǡ����򰷤��ϥ�ɥ�̾
     * @access private
     */
    private $handler;

    /**
     * ���󥹥ȥ饯��
     * @param string �ե�����̾
     * @throws Exception
     */
    public function __construct($filename) {
        if (!is_readable($filename)) {
            throw new Exception('file [' . $filename . '] is not readable !');
        }
        $this->filename = $filename;
    }

    /**
     * �ɤ߹��ߤ�Ԥ�
     */
    public function read() {
        $this->handler = simplexml_load_file($this->filename);
    }

    /**
     * ʸ�������ɤ��Ѵ���Ԥ�
     */
    private function convert($str) {
        return mb_convert_encoding($str, mb_internal_encoding(), 'auto');
    }

    /**
     * ɽ����Ԥ�
     */
    public function display() {
        foreach ($this->handler->artist as $artist) {
            echo '<b>' . $this->convert($artist['name']) . '</b>';
            echo '<ul>';
            foreach ($artist->music as $music) {
                echo '<li>';
                echo $this->convert($music['name']);
                echo '</li>';
            }
            echo '</ul>';
        }
    }

}
?>
