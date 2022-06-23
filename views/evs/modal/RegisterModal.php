<div class="register_wrapper">
    
    <div class="register_card">
        <form method="post" enctype="multipart/form-data" id="getUserData">
            <div class="header_title">
                <div>
                    <h1 id="profession"></h1>
                    <input type="text" class="profession" name="privillage" hidden>
                </div>
                <div>
                    <!-- close button -->
                    <div class="close_btn">
                        <span class="material-icons" onclick="studentRegister()">arrow_back_ios</span>
                    </div>

                </div>
            </div>
            <div class="line">

            </div>
            <div class="register_input_form">
                <div class="col">
                    <div class="reg_field_wrapper row">
                        <label for="userID">Profile Picture</label>
                        <div class="inputContainer">
                            <div class="profile_container">
                                <img class="uploaded_Profile" src="vendor/img/profile_pic/avatar.svg" alt="" >
                                <span class="material-icons">add_photo_alternate</span>
                            </div>
                        </div>
                        <div class="upload_btn" onclick="triggerUpload()">
                            <button type="button">Upload Image</button>
                        </div>
                        <input type="file" name="image" id="uploadProfileImg" onclick="uploadImage()"  accept="image/*" hidden/>
                    </div>
                    <div class="reg_field_wrapper row search-input">
                        <label for="University">University</label>
                        <input type="text" name="university" id="university" placeholder="Input your university" required>
                        <div class="autocom-box">
                            <!-- here list are inserted from javascript -->
                        </div>
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="universityId">University Id</label>
                        <input type="text" name="universityId" id="universityId" placeholder="Input your University ID" required>
                    </div>

                </div>
                <div class="col">
                    <div class="reg_field_wrapper row">
                        <label for="fName">First Name</label>
                        <input type="text" name="fName" id="fName" placeholder="Input your First Name" required>
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="mName">Middle Name</label>
                        <input type="text" name="mName" id="mName" placeholder="Input your Middle Name" required>
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="lName">Last Name</label>
                        <input type="text" name="lName" id="lName" placeholder="Input your Last Name"   required>
                    </div>
                </div>
                <div class="col">
                    <div class="reg_field_wrapper row">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Input your email" required>
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="passBorder" id="password" placeholder="Input your Password" required>
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password" class="passBorder" id="confirmPassword" placeholder="Confirm your Password" required>
                    </div>
                </div>
            </div>
            <div class="submit_btn">
                <button name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

