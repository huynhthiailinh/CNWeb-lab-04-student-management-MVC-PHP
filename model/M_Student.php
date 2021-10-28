<?php
include_once("E_Student.php");
class Model_Student
{
    public function __construct()
    {
    }

    public function getAllStudents()
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "select * from student";
        $result = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            while ($i != $id) $i++;
            $students[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        return $students;
    }

    public function getStudentDetail($studentId)
    {
        $allStudents = $this->getAllStudents();
        return $allStudents[$studentId];
    }

    public function addStudent($name, $age, $university)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "insert into student values(NULL, '$name', $age, '$university')";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }

    public function updateStudent($id, $name, $age, $university)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "update student set name = '$name', age = $age, university = '$university' where id = $id";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }

    public function deleteStudent($id)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "delete from student where id = $id";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
}
