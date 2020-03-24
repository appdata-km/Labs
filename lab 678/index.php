<?php
echo <<< HEREDOC
	<h3>Log in<a href="log.php">Sign up</a></h3>
	<form action="sql.php" method="post">
    	<input name="login" type="text" required="required">Login<br> 
    	<input name="password" type="password" required="required">Password<br><br>
    	<button type="submit">Enter</button>
</form>
HEREDOC;