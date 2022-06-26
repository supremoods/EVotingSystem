<!-- studunt lits layout-->
<div class="account-setting-wrapper">
    <div class="account-setting-container">
        <div class="account-setting-header">
            <p>Account Settings</p>
        </div>
    </div>

    <div class="admin-content">
        <div class="avatar">
            <div class="update-avatar-btn-wrapper">
                <div class="update-avatar-btn" >
                    <div class="update-avatar-text">
                        <p>Update<br>Avatar</p>
                    </div>
                </div>
            </div>
            <img id="admin-avatar"  alt="" />
            <form method="post" enctype="multipart/form-data" id="upload-avatar"> 
            <input id="change-avatar" name="image" type="file" accept="image/*" hidden>
                <button id="submit-btn" name="submit" type="submit" hidden>Submit</button>
            </form>
        </div>
        <div class="admin-content-items">
            <div class="admin-content-items-wrapper">
                  <div class="admin-content-items-container">
                        <div class="admin-content-item-row">
                              <p>EVS ID</p>
                        </div>
                        <div class="admin-content-item-row">
                              <input type="text" id="evs-id" data-column="user_id" value="" disabled>
                        </div>
                        <div class="admin-content-item-row" onclick="editAccount()">
                              <span class="edit material-icons-outlined">edit</span>
                        </div>
                  </div>
                  <div class="admin-content-items-container">
                        <div class="admin-content-item-row">
                              <p>University ID</p>
                        </div>
                        <div class="admin-content-item-row">
                              <input type="text" id="univ-id" data-column="university_id" value="" disabled>
                        </div>
                        <div class="admin-content-item-row" onclick="editAccount()">
                              <span class="edit material-icons-outlined">edit</span>
                        </div>
                  </div>
                  <div class="admin-content-items-container">
                        <div class="admin-content-item-row">
                              <p>First Name</p>
                        </div>
                        <div class="admin-content-item-row-content">
                              <input type="text" id="first_name" data-column="first_name" value="" disabled>
                        </div>
                        <div class="admin-content-item-row" onclick="editAccount()">
                              <span class="edit material-icons-outlined">edit</span>
                        </div>
                  </div>
                  <div class="admin-content-items-container">
                        <div class="admin-content-item-row">
                              <p>Last Name</p>
                        </div>
                        <div class="admin-content-item-row-content">
                              <input type="text" id="last_name" data-column="last_name" value="" disabled>
                        </div>
                        <div class="admin-content-item-row" onclick="editAccount()">
                              <span class="edit material-icons-outlined">edit</span>
                        </div>
                  </div>
                  <div class="admin-content-items-container">
                        <div class="admin-content-item-row">
                              <p>Email</p>
                        </div>
                        <div class="admin-content-item-row">
                              <input type="text" id="email" data-column="email" value="" disabled>
                        </div>
                        <div class="admin-content-item-row" onclick="editAccount()">
                              <span class="edit material-icons-outlined">edit</span>
                        </div>
                  </div>
                  <div class="admin-content-items-container">
                        <div class="admin-content-item-row">
                              <p>Password</p>
                        </div>
                        <div class="admin-content-item-row">
                              <input type="password" id="password" data-column="password" value="" disabled>
                        </div>
                        <div class="admin-content-item-row" onclick="editAccount()">
                              <span class="edit material-icons-outlined">edit</span>
                        </div>
                  </div>
            </div>
        </div>
    </div>
</div>
 