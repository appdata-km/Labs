<?php
echo <<< HEREDOC
	<h3>Sign up</h3>
	<form action="sql.php" method="post">
    		<input name="name" type="text" required="required" maxlength="20">���<br> 
    		<input name="surname" type="text" required="required" maxlength="20">�������<br> 
    		<input name="login" type="text" required="required" maxlength="20">�����<br> 
    		<input name="password" type="text" required="required" maxlength="20">������<br> 
    		<input name="phoneNumber" type="text" required="required" maxlength="20">����� ��������<br> 
    		<input name="email" type="text" required="required" maxlength="30">E-mail<br><br> 
    		<button type="submit">������������������</button>
</form>
HEREDOC;