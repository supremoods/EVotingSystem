<?php
if ($page == "voting") {
    include_once("views/evs/voting.php");
}
else if ($page == "candidates") {
    include_once("views/evs/candidates.php");
}
else if ($page == "leaderboard") {
    include_once("views/evs/leaderboard.php");
}
else if ($page == "forum") {
    include_once("views/evs/forum.php");
}
?>