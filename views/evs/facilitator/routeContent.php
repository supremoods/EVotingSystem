<?php
if ($page == "dashboard") {
    include_once("views/evs/facilitator/dashboard.php");
}
else if ($page == "elections") {
    include_once("views/evs/facilitator/elections.php");
}
else if ($page == "students") {
    include_once("views/evs/facilitator/students.php");
}
else if ($page == "report") {
    echo "report";
}
else if ($page == "forum") {
    include_once("views/evs/facilitator/forum.php");
}

else if($page == "account_setting"){
    include_once("views/evs/facilitator/account_settings.php");
}

?>