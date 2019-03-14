<?php
/*
"J.A.R.V.I.S., are you up?"
"For you sir, always."
"I'd like to open a new project file, index as: Mark 2."
"Shall I store this on the Stark Industries' central database?"
"I don't know who to trust right now. 'Til further notice, why don't we just keep everything on my private server."
"Working on a secret project, are we, sir?"
"I don't want this winding up in the wrong hands. Maybe in mine it could actually do some good."
*/
require_once("_conf/siteconf.php");
require_once("_inc/mysqliconnect.php");
if($online == 'false'){header("Location:offline.php");}
?>