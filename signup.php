<!DOCTYPE html>

<html>

    <head>
        <title>PLAYGROUND - 회원가입</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style/base.css?after">
        <link rel="stylesheet" href="./style/input.css?after">
        <link rel="stylesheet" href="./style/signup.css?after">
        <link rel="stylesheet" href="./style/font.css?after">
    </head>

    <body>
        <?php include('nav.php'); ?>
        
        <div class="mainpage">

            <form action="./login.php" method="post" class="signup">

                <div class="pt fw700 fs30 btm4">회원가입</div>

                <div class="inputlist">

                    <input class="input-style" type="email" name="userid" placeholder="이메일" required>

                    <div class="idcheck">
                        <input class="input-style" type="text" name="userid" placeholder="아이디" required>
                        <input type="button" value="중복확인" class="chkbtn">
                    </div>

                    <input class="input-style" type="password" name="userpw" placeholder="비밀번호" required>
                    <input class="input-style" type="password" name="userpw" placeholder="비밀번호 확인" required>
                </div>
                
                <select name="userjob" size="1">
                    <option> - 생년월일 -
                    <?php for($i = date('Y'); $i >= 1900; $i--) echo '<option value="'.$i.'">'.$i ?>
                </select>

                <input type="submit" value="회원가입">

            </form>

        </div>
    </body>

</html>

