<?php

function runTest()
{
    $student1 = new Student('Kolya', 'Gorlienko', 'ФМиИТ', 3, 2);
    $student2 = new Student('Vova', 'Demidov', 'ФМиИТ', 3, 2);
    $student3 = new Student('Dima', 'Eskin', 'ФМиИТ', 3, 2);
    $student4 = new Student('Dima', 'Zavodov', 'ФМиИТ', 3, 2);

    $studentsList = new StudentsList();
    $studentsList->add($student1);
    $studentsList->add($student2);
    $studentsList->add($student3);
    $studentsList->add($student4);
    $studentsList->store('students.txt');

    echo $studentsList->get(0)->__toString(). "<br>";
    echo $studentsList->get(1)->__toString(). "<br>";
    echo $studentsList->get(2)->__toString(). "<br>";
    echo $studentsList->get(3)->__toString(). "<br>";
}