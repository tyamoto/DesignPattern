<?php
require_once 'MaxLengthValidationHandler.class.php';
require_once 'NotNullValidationHandler.class.php';
?>
<?php
    if (isset($_POST['validate_type']) && isset($_POST['input'])) {
        $validate_type = $_POST['validate_type'];
        $input = $_POST['input'];

        /**
         * ��������κ���
         * validate_type���ͤˤ�äƥ��������ưŪ���ѹ�
         */
        $handler = new NotNullValidationHandler();
        $handler->setHandler(new MaxLengthValidationHandler(8));

        switch ($validate_type) {
        case 1:
            include_once 'AlphabetValidationHandler.class.php';
            $handler->setHandler(new AlphabetValidationHandler());
            break;
        case 2:
            include_once 'NumberValidationHandler.class.php';
            $handler->setHandler(new NumberValidationHandler());
            break;
        }

        /**
         * �����¹Ԥȷ�̥�å�������ɽ��
         */
        $result = $handler->validate($_POST['input']);
        if ($result === false) {
            echo '���ڤǤ��ޤ���Ǥ���';
        } else if (is_string($result) && $result !== '') {
            echo '<p style="color: #dd0000;">' . $result . '</p>';
        } else {
            echo '<p style="color: #008800;">OK</p>';
        }
    }
?>
<form action="" method="post">
  <div>
    �͡�<input type="text" name="input">
  </div>
  <div>
    �������ơ�<select name="validate_type">
    <option value="0">Ǥ��</option>
    <option value="1">Ⱦ�ѱѻ������Ϥ���Ƥ��뤫</option>
    <option value="2">Ⱦ�ѿ��������Ϥ���Ƥ��뤫</option>
    </select>
  </div>
  <div>
    <input type="submit">
  </div>
</form>
