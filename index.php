<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
        }
        h1{
            margin-bottom: 20px;
        }
        form{
            display: flex;
             gap: 10px;
            flex-direction: column;
        }
        div{
            display: flex;
        }
        input{
            flex: 1;
         
        }
    </style>
</head>
<body>
    <form action="add.php" method="post">
        <h1>THêm Quản Trị Viên</h1>
        <div>
            <lable>Tên đăng nhập</lable>
            <input type="text" name="fusername">
        </div>
        <div>
            <lable>Mật khẩu</lable>
            <input type="password" name="fpass">
        </div>
        <div>
            <lable>Email</lable>
            <input type="text" name="femail">
        </div>
        <div>
            <lable>Họ tên</lable>
            <input type="text" name="name">
        </div>
        <input type="submit" value="Thêm mới" name="fsubmit">
    </form>
</body>
</html>