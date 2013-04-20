<?php
/**
 * Context����������
 */
class ItemDataContextByName {

    private $strategy;

    /**
     * ���󥹥ȥ饯��
     * @param string ConcreteStrategy���������륯�饹̾
     */
    public function __construct($strategy_name) {
        $concrete_strategy_name = $strategy_name . '.class.php';
        if (!is_readable($concrete_strategy_name)) {
            throw new Exception($concrete_strategy_name . ' is not readable !');
        }
        include_once($concrete_strategy_name);
        if (!class_exists($strategy_name)) {
            throw new Exception($strategy_name . ' dose not exists !');
        }
        $this->strategy = new $strategy_name;
    }

    /**
     * ���ʾ���򥪥֥������Ȥ�������֤�
     * @return �ǡ������֥������Ȥ�����
     */
    public function getItemData($filename) {
        return $this->strategy->getData($filename);
    }

}
?>
