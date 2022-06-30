
<?php
    if(isset($_GET['registerCandidates'])){
        if($_GET['registerCandidates'] <= 2){
            
?>
<h1 class="form-number"><?=$_GET['registerCandidates']?></h1>
<div class="student-candidates-wrapper">
    <div class="student-candidate-container">
        <form method="post" id="register-candidates" enctype="multipart/form-data">
            <div class="partylist-header-name">
                <div class="Fields-wrapper">
                    <div class="Fields-party">
                        <div class="Fieldset">
                            <input type="text" name="party-name" class="party-name" required="" autocomplete="off">
                            <label class="placeholder">Enter Party Name</label>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="student-candidate-wrapper-items">
                <div class="student-candidate-items top-position-1">
                    <div class="student-candidate-item president">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>President</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="president-image" id="president-image" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="president-candidate-name" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="president-college"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="president-course" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="president-year"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item vice-president">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Vice President</h1>
                                
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="vice-president-image" id="vice-president-image" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="vice-pres-candidate-name" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="vice-pres-college"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="vice-pres-course"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="vice-pres-year"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="student-candidate-items top-position-2">
                    <div class="student-candidate-item secretary">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Secretary</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="sec-image" id="sec-image" class="candidates-img" required="" hidden>       
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="sec-candidate-name" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="sec-college"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="sec-course"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="sec-year"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item treasurer">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Treasurer</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="treasurer-image" id="treasurer-image" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="treasurer-candidate-name" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="treasurer-college"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="treasurer-course"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="treasurer-year"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item public-relations-officer">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Public Relations Officer</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="pro-image" id="pro-image" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="pro-candidate-name" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="pro-college"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="pro-course"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="pro-year"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="student-candidate-items senators owl-carousel owl-theme" id="senators">
                    <div class="student-candidate-item senator item">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Senator</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="senator-image-1" id="senator-image-1" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-candidate-name-1" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-college-1"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-course-1"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-year-1"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item senator item">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Senator</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="senator-image-2" id="senator-image-2" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-candidate-name-2" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-college-2"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-course-2"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-year-2"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item senator item">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Senator</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="senator-image-3" id="senator-image-3" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-candidate-name-3" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-college-3"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-course-3"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-year-3"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item senator item">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Senator</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="senator-image-4" id="senator-image-4" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-candidate-name-4" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-college-4"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-course-4"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-year-4"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item senator item">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Senator</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="senator-image-5" id="senator-image-5" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-candidate-name-5" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-college-5"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-course-5"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-year-5"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item senator item">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Senator</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="senator-image-6" id="senator-image-6" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-candidate-name-6" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-college-6"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-course-6"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-year-6"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-candidate-item senator item">
                        <div class="student-candidate-card">
                            <div class="header-position">
                                <h1>Senator</h1>
                            </div>
                            <div class="img-candidate">
                                <img src="../vendor/img/candidates/uploadImage.png" class="candidates-container" alt="">
                                <input type="file" name="senator-image-7" id="senator-image-7" class="candidates-img" required="" hidden>
                            </div>
                            <div class="candidate-info-input">
                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-candidate-name-7" class="candidate-name" required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-college-7"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate College</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-course-7"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Course</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="Fields-wrapper">
                                    <div class="Fields">
                                        <div class="Fieldset">
                                            <input type="text" name="senator-year-7"  required="" autocomplete="off">
                                            <label class="placeholder">Enter Candidate Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="add-button-wrapper">
                    <button type="button" id="add-candidate-btn" onclick="addCandidate()">Add Candidate</button>
                </div>
                <div class="student-candidate-items owl-carousel owl-theme" id="slide-governor">
                    <div class="candidate-items-governors item">
                        <div class="college-dept">
                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset">
                                        <input type="text" name="college_department_1" class="college_department" required="" autocomplete="off">
                                        <label class="placeholder">Enter College Department</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="candidate-item-wrapper">
                            <div class="student-candidate-item governor">
                                <div class="student-candidate-card">
                                    <div class="header-position">
                                        <h1>Governor</h1>
                                    </div>
                                    <div class="img-candidate">
                                        <img src="../vendor/img/candidates/uploadImage.png" class="gov-img-cont-1 gov-container"  alt="">
                                        <input type="file" name="gov-image-1" id="gov-image-1" class="gov-img" required="" hidden>
                                    </div>
                                    <div class="candidate-info-input">
                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="governor-candidate-name-cd-1" class="candidate-name" required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="governor-college-cd-1"  required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate College</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="governor-course-cd-1"  required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate Course</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="governor-year-cd-1"  required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate Year</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="student-candidate-item vice-governor">
                                <div class="student-candidate-card">
                                    <div class="header-position">
                                        <h1>Vice Governor</h1>
                                    </div>
                                    <div class="img-candidate">
                                        <img src="../vendor/img/candidates/uploadImage.png" class="vice-gov-img-cont-1 gov-container"  alt="">
                                        <input type="file" name="vice-gov-image-1" id="vice-gov-image-1" class="gov-img" required="" hidden>
                                    </div>
                                    <div class="candidate-info-input">
                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="vice-governor-candidate-name-cd-1" class="candidate-name" required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="vice-governor-college-cd-1"  required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate College</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="vice-governor-course-cd-1"  required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate Course</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Fields-wrapper">
                                            <div class="Fields">
                                                <div class="Fieldset">
                                                    <input type="text" name="vice-governor-year-cd-1"  required="" autocomplete="off">
                                                    <label class="placeholder">Enter Candidate Year</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fields-button">
                <div class="register-btn-wrapper">
                    <button type="submit" id="register-btn">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
        }
    }
?>