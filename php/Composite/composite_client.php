<?php
require_once 'Group.class.php';
require_once 'Employee.class.php';
?>
<?php
    /**
     * �ڹ�¤�����
     */
    $root_entry = new Group("001", "�ܼ�");
    $root_entry->add(new Employee("00101", "CEO"));
    $root_entry->add(new Employee("00102", "CTO"));

    $group1 = new Group("010", "������Ź");
    $group1->add(new Employee("01001", "��ŹĹ"));
    $group1->add(new Employee("01002", "������"));
    $group1->add(new Employee("01003", "����"));
    $group1->add(new Employee("01003", "����"));

    $group2 = new Group("110", "�����ĶȽ�");
    $group2->add(new Employee("11001", "��¼"));
    $group1->add($group2);
    $root_entry->add($group1);

    $group3 = new Group("020", "�ߡ߻�Ź");
    $group3->add(new Employee("02001", "�븶"));
    $group3->add(new Employee("02002", "����"));
    $group3->add(new Employee("02002", "���"));
    $root_entry->add($group3);

    /**
     * �ڹ�¤������
     */
    $root_entry->dump();
?>
