<div class="account-setting-wrapper">
    <div class="account-setting-container">
        <div class="account-setting-header">
            <p>Account Settings</p>
        </div>
    </div>

    <div class="admin-content">
        <div class="avatar">
            <div class="update-avatar-btn-wrapper">
                <div class="update-avatar-btn">
                    <div class="update-avatar-text">
                        <p>Update<br>Avatar</p>
                    </div>
                </div>
            </div>
            <img src="../vendor/img/profile_pic/<?= $sqlQuery->getImageSrc()?>" alt="" />
        </div>
        <div class="admin-content-items">
            <div class="admin-content-items-wrapper header">
                <div class="admin-content-item-header">
                    <p>User ID</p>
                </div>
                <div class="admin-content-item-header">
                    <p>Password</p>
                </div>
                <div class="admin-content-item-header">
                    <p>Action</p>
                </div>
            </div>
            <div class="admin-content-items-wrapper">
                <div class="admin-content-items-container">
                    <div class="admin-content-item-row">
                        <p><?= $sqlQuery->getUserID()?></p>
                    </div>
                    <div class="admin-content-item-row">
                        <?php
                            //unhashed passw
                            $asterisk = strlen($sqlQuery->getpassw());
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
                </div>
            </div>
        </div>
    </div>
    
    <div class="add-admin-wrapper">
        <div class="add-admin-btn" onclick="addAdmin()">
            <button>
                <span class="material-icons">add</span>
                <p>Add Admin</p>
            </button>
        </div>
    </div>

    <div class="admin-list-content">
        <div class="admin-list-content-items">
            <div class="admin-list-content-items-wrapper header">
                <div class="admin-list-content-item-header">
                    <p>Avatar</p>
                </div>
                <div class="admin-list-content-item-header">
                    <p>User ID</p>
                </div>
                <div class="admin-list-content-item-header">
                    <p>Action</p>
                </div>
            </div>

            <div class="admin-list-content-items-load">
                
            </div>
           
        </div>
    </div>

    <?php
        include_once 'views/evs/admin/modal/editAccount.php';
        include_once 'views/evs/admin/modal/addAdmin.php';
    ?>

</div>