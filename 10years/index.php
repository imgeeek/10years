<?php
// starting by including the header and footer makes writing clean code easier
include('includes/connection.inc.php');
include('includes/header.php');
?>
 <div class="main">
        <form action="index.php" method="post">
            <input type="text" name="name" required placeholder="Please enter your full name">
            <input type="email" name="email" required placeholder="Please enter your email address">
            <textarea name="msg" cols="30" rows="10"> Compose a message to 10 a guy 10 years older than you!</textarea>
            <button type="submit" name="submit">Send Email</button>
        <?php echo $msg ?>
        </form>
    </div>
<?php

include('includes/footer.php');
?>