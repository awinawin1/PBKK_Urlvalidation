<?php if (isset($message)) { ?>
<?= $message ?>
<?php } ?>

<form action="/dashboard/auth/login" method="post">
            
    Username <input type="text" name="username" required="required"> <br/>
    Password <input type="password" name="password" required="required"> <br/>

    <input type="submit" value="login">
    
</form>