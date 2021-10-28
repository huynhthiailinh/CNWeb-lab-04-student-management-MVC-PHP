<?php
include_once("../model/M_Student.php");
class Ctrl_Student
{
    public function __invoke()
    {
        //Xem tất cả các sinh viên
        if (isset($_GET['mod1'])) {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentListForView.html");
        } else if (isset($_GET['view']) && isset($_GET['studentId'])) {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['studentId']);
            include_once("../view/StudentDetail.html");
        }

        //Thêm sinh viên
        if (isset($_GET['mod2'])) {
            include_once("../view/AddStudent.html");
        } else if (isset($_GET['add'])) {
            $modelStudent = new Model_Student();
            $name = $_POST['name'];
            $age = $_POST['age'];
            $university = $_POST['university'];
            $student = $modelStudent->addStudent($name, $age, $university);
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentListForView.html");
        }

        //Cập nhật sinh viên
        if (isset($_GET['mod3'])) {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentListForUpdate.html");
        } else if (isset($_GET['update']) && isset($_GET['studentId'])) {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['studentId']);
            include_once("../view/UpdateStudent.html");
        } else if (isset($_GET['save']) && isset($_GET['studentId'])) {
            $modelStudent = new Model_Student();
            $id = $_GET['studentId'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $university = $_POST['university'];
            $modelStudent->updateStudent($id, $name, $age, $university);
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentListForUpdate.html");
        }

        //Xóa sinh viên
        if (isset($_GET['mod4'])) {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentListForDelete.html");
        } else if (isset($_GET['delete']) && isset($_GET['studentId'])) {
            $modelStudent = new Model_Student();
            $modelStudent->deleteStudent($_GET['studentId']);
            $studentList = $modelStudent->getAllStudents();
            include_once("../view/StudentListForDelete.html");
        }
    }
}

$C_Student = new Ctrl_Student();
$C_Student->__invoke();
