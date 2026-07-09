<?php
require '../../backend/model/Session.php';
$ses = new Session();
$ses->sessionEnd();
header("location:../../index.php?loggedout");