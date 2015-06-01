<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>Welcome The Study Town</title>

        <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css_login/style.css">

    </head>

    <body>

        <div class="login-card">
            <div style="color: green"align="center">
                <h2>Blueporise Software</h2>
                Software speaks superbly, sensibly
            </div>
            <h1>Log-in</h1><br>
            <h4 align="center" style="color: red">
                <?php
                $fail_message = $this->session->userdata('fail_msg');
                if ($fail_message) {
                    echo $fail_message;
                    $this->session->unset_userdata('fail_msg');
                }
                ?>

            </h4>
            <h4 align="center" style="color: green">

                <?php
                $logout_message = $this->session->userdata('msg');
                if ($logout_message) {
                    echo $logout_message;
                    $this->session->unset_userdata('msg');
                }
                ?>

            </h4>
            <form action="<?php echo base_url(); ?>user_login/user_login_check" method="post">
                <input type="text" name="user_name" placeholder="Username">
                <input type="password" name="user_password" placeholder="Password">
                <input type="submit" name="login" class="login login-submit" value="login">
            </form>


        </div>


        <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

    </body>

</html>