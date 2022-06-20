<div class="add-admin-credential-wrapper">
    <form method="post" id="add-admin">
        <div class="add-admin-credential-card">
            <div class="close-btn-item">
                <span class="material-icons" onclick="addAdmin()">close</span>
            </div>
            <div class="add-header">
                <p>Add Admin</p>
            </div>
            <div class="add-user-id card-item">
                <input class="user_id" type="text" name="user_id" placeholder="User ID" required>
            </div>
            <hr>
            <div class="new-password card-item">
                <div id="passwordInput">
                    <input class="add-password" type="password" id="password" name="password" placeholder="Input Password" required>
                    <span id="showHide">SHOW</span>
                </div>
                <div id="passwordStrength">
                    <span id="poor"></span>
                    <span id="weak"></span>
                    <span id="strong"></span>
                </div>
                <div id="passwordInfo"></div>
            </div>
            <div class="confirm-password card-item">
                <input class="add-confirm-password" id="confirm-password" type="password" name="confirm_password" placeholder="Confirm Password" required>
                <div class="error">
                    <p>Those passwords didn’t match. Try again.</p>
                </div>
            </div>
            <div class="add-admin-credential-btn">
                <button type="submit">
                    <span class="material-icons">add</span>
                    <p>Add</p>
                </button>
            </div>
        </div>
    </form>
</div>