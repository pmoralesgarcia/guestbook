<?php include "templates/header.php"; ?>

<ul>
	<?php
	     if($_SERVER['REMOTE_USER'])
echo '<li><a href="create"><strong>Create Guestbook Entry</strong></a> - Come say hello!</li>';
else
echo 'Please sign in using your domain to post on guestbook.';
			?>
	<li><a href="update"><strong>Read Guestbook Entries</strong></a> -See other visitors posts!</li>
</ul>
<img src="files/images/book.png">
<h3>Welcome to my guestbook!</h3>
<p>Feel free sign in with your domain using indieauth to manually sign the guest book.</p> 

Send a webmention to <code>https://lifeofpablo.com/guestbook</code> if you prefer to do so!


Do you see a bug? How can I make it better? Email me at <a href="mailto:hello@lifeofpablo.com">hello@lifeofpablo.com.</a>

<br>
			<?php
				     if($_SERVER['REMOTE_USER'] == 'https://lifeofpablo.com/')
					     echo '
<h3>Admin</h3>
<ul>
	<li><a href="update.php"><strong>Update</strong></a> - edit a user</li>
	<li><a href="delete.php"><strong>Delete</strong></a> - delete a manual guestbook entry</li>
</ul>
';
else
echo '<a href="panel">Panel</a>';
			?>

<?php include "templates/footer.php"; ?>
