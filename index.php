<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">Quản lý sinh viên</div>
        <div class="menu">
            <ul>
                <li><a href="controller/C_Student.php">Xem sinh viên</a></li>
                <li><a href="controller/C_Student.php?mod1='1'">Thêm sinh viên</a></li>
                <li><a href="controller/C_Student.php?mod2='1'">Cập nhật sinh viên</a></li>
                <li><a href="controller/C_Student.php?mod3='1'">Xóa sinh viên</a></li>
                <li><a href="controller/C_Student.php?mod4='1'">Tìm kiếm sinh viên</a></li>
            </ul>
        </div>
    </div>
</body>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #FFF3E4;
        height: 100vh;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #483434;
    }

    .title {
        font-size: xx-large;
        font-weight: bold;
    }

    .menu {
        margin-top: 20px;
    }

    .menu ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .menu li {
        width: 310px;
    }

    .menu ul li a {
        color: inherit;
        text-decoration: none;
        padding: 10.5px 11px;
        background-color: #EED6C4;
        display: block;
        text-align: center;
    }

    .menu ul li a:hover {
        font-weight: bold;
        color: #FFF3E4;
        background-color: #6B4F4F;
    }
</style>

</html>