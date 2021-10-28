<?php
include_once("../model/M_Student.php");
class Ctrl_Student
{
    public function __invoke()
    {
        if (isset($_GET['studentId'])) {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['studentId']);
            include_once("../view/StudentDetail.html");
        } else if (isset($_GET['mod1'])) {
            include_once("../view/AddStudent.html");
        } else if (isset($_GET['add-student'])) {
            $modelStudent = new Model_Student();
            $name = $_POST['name'];
            $age = $_POST['age'];
            $university = $_POST['university'];
            $student = $modelStudent->addStudent($name, $age, $university);
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentList.html");
        } else if (isset($_GET['mod2'])) {
            include_once("../view/UpdateStudent.html");
        } else if (isset($_GET['add-student'])) {
            $modelStudent = new Model_Student();
            $name = $_POST['name'];
            $age = $_POST['age'];
            $university = $_POST['university'];
            $student = $modelStudent->addStudent($name, $age, $university);
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentList.html");
        } else {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentList.html");
        }
    }
}

$C_Student = new Ctrl_Student();
$C_Student->__invoke();
