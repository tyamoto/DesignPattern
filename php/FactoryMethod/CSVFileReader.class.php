<?php
require_once 'Reader.class.php';
?>
<?php
/**
 * CSV�ե�������ɤ߹��ߤ�Ԥ����饹
 */
class CSVFileReader implements Reader {
    /**
     * ���Ƥ�ɽ������ե�����̾
     *
     * @access private
     */
    private $filename;

    /**
     * �ǡ����򰷤��ϥ�ɥ�̾
     *
     * @access private
     */
    private $handler;

    /**
     * ���󥹥ȥ饯��
     *
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
        $this->handler = fopen($this->filename, 'r');
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
        $column = 0;
        $tmp = '';

        /**
         * Linux�Ķ��ξ�硢������Ŭ��setlocale�ؿ�����Ѥ���
         * ����������ꤷ�Ƥ�������
         * ���setlocale(LC_ALL, 'ja_JP.ujis');
         */
       while ($data = fgetcsv($this->handler, 4096, ',')) {
            $num = count ($data);
            for ($i = 0; $i < $num; $i++) {
                if ($i == 0) {
                    if ($column != 0 && $data[$i] != $tmp) {
                        echo '</ul>';
                    }
                    if ($data[$i] != $tmp) {
                        $tmp = $this->convert($data[$i]);
                        echo '<b>' . $tmp . '</b>';
                        echo '<ul>';
                    }
                } else {
                    echo '<li>';
                    echo $this->convert($data[$i]);
                    echo '</li>';
                }
            }
            $column++;
        }
        echo '</ul>';

        fclose($this->handler);
    }
}
?>
