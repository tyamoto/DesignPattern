<?php
    if (isset($_POST['dao']) && isset($_POST['proxy'])) {
        $dao = $_POST['dao'];
        switch ($dao) {
        case 1:
            include_once 'MockItemDao.class.php';
            $dao = new MockItemDao();
            break;
        default:
            include_once 'DbItemDao.class.php';
            $dao = new DbItemDao();
            break;
        }

        $proxy = $_POST['proxy'];
        switch ($proxy) {
        case 1:
            include_once 'ItemDaoProxy.class.php';
            $dao = new ItemDaoProxy($dao);
            break;
        }

        for ($item_id = 1; $item_id <= 3; $item_id++) {
            $item = $dao->findById($item_id);
            echo 'ID=' . $item_id . '�ξ��ʤϡ�' . $item->getName() . '�פǤ�<br>';
        }

        /**
         * ���٥ǡ��������
         */
        $item = $dao->findById(2);
        echo 'ID=' . $item_id . '�ξ��ʤϡ�' . $item->getName() . '�פǤ�<br>';
    }
?>
<hr>
<form action="" method="post">
  <div>
    Dao�μ��ࡧ
    <input type="radio" name="dao" value="0" checked>DbItemDao
    <input type="radio" name="dao" value="1">MockItemDao
  </div>
  <div>
    Proxy�����ѡ�
    <input type="radio" name="proxy" value="0" checked>���ʤ�
    <input type="radio" name="proxy" value="1">����
  </div>
  <div>
    <input type="submit">
  </div>
</form>
