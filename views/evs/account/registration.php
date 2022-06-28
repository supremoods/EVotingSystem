<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../vendor/img/logo/evs_logo_blue.png" type="image/x-icon" />
    <link rel="stylesheet" href="../vendor/css/root.css" />
    <link rel="stylesheet" href="../vendor/css/registration.css" />
    <title>Registration | EVS</title>
</head>
<body>
    <div id="root">
        <div class="registration-wrapper">
            <div class="evs-logo-container">
                <div class="evs-logo">
                    <img src="../vendor/img/logo/logo_word.svg" alt="EVS Logo" />
                </div>
            </div>
            <div class="container-form-slide">
                <div class="registration-form-container form-1">
                    <div class="registration-header">
                        <h1>Create your EVS Account</h1>
                    </div>
                    <div class="registration-form">
                        <form method="post" id="register-form-1">
                            <input type="text" name="privillage" value="<?=$privillage?>"hidden>
                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset">
                                        <input type="text" id="first-name" name="first-name" class="first-name" required="" autocomplete="off">
                                        <label class="placeholder">First Name</label>
                                    </div>
                                    <div class="Fieldset">
                                        <input type="text" id="last-name"  name="last-name" class="last-name" required="" autocomplete="off">
                                        <label class="placeholder">Last Name</label>
                                    </div>
                                </div>
                                <div id="nameError" class="hint-error nameError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Enter first and last names</span>
                                    </div>
                                </div>
                            </div>

                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset">
                                        <input type="text" id="university"  name="university" class="university" required="" autocomplete="off">
                                        <label class="placeholder">University Email</label>
                                    </div>
                                </div>
                                <div class="Fields-hint Fields-hint-email">
                                    <p>Use your university email</p>
                                </div>
                                <div id="emailError" class="hint-error emailError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Enter first and last names</span>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset">
                                        <input type="password" id="password" name="password" class="password" required="" autocomplete="off">
                                        <label class="placeholder placeholder-pass">Password</label>
                                    </div>
                                    <div class="Fieldset">
                                        <input type="password" id="confirm" class="confirm" required="" autocomplete="off">

                                        <label class="placeholder">Confirm</label>
                                    </div>
                                </div>
                                <div class="Fields-hint Fields-hint-pass">
                                    <p>Use 8 or more characters with a mix of letters, numbers & symbols</p>
                                </div>
                                <div id="passwordError" class="hint-error passwordError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Enter first and last names</span>
                                    </div>
                                </div>
                                <div class="fields-show-password">
                                    <div class="show-password-switch">
                                        <input type="checkbox" id="show-password-switch" onclick="showHidePassword()"/>
                                        <p>Show Password</p>
                                    </div>
                                </div>
                            </div>

                            <div class="fields-button">
                                <div class="sign-in-btn">
                                    <button type="button" id="sign-in-btn">Sign in instead</button>
                                </div>
                                <div class="next-btn">
                                    <button type="submit" id="next-btn">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="registration-form-container form-2">
                    <div class="registration-header">
                        <h1>Verification</h1>
                    </div>
                    <div class="registration-form">
                        <form method="post" id="register-form-2">

                            <input type="text" name="privillage" value="<?=$privillage?>"hidden>
                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset">
                                        <input type="text" name="university-id" id="university-id" class="university-id" required="" autocomplete="off">
                                        <label class="placeholder">University ID</label>
                                    </div>
                                </div>
                                <div id="universityIdError" class="hint-error universityIdError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Enter University ID</span>
                                    </div>
                                </div>
                            </div>

                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset field-Univ">
                                        <input type="text" name="university-name" id="university-name" class="university-name" required="" autocomplete="off">
                                        <label class="placeholder">University Name</label>
                                        <div class="autocom-box">
                                            <!-- here list are inserted from javascript -->
                                        </div>
                                    </div>
                                </div>
                                <div id="universityNameError" class="hint-error universityNameError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Choose University Name</span>
                                    </div>
                                </div>
                            </div>
                            <?php if($privillage == 'student'){ ?>

                 
                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset field-dept">
                                        <input type="text" name="college-department" id="college-department" class="college-department" required="" autocomplete="off">
                                        <label class="placeholder">College Department</label>
                                        <div class="autocom-box">
                                            <!-- here list are inserted from javascript -->
                                        </div>
                                    </div>
                                </div>
                                <div id="collegeDeptError" class="hint-error collegeDeptError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Choose College Department</span>
                                    </div>
                                </div>
                            </div>

                            <div class="Fields-wrapper">
                                <div class="Fields">
                                    <div class="Fieldset field-courses">
                                        <input type="text" name="course" id="course" class="course" required="" autocomplete="off">
                                        <label class="placeholder">Course</label>
                                        <div class="autocom-box">
                                            <!-- here list are inserted from javascript -->
                                        </div>
                                    </div>
                                </div>
                                <div id="courseError" class="hint-error courseError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Choose Course</span>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                            <div class="fields-button">
                                <div class="form-2-back">
                                    <button type="button" id="form-2-back">Back</button>
                                </div>
                                <div class="next-btn">
                                    <button type="submit" id="next-form-btn">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="registration-form-container form-3">
                    <div class="registration-header">
                        <h1>EVS Verification</h1>
                    </div>
                    <div class="registration-form">
                        <form method="post" id="register-form-3" enctype="multipart/form-data">
                            <div class="Fields-wrapper">
                                <div class="Fields univ-id-container">
                                    <div class="Fieldset">
                                        <div class="university-id-img-container">
                                            <img class="id-container" src="../vendor/img/id/id.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="Fieldset">
                                        <input type="file" name="university-id-img" id="university-id-img" class="university-id-img" required="">
                                        <label class="placeholder">University ID</label>
                                    </div>
                                </div>
                                <div id="evsIdError" class="hint-error evsIdError">
                                    <div class="error-svg-icon">
                                        <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                        </svg>
                                    </div>
                                    <div class="error-desc">
                                        <span class="error-desc-txt">Enter EVS ID</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fields-button">
                                <div class="form-3-back">
                                    <button type="button" id="form-3-back">Back</button>
                                </div>
                                <div class="next-btn">
                                    <button type="submit" id="submit-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../vendor/js/registration.js"></script>
</body>
</html>