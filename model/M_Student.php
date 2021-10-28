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
        $i = 1;
        $j = 1;
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            while ($i != $id) $i++;
            $students[$j++] = new Entity_Student($id, $name, $age, $university);
            $i++;
        }
        return $students;
    }

    public function getStudentDetail($studentId)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "select * from student where id = $studentId";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $name = $row['name'];
        $age = $row['age'];
        $university = $row['university'];
        $student = new Entity_Student($id, $name, $age, $university);
        return $student;
    }

    public function addStudent($name, $age, $university)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "insert into student values(NULL, '$name', $age, '$university')";
        mysqli_query($link, $sql);
        mysqli_close($link);
    }

    public function updateStudent($id, $name, $age, $university)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "update student set name = '$name', age = $age, university = '$university' where id = $id";
        mysqli_query($link, $sql);
        mysqli_close($link);
    }

    public function deleteStudent($id)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "delete from student where id = $id";
        mysqli_query($link, $sql);
        mysqli_close($link);
    }

    public function searchStudent($key, $value)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        if ($key == 'id' || $key == 'age') {
            $sql = "select * from student where $key = $value";
        } else {
            $sql = "select * from student where $key = '$value'";
        }
        $result = mysqli_query($link, $sql);
        $i = 1;
        $j = 1;
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            while ($i != $id) $i++;
            $students[$j++] = new Entity_Student($id, $name, $age, $university);
            $i++;
        }
        return $students;
    }
}
