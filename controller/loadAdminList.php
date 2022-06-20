<?php
    // create a new instance of the SQLQuery class
    include_once("model/SqlQuery.php");

    $sqlQuery = new SqlQuery();

    $result = $sqlQuery->fetchAllUserAdmin();
    
    if($result){
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
?>
<div class="admin-list-content-items-wrapper" data-id="<?= $row['id']?>" onclick="deleteAdmin(this.dataset.id)">
    <div class="admin-list-content-items-container">
        <div class="admin-list-content-item-row avatar-item">
            <div class="avatar-admin">
                <img src="../vendor/img/profile_pic/<?= $row['img'] ?>" alt="" />
            </div> 
        </div>
        <div class="admin-list-content-item-row">
            <p><?= $row['user_id'] ?></p>
        </div>
        <div class="admin-list-content-item-row">
            <span class="delete material-icons">delete</span>
        </div>
    </div>
</div>
<?php
            }
        }
    }
?>