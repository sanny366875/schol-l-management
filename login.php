<?php 
    require_once ("function.php");
    get_header ();
?>
    <!-- login-section -->
     <section class="login-section">
        <div class="container">
            <div class="login-box">
                <form action="login.php" method="post">
                    <label for="">user ID</label>
                    <input type="text" name="user-id/gmail" placeholder="Email">
                    <label for=""class="password"> password </label>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="login" value="log in">
                    <p>Do not have Account? <span><a href="registration.php">Register</a></span></p>
                </form>
            </div>
        </div>
     </section>
    <!-- login-section end -->
    <?php 
         footer ();
    ?>