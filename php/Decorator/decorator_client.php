<?php
require_once('UpperCaseText.class.php');
require_once('DoubleByteText.class.php');
require_once('PlainText.class.php');
?>
<?php
    $text = (isset($_POST['text'])? $_POST['text'] : '');
    $decorate = (isset($_POST['decorate'])? $_POST['decorate'] : array());
    if ($text !== '') {
        $text_object = new PlainText();
        $text_object->setText($text);

        foreach ($decorate as $val) {
            switch ($val) {
            case 'double':
                $text_object = new DoubleByteText($text_object);
                break;
            case 'upper':
                $text_object = new UpperCaseText($text_object);
                break;
            }
        }
        echo $text_object->getText() . "<br>";
    }

?>
<hr>
<form action="" method="post">
�ƥ����ȡ�<input type="text" name="text"><br>
������<input type="checkbox" name="decorate[]" value="upper">��ʸ�����Ѵ�
<input type="checkbox" name="decorate[]" value="double">2�Х���ʸ�����Ѵ�
<input type="submit">
</form>
