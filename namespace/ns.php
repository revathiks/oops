<?php
#namespace fns;
#namespace sns;


include "fns.php";
include "sns.php";

use sns\A as secondA;

use fns\A as firstA;

$obj=new secondA();

$obj=new firstA();
//$obj->display();
?>