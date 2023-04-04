<!DOCTYPE html>

<html>

    <head>
        <title>PLAYGROUND - 회원가입</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style/base.css?after">
        <link rel="stylesheet" href="./style/input.css?after">
    </head>

    <body>
        <?php include('nav.php'); ?>
        
        <div class="mainpage">

            <form action="./login.php" method="post">

                <input class="input-style" type="email" name="userid" placeholder="이메일" required><br>
                <input class="input-style" type="text" name="userid" placeholder="아이디" required><br>
                <input class="input-style" type="password" name="userpw" placeholder="비밀번호" required><br>
                <input class="input-style" type="password" name="userpw" placeholder="비밀번호 확인" required><br>
                
                <select name="userjob" size="1">
                    <option> - 생년월일 -
                    <?php for($i = date('Y'); $i >= 1900; $i--) echo '<option value="'.$i.'">'.$i ?>
                </select>

                <br><input type="submit" value="회원가입">

            </form>

        </div>
    </body>

</html>

