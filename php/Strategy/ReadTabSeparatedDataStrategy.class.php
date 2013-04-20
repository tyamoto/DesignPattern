<?php
require_once 'ReadItemDataStrategy.class.php';
?>
<?php
/**
 * ���ֶ��ڤ�ǡ������ɤ߹���
 * ConcreteStrategy����������
 */
class ReadTabSeparatedDataStrategy extends ReadItemDataStrategy {

    /**
     * �ǡ����ե�������ɤ߹��ߡ����֥������Ȥ�������֤�
     * @param string �ǡ����ե�����̾
     * @return �ǡ������֥������Ȥ�����
     */
    protected function readData($filename) {
        $fp = fopen($filename, 'r');

        /**
         * �إå��Ԥ�ȴ��
         */
        $dummy = fgets($fp, 4096);

        /**
         * �ǡ������ɤ߹���
         */
        $return_value = array();
        while ($buffer = fgets($fp, 4096)) {
            list($item_code, $item_name, $price, $release_date) = split("\t", rtrim($buffer));

            /**
             * ����ͤΥ��֥������Ȥκ���
             */
            $obj = new stdClass();
            $obj->item_name = $item_name;
            $obj->item_code = $item_code;
            $obj->price = $price;

            list($year, $mon, $day) = split('/', $release_date);
            $obj->release_date = mktime(0, 0, 0,
                                        $mon,
                                        $day,
                                        $year);

            $return_value[] = $obj;
        }

        fclose($fp);

        return $return_value;
    }
}
?>
