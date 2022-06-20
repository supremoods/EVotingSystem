<div class="edit-admin-credential-wrapper">
    <form method="post" id="edit-admin">
        <div class="edit-admin-credential-card">
            <div class="close-btn-item">
                <span class="material-icons" onclick="editAccount()">close</span>
            </div>
            <div class="edit-user-id card-item">
                <p>Username</p>
                <input type="text" class="edit_user_id" name="username" value="<?= $adminSqlQuery->getUserName()?>">
            </div>
            <hr>
            <div class="new-password card-item">
                <div id="new-passwordInput">
                    <input class="new-admin-password" type="password" name="new_password" id="new-password" placeholder="New Password" required>
                    <span id="new-showHide">SHOW</span>
                </div>
                <div id="new-passwordStrength">
                    <span id="new-poor"></span>
                    <span id="new-weak"></span>
                    <span id="new-strong"></span>
                </div>
                <div id="new-passwordInfo"></div>
            </div>
            <div class="confirm-password card-item">
                <input class="new-confirm-password" type="password" name="confirm_password" id="confirm-password" placeholder="Confirm Password" required>
                <div class="new-error">
                    <p>Those passwords didn’t match. Try again.</p>
                </div>
            </div>
            <div class="edit-admin-credential-btn">
                <button type="submit">
                    <span class="material-icons">save</span>
                    <p>Save</p>
                </button>
            </div>
        </div>
    </form>
</div>