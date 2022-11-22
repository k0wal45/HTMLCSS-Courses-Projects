<?php
    if (isset($_REQUEST['email'])) {

        $admin_email = "d.kowal.com@gmail.com";
        $name = $_REQUEST['name']
        $email = $_REQUEST['email']
        $phone = $_REQUEST['phone']

        mail($admin_email, "New Form Submission", .$phone, "From:" . $email);

        header('Location: success.html')
    }
?>