<div class="register_wrapper">
    <div class="register_card">
        <div class="header_title">
            <h1>Student Registration</h1>
        </div>
        <div class="line">

        </div>
        <form method="post">
            <div class="register_input_form">
                <div class="col">
                    <div class="reg_field_wrapper row">
                        <label for="userID">Profile Picture</label>
                        <div class="inputContainer">
                            <div class="profile_container">
                                <img src="./vendor/img/avatar.svg" alt="" >
                                <span class="material-symbols-outlined">add_photo_alternate</span>
                            </div>
                        </div>
                        <div class="upload_btn">
                            <button>Upload Image</button>
                        </div>
                        <input type="file" name="image" id="image" accept="image/*" hidden/>
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="University">University</label>
                        <input type="text" name="university" id="university" placeholder="Input your university">
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="studentId">Student Id</label>
                        <input type="text" name="studentId" id="studentId" placeholder="Input your student ID">
                    </div>

                </div>
                <div class="col">
                    <div class="reg_field_wrapper row">
                        <label for="fName">First Name</label>
                        <input type="text" name="fName" id="fName" placeholder="Input your First Name">
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="mName">Middle Name</label>
                        <input type="text" name="mName" id="mName" placeholder="Input your Middle Name">
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="lName">Last Name</label>
                        <input type="text" name="lName" id="lName" placeholder="Input your Last Name">
                    </div>
                </div>
                <div class="col">
                    <div class="reg_field_wrapper row">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Input your email">
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Input your Password">
                    </div>
                    <div class="reg_field_wrapper row">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password" id="password" placeholder="Confirm your Password">
                    </div>
                </div>
            </div>
            <div class="submit_btn">
                <button value="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

