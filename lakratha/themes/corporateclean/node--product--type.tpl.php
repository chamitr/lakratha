<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>
  <div class="container-24 grid-14 prefix-1 clearfix">
    <?php print render($content['title_field']); ?>
    <?php print render($content['field_images']); ?>
  </div>
  <div class="container-24 grid-8 prefix-1">
    <div<?php print $content_attributes; ?>>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>
  </div>
  <div class="container-24 grid-24 clearfix">
    <?php if (!empty($content['links'])): ?>
    <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>
    <?php
    print render($content['comments']);
    ?>
  </div>
  <div>
  <?php
	/**
	* Simple wrapper function for drupal_mail() to avoid extraneous code.
	*/
	function custom_drupal_mail($from, $to, $subject, $message) {
	  $my_module = 'custom';
	  $my_mail_token = microtime();
	  $message = array(
	    'id' => $my_module . '_' . $my_mail_token,
	    'from' => $from,
	    'to' => $to,
	    'subject' => $subject,
	    'body' => $message,
	    'headers' => array(
	      'Content-Type' => 'text/plain; charset=UTF-8;',
	      'From' => $from, 
	      'Sender' => $from, 
	      'Return-Path' => $from,
	    ),
	  );
	  $system = drupal_mail_system($my_module, $my_mail_token);
	  $message = $system->format($message);
	  if ($system->mail($message)) {
	    return TRUE;
	  }
	  else {
	    return FALSE;
	  }
	}
	if (isset($_GET['email']))
	{
		//send email
		$to = token_replace('[site:current-user:mail]');
		$from =  token_replace('[site:mail]');
		$subject = 'Contact information for '.token_replace('[node:title-field]', array('node' => $node));
		$body = array('Dear valued customer,',
		'Contact for this advertisement is '.token_replace('[node:author:mail]', array('node' => $node)),
		'Thanks',
		'LakRatha team.');
		
		custom_drupal_mail($from, $to, $subject, $body);

		//go back to previous page
		header('Location: ' . $_SERVER['HTTP_REFERER']);

		drupal_set_message("Contact was emailed to you.");
	}
	else
	{
		if (user_is_logged_in())
		{
			//display 'Email contact to me' button
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]?email";
			$button = "<input type='button' id='php_contact' value='Email contact to me' onclick=\"window.location.href='".$actual_link."'\">";
			print($button);
		}
		else
		{
			print "<h3>Please login to request contact.</h3>";
		}
	}
	?>
  </div>
</article>
