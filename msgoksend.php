<?php
if (isset($_POST['submit'])){
    if(sanitize_validate_input($lastname) && sanitize_validate_input($firstname) && !empty($gender) && filter_var($email, FILTER_VALIDATE_EMAIL) && sanitize_validate_input($msg)){
        echo '<div class="oksend">Message sent!</div>';
    } else {
        echo '<div class="oksend">Try again, look down!</div>';
    }
}
?>
