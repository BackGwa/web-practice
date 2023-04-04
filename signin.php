<!DOCTYPE html>

<html>

    <head>
        <title>BACKGWA`s Blog - [로그인]</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style/base.css?after">
    </head>

    <body>
        <?php include('nav.php'); ?>

        <form action="./login.php" method="post">

            <!-- 아이디 & 비밀번호 입력 -->
            <input type="text" name="userid" placeholder="아이디 및 이메일" required><br>
            <input type="password" name="userpw" placeholder="비밀번호" required><br>
            <!-- 로그인 옵션과 로그인 -->
            <input type="checkbox" name="autologin"> 자동 로그인
            <br><input type="submit" value="로그인">

        </form>
    </body>

</html>

