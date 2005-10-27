<?php
/*
 * Copyright 2004 Matt Brubeck
 * This file is licensed under a Creative Commons license:
 * http://creativecommons.org/licenses/by/2.0/
 */
  require_once "main.inc.php";
  $pageId = "lists";
  $pageTitle = _("Mailing Lists");
  include "../include/header.inc.php";

	echo "<h2>$pageTitle</h2>";

	// i18n-hint:  Please add a note that the manuals below are in English.  If
	// there is documentation available in your language, link to it here.
?>
<p>There are three Oreka lists you can subscribe to:</p>
<ul>
<li><a href="http://sourceforge.net/mailarchive/forum.php?forum_id=46724">oreka-dev</a>: this mailing list is intended for developers that want to compile and change the software.</li>
<li><a href="http://sourceforge.net/mailarchive/forum.php?forum_id=46725">oreka-user</a>: this mailing list is intended for people who just want to use the software.</li>
<li>oreka-announce: this is a very low traffic mailing list. Only new version notifications will be posted there.</li>
</ul>

<?php
  include "../include/footer.inc.php";
?>
