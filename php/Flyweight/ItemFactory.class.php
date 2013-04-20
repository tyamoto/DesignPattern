<?php
require_once 'Item.class.php';
?>
<?php
/**
 * FlyweightFactory����������
 * �ޤ���Singleton�ѥ�����ˤ�ʤäƤ���
 *
 * �ʤ������Υ���ץ�Ǥ�UnsharedConcreteFlyweight���֥������Ȥ�
 * �֤��᥽�åɤ��Ѱդ���Ƥ��ʤ�
 */
class ItemFactory {
    private $pool;
    private static $instance = null;

    /**
     * ���󥹥ȥ饯��
     * ���Υ���ץ�Ǥϡ����󥹥������������ݻ����륪�֥������Ȥ�
     * ���٤��������Ƥ���
     */
    private function __construct($filename) {
        $this->buildPool($filename);
    }

    /**
     * Factory�Υ��󥹥��󥹤��֤�
     */
    public static function getInstance($filename) {
        if (is_null(self::$instance)) {
            self::$instance = new ItemFactory($filename);
        }
        return self::$instance;
    }

    /**
     * ConcreteFlyweight���֤�
     */
    public function getItem($code) {
        if (array_key_exists($code, $this->pool)) {
            return $this->pool[$code];
        } else {
            return null;
        }
    }

    /**
     * �ǡ������ɤ߹��ߡ��ס������������
     */
    private function buildPool($filename) {
        $this->pool = array();

        $fp = fopen($filename, 'r');
        while ($buffer = fgets($fp, 4096)) {
            list($item_code, $item_name, $price) = split("\t", $buffer);
            $this->pool[$item_code] = new Item($item_code, $item_name, $price);
        }
        fclose($fp);
    }

    /**
     * ���Υ��󥹥��󥹤�ʣ������Ĥ��ʤ��褦�ˤ���
     * @throws RuntimeException
     */
    public final function __clone() {
        throw new RuntimeException ('Clone is not allowed against ' . get_class($this));
    }

}
?>
