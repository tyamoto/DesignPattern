<?php
require_once 'OrganizationEntry.class.php';
?>
<?php
interface Visitor {
    public function visit(OrganizationEntry $entry);
}
?>
