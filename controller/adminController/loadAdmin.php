<?php
    // create a new instance of the adminSqlQuery class
    include_once("model/AdminSqlQuery.php");

    $adminSqlQuery = new AdminSqlQuery();
    $result = $adminSqlQuery->fetchAdminInfo($_SESSION['id']);

?>


    <div class="admin-content-item-row">
        <p><?= $adminSqlQuery->getUserName()?></p>
    </div>
    <div class="admin-content-item-row">
        <?php
            //unhashed passw
            $asterisk = strlen($adminSqlQuery->getPassword());
        ?>
        <p>
            <?php for($i = 0; $i < $asterisk; $i++){
                echo '*';
            }?>
        </p>
    </div>
    <div class="admin-content-item-row" onclick="editAccount()">
        <span class="edit material-icons-outlined">edit</span>
    </div>
