<?php
require_once 'DataSnapshot.class.php';
?>
<?php
/**
 * Originator����������
 */
final class Data extends DataSnapshot {
    private $comment;

    /**
     * ���󥹥ȥ饯��
     */
    public function __construct() {
        $this->comment = array();
    }

    /**
     * Memento����������
     */
    public function takeSnapshot() {
        return new DataSnapshot($this->comment);
    }

    /**
     * Memento������������
     */
    public function restoreSnapshot(DataSnapshot $snapshot) {
        $this->comment = $snapshot->getComment();
    }

    public function addComment($comment) {
        $this->comment[] = $comment;
    }

    public function getComment() {
        return $this->comment;
    }
}
?>
