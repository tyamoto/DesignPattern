<?php
require_once 'Command.class.php';
require_once 'File.class.php';
?>
<?php
/**
 * ConcreteCommandƒNƒ‰ƒX‚É‘Š“–‚·‚é
 */
class CompressCommand implements Command {
    private $file;
    public function __construct(File $file) {
        $this->file = $file;
    }
    public function execute() {
        $this->file->compress();
    }
}
?>
