<?php
require_once 'Command.class.php';
require_once 'File.class.php';
?>
<?php
/**
 * ConcreteCommand�N���X�ɑ�������
 */
class DecompressCommand implements Command {
    private $file;
    public function __construct(File $file) {
        $this->file = $file;
    }
    public function execute() {
        $this->file->decompress();
    }
}
?>
