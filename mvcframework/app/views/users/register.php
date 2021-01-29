<?php
    require APPROOT.'/views/includes/head.php';
?>
<div class="navbar">
    <?php
        require APPROOT.'/views/includes/navigation.php';
    ?>
</div>
<div class="container-login">
    <div class="wrapper-login">
        <h2>Register</h2>

        <form action="<?php echo URLROOT; ?>/users/register" method="post">
            <input type="text" name="username" placeholder="Username *">
            <span class="invalidFeedback"><?php echo $data['usernameError']; ?></span>
            <input type="email" name="email" placeholder="Email *">
            <span class="invalidFeedback"><?php echo $data['emailError']; ?></span>
            <input type="password" name="password" placeholder="Password *">
            <span class="invalidFeedback"><?php echo $data['passwordError']; ?></span>
            <input type="password" name="confirmPassword" placeholder="Confirm Password *">
            <span class="invalidFeedback"><?php echo $data['confirmPasswordError']; ?></span>
            <button id="submit" type="submit" name="submit">Submit</button>
            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>
    </div>
</div>