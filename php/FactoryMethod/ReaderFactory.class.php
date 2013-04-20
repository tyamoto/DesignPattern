<?php
require_once 'Reader.class.php';
require_once 'CSVFileReader.class.php';
require_once 'XMLFileReader.class.php';
?>
<?php
/**
 * Reader���饹�Υ��󥹥���������Ԥ����饹
 */
class ReaderFactory {
    /**
     * Reader���饹�Υ��󥹥��󥹤���������
     */
    public function create($filename) {
        $reader = $this->createReader($filename);
        return $reader;
    }

    /**
     * Reader���饹�Υ��֥��饹����Ƚ�ꤷ����������
     */
    private function createReader($filename) {
        $poscsv = stripos($filename, '.csv');
        $posxml = stripos($filename, '.xml');

        if ($poscsv !== false) {
            $r = new CSVFileReader($filename);
            return $r;
        } else if ($posxml !== false) {
            return new XMLFileReader($filename);
        } else {
            die('This filename is not supported : ' . $filename);
        }
    }
}
?>
