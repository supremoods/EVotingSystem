<!-- studunt lits layout-->
<?php 
      require_once ('model/FacilitatorSqlQuery.php');

      $facilitatorSqlQuery = new FacilitatorSqlQuery();

      $evs_id = $_SESSION['userAccount'];

      $result = $facilitatorSqlQuery->fetchStudentInfoAccount($evs_id);

?>


<div class="account-setting-wrapper">
      <div class="account-setting-container">
            <div class="account-setting-header">
                  <p>Account Settings</p>
            </div>
      </div>

      <div class="admin-content">
            <div class="avatar-wrapper">
                  <div class="avatar">
                        <div class="update-avatar-btn-wrapper">
                              <div class="update-avatar-btn" onclick="triggerUpload()">
                                    <div class="update-avatar-text">
                                          <p>Update<br>Avatar</p>
                                    </div>
                              </div>
                        </div>
                        <img id="admin-avatar" src="../vendor/img/profile_pic/<?php
                        
                        if(empty($facilitatorSqlQuery->getImageSrc())){
                              echo 'avatar.svg';
                        }else{
                              echo $facilitatorSqlQuery->getImageSrc();
                        }?>" />
                        <form method="post" enctype="multipart/form-data" id="upload-avatar"> 
                              <input id="change-avatar" name="image" onclick="UploadImage()" type="file" accept="image/*" hidden>
                              <button id="submit-btn" name="submit" type="submit" hidden>Submit</button>
                        </form>
                  </div>
            </div>
            <div class="admin-faci-wrapper"> 
                  <div class="admin-content-items">
                        <div class="admin-content-items-wrapper">
                              <div class="admin-content-items-container">
                                    <div class="admin-content-item-row">
                                          <p>User ID</p>
                                    </div>
                                    <div class="admin-content-item-row">
                                          <p><?=$facilitatorSqlQuery->getUserID()?></p>
                                    </div>
                              </div>
                              <div class="admin-content-items-container">
                                    <div class="admin-content-item-row">
                                          <p>Name</p>
                                    </div>
                                    <div class="admin-content-item-row">
                                          <p><?=$facilitatorSqlQuery->getFirstName()." ".$facilitatorSqlQuery->getLastName()?></p>
                                    </div>
                              </div>
                              <div class="admin-content-items-container">
                                    <div class="admin-content-item-row">
                                          <p>Email</p>
                                    </div>
                                    <div class="admin-content-item-row">
                                          <p><?=$facilitatorSqlQuery->getEmail()?></p>
                                    </div>
                              </div>
                              <div class="admin-content-items-container">
                                    <div class="admin-content-item-row">
                                          <p>University</p>
                                    </div>
                                    <div class="admin-content-item-row">
                                          <p><?=$facilitatorSqlQuery->getUniversity()?></p>
                                    </div>
                              </div>
                              <div class="admin-content-items-container">
                                    <div class="admin-content-item-row">
                                          <p>Course</p>
                                    </div>
                                    <div class="admin-content-item-row">
                                          <p><?=$facilitatorSqlQuery->getCourse()?></p>
                                    </div>
                              </div>
                        </div>
                        <div class="new-password-btn">
                              <div class="new-password-btn-text">
                                    <button onclick="changePasswordModal()"><span class="material-icons-outlined">edit</span>Change Password</button>
                              </div>
                        </div>
                        <div class="admin-content-items-wrapper">
                              <div class="admin-content-items-container">
                                    <div class="admin-content-item-row">
                                          <p>Password</p>
                                    </div>
                                    <?php
                                          //unhashed passw
                                          $asterisk = strlen($facilitatorSqlQuery->getPassw())/8;
                                    ?>
                                    <div class="admin-content-item-row">
                                          <p>
                                                <?php for($i = 0; $i < $asterisk; $i++){?>
                                                      *
                                                <?php }?>
                                          </p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="pre-loading-update-avatar">
      <img src="../vendor/img/loader/loading.gif" alt="">
</div>


<div class="new-password-modal">
      <form method="post" id="new-password">
            <div class="Fields-wrapper">
                  <div class="Fields">
                        <div class="Fieldset">
                        <input type="password" id="password" name="password" class="password" required="" autocomplete="off">
                        <label class="placeholder placeholder-pass">Password</label>
                        </div>
                  </div>
                  <div class="Fields">
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
                  <div class="fields-button">
                        <div class="cancel-btn-container">
                              <button type="button" id="cancel-btn" onclick="changePasswordModal()">Cancel</button>
                        </div>
                        <div class="next-btn">
                              <button type="submit" id="change-btn">Change</button>
                        </div>
                  </div>
                  <div class="pre-loading-img">
                        <img src="../vendor/img/loader/loading.gif" alt="">
                  </div>
                  <div class="success-message" onclick="closeSuccess()">
                        <p>Successfully Registered</p>
                  </div>
            </div>
      </form>

</div>
 