<?php
session_start();
?>
<html>
<body>
<?php
    $_SESSION['halo'] = "halo i'm new session";
    print_r($_SESSION);
    print_r(session_get_cookie_params());
?>

</body>
</html>