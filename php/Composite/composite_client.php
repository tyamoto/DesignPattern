<?php
require_once 'Group.class.php';
require_once 'Employee.class.php';
?>
<?php
    /**
     * ÌÚ¹½Â¤¤òºîÀ®
     */
    $root_entry = new Group("001", "ËÜ¼Ò");
    $root_entry->add(new Employee("00101", "CEO"));
    $root_entry->add(new Employee("00102", "CTO"));

    $group1 = new Group("010", "¡û¡û»ÙÅ¹");
    $group1->add(new Employee("01001", "»ÙÅ¹Ä¹"));
    $group1->add(new Employee("01002", "º´¡¹ÌÚ"));
    $group1->add(new Employee("01003", "ÎëÌÚ"));
    $group1->add(new Employee("01003", "µÈÅÄ"));

    $group2 = new Group("110", "¢¤¢¤±Ä¶È½ê");
    $group2->add(new Employee("11001", "ÀîÂ¼"));
    $group1->add($group2);
    $root_entry->add($group1);

    $group3 = new Group("020", "¡ß¡ß»ÙÅ¹");
    $group3->add(new Employee("02001", "Çë¸¶"));
    $group3->add(new Employee("02002", "ÅÄÅç"));
    $group3->add(new Employee("02002", "Çò°æ"));
    $root_entry->add($group3);

    /**
     * ÌÚ¹½Â¤¤ò¥À¥ó¥×
     */
    $root_entry->dump();
?>
