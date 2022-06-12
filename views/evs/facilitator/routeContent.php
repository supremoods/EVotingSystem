<?php
if ($page == "dashboard") {
    include_once("views/evs/facilitator/dashboard.php");
}
else if ($page == "elections") {
    echo "elections";
}
else if ($page == "students") {
    include_once("views/evs/facilitator/students.php");
}
elseif ($page == "report") {
    echo "report";
}
elseif ($page == "forum") {
    include_once("views/evs/facilitator/forum.php");
}

elseif($page == "account_setting"){
    include_once("views/evs/facilitator/account_settings.php");
}

?>