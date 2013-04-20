<?php
require_once 'ItemManager.class.php';
require_once 'DeepCopyItem.class.php';
require_once 'ShallowCopyItem.class.php';

function testCopy(ItemManager $manager, $item_code) {
    /**
     * ���ʤΥ��󥹥��󥹤�2�ĺ���
     */
    $item1 = $manager->create($item_code);
    $item2 = $manager->create($item_code);

    /**
     * 1�Ĥ��������Ȥ���
     */
    $item2->getDetail()->comment = '�����Ȥ�񤭴����ޤ���';

    /**
     * ���ʾ����ɽ��
     * �������ԡ��򤷤���硢$item2�ؤ��ѹ���$item1�˱ƶ����ʤ�
     */
    echo '�����ꥸ�ʥ�';
    $item1->dumpData();
    echo '�����ԡ�';
    $item2->dumpData();
    echo '<hr>';
}
?>
<?php
    $manager = new ItemManager();

    /**
     * ���ʥǡ�������Ͽ
     */
    $item = new DeepCopyItem('ABC0001', '����ԥ����', 3800);
    $detail = new stdClass();
    $detail->comment = '����A�Υ����ȤǤ�';
    $item->setDetail($detail);
    $manager->registItem($item);

    $item = new ShallowCopyItem('ABC0002', '�̤������', 1500);
    $detail = new stdClass();
    $detail->comment = '����B�Υ����ȤǤ�';
    $item->setDetail($detail);
    $manager->registItem($item);

    testCopy($manager, 'ABC0001');
    testCopy($manager, 'ABC0002');
?>
