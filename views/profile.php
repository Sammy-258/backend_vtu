<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="views/style/profile.css">
    <link rel="stylesheet" href="views/style/nav.css">
    <link rel="stylesheet" href="views/style/services.css">
</head>
<body>
    <section class="main-body">
        <section class="first-section">
            <div class="logo-image m-auto">
                <img src="" alt="">
            </div>
            <div class="main-nav-div">
                <a href="dashboard"><i class="fa-solid fa-house"></i> <span class="show-not-small" style="margin-left: 0.3rem;">Home</span></a>
                <a href="services"><i class="fa-brands fa-servicestack"></i> <span class="show-not-small" style="margin-left: 0.3rem;">Services</span></a>
                <a href="wallet"><i class="fa-solid fa-wallet"></i> <span class="show-not-small"  style="margin-left: 0.3rem;">Wallet</span></a>
                <a href="profile" class="color-nav-small"><i class="fa-solid fa-user"></i> <span   style="margin-left: 0.3rem;">Profile</span></a>
            </div>


            <a href="logout" class="logout-link">Logout</a>
        </section>


        <section class="second-section">
            <div class="container px-4 small-bootom">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="services-main-text m-0">Profile</p>
                        <p class="m-0">Your Billpoint profile is your personal gateway to managing your account information</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center ">
                            <div class="profile-photo m-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0-FVVaYSFbTMXiC6bUW2O_Vzx0OyauBu_RwRlfQ7iIU5aMvWJ86dpdfvGL7eYThBSkQ0&usqp=CAU" alt="">
                            </div>
                            <button class="btn px-5 py-2 text-light btn-upload m-0 mx-2">Upload Photo</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="m-0 name-heading">Dev Sammy</p>
                        <p class="m-0">devsammy258@gmail.com</p>
                    </div>
                </div>
                <div class="row mt-2 gy-4">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="d-flex justify-content-between align-items-center" id="personal-info">
                            <div class="d-flex align-items-center m-0">
                                <div class="icon m-0">
                                    <i class="fa-solid fa-user" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(1, 32, 1);border-radius: 100px;"></i>
                                </div>
                                <div class="d-block mx-2 m-0">
                                    <p class="heading-profile-text m-0">Personal information</p>
                                    <p class="m-0 heading-profile-text-two">Edit Your information</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-chevron-right m-0" style="font-size: 1.5rem;"></i>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="d-flex justify-content-between align-items-center" id="setting">
                            <div class="d-flex align-items-center m-0">
                                <div class="icon m-0">
                                    <i class="fa-solid fa-gear" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(1, 32, 1);border-radius: 100px;"></i>
                                    
                                </div>
                                <div class="d-block mx-2 m-0">
                                    <p class="heading-profile-text m-0">Settings</p>
                                    <p class="m-0 heading-profile-text-two">Account and other setting</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-chevron-right m-0" style="font-size: 1.5rem;"></i>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="d-flex justify-content-between align-items-center" id="help-and-support">
                            <div class="d-flex align-items-center m-0">
                                <div class="icon m-0">
                                    <i class="fa-brands fa-hire-a-helper" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(1, 32, 1);border-radius: 100px;"></i>
                                </div>
                                <div class="d-block mx-2 m-0">
                                    <p class="heading-profile-text m-0">Help & Support</p>
                                    <p class="m-0 heading-profile-text-two">help or contact support</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-chevron-right m-0" style="font-size: 1.5rem;"></i>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="logout" class="d-flex justify-content-between align-items-center" style="text-decoration:none;color:black;">
                            <div class="d-flex align-items-center m-0">
                                <div class="icon m-0">
                                    <i class="fa-solid fa-right-from-bracket" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(200, 13, 13, 0.774);color: rgb(32, 1, 1);border-radius: 100px;"></i>
                                    
                                </div>
                                <div class="d-block mx-2 m-0">
                                    <p class="heading-profile-text m-0">Sign Out</p>
                                    <p class="m-0 heading-profile-text-two">Sign Out of your account</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-chevron-right m-0" style="font-size: 1.5rem;"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
        </section>
    </section>



    

    <section class="modal-sections position-fixed d-none">
        <!-- personal-information-modal -->
        <div class="modals personal-info-modal position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-3 py-4" id="click-edit-Profile-display">
                <div class="d-flex justify-content-between align-items-center" style="width: 70%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0 close-all-modals" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Edit Profile</p>
                </div>
                <div class="col-12 my-4">
                    <div class="d-flex justify-content-between align-items-center" id="click-edit-Profile">
                        <div class="d-flex align-items-center m-0">
                            <div class="icon m-0">
                                <i class="fa-solid fa-user" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(255, 255, 255);border-radius: 100px;"></i>
                            </div>
                            <div class="d-block mx-2 m-0">
                                <p class="heading-profile-text m-0 text-light">Edit Profile</p>
                                <p class="m-0 heading-profile-text-two text-light">Edit your profile</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-chevron-right m-0 text-light" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                    
            </div>

            <div class="d-block px-lg-5 px-md-5 px-3 py-4 d-none" id="edit-profile-display-form">
                <div class="d-flex justify-content-between align-items-center" style="width: 70%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" id="back-to-edit-display" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Edit Profile</p>
                </div>
                <form action="" class="mt-3 pb-4">
                    <label for="" class="text-light opacity-50 mt-2">Name</label>
                    <input type="text" class="form-control py-3" placeholder="Enter Your Name Number" value="dev_sammy">

                    <label for="" class="text-light opacity-50 mt-2">Phone Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Phone Number" value="08140023959">


                    <label for="" class="text-light opacity-50 mt-2">Email</label>
                    <input type="email" class="form-control py-3" placeholder="Enter Your Email Here" value="ogunnaikesammy258@gmail.com">

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
                </form>
            </div>
        </div>


        <!-- setting-modal -->
        <div class="modals setting-modal position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-3 py-4" id="setting-display">
                <div class="d-flex justify-content-between align-items-center" style="width: 60%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0 close-all-modals" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Settings</p>
                </div>
                <div class="col-12 my-4">
                    <div class="d-flex justify-content-between align-items-center" id="security-click">
                        <div class="d-flex align-items-center m-0">
                            <div class="icon m-0">
                                <i class="fa-solid fa-user" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(255, 255, 255);border-radius: 100px;"></i>
                            </div>
                            <div class="d-block mx-2 m-0">
                                <p class="heading-profile-text m-0 text-light">Account Security</p>
                                <p class="m-0 heading-profile-text-two text-light">Reset password, wallet balance</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-chevron-right m-0 text-light" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                <div class="col-12 my-4">
                    <div class="d-flex justify-content-between align-items-center" id="Edit-Profile">
                        <div class="d-flex align-items-center m-0">
                            <div class="icon m-0">
                                <i class="fa-solid fa-trash-can" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(200, 13, 13, 0.774);color: rgb(255, 200, 200);border-radius: 100px;"></i>
                               
                            </div>
                            <div class="d-block mx-2 m-0">
                                <p class="heading-profile-text m-0 text-light">Delete Account</p>
                                <p class="m-0 heading-profile-text-two text-light">Account Deactivation, Account Deletion</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-chevron-right m-0 text-light" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                
            </div>
            <div class="d-block px-lg-5 px-md-5 px-3 py-4 d-none" id="security-display">
                <div class="d-flex justify-content-between align-items-center" style="width: 60%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" id="go-back-to-setting-display" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Security</p>
                </div>
                <div class="col-12 my-4">
                    <div class="d-flex justify-content-between align-items-center" id="reset-password-click">
                        <div class="d-flex align-items-center m-0">
                            <div class="icon m-0">
                                <i class="fa-solid fa-bookmark" style="font-size: 2rem !important;padding: 0.7rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(255, 255, 255);border-radius: 100px;"></i>
                                
                            </div>
                            <div class="d-block mx-2 m-0">
                                <p class="heading-profile-text m-0 text-light">Reset Password</p>
                                <p class="m-0 heading-profile-text-two text-light">Update Your Password</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-chevron-right m-0 text-light" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                <div class="col-12 my-4">
                    <div class="d-flex justify-content-between align-items-center" id="Edit-Profile">
                        <div class="d-flex align-items-center m-0">
                            <div class="icon m-0">
                                <i class="fa-solid fa-eye" style="font-size: 1.7rem !important;padding: 0.7rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(255, 255, 255);border-radius: 100px;"></i>
                            </div>
                            <div class="d-block mx-2 m-0">
                                <p class="heading-profile-text m-0 text-light">Wallet Balance</p>
                                <p class="m-0 heading-profile-text-two text-light">Hide Or show your wallet balance</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-chevron-right m-0 text-light" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                
            </div>



            <!--change-password display form -->
            <div class="d-block px-lg-5 px-md-5 px-3 py-4 d-none" id="change-password-display-form">
                <div class="d-flex justify-content-between align-items-center" style="width: 90%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" id="go-back-to-security-display" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Change Password</p>
                </div>
                <form action="" class="mt-3 pb-4">
                    <label for="" class="text-light opacity-50 mt-2">Password</label>
                    <input type="password" class="form-control py-3" placeholder="Enter Your Initial Password">

                    <label for="" class="text-light opacity-50 mt-2">New Password</label>
                    <input type="password" class="form-control py-3" placeholder="Enter Your new Password" >


                    <label for="" class="text-light opacity-50 mt-2">Confirm Password</label>
                    <input type="password" class="form-control py-3" placeholder="confirm Password" >

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
                </form>
            </div>
        </div>


        <!-- Help & support -->
        <div class="modals Help-and-support-modal position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-4 py-4">
                <div class="d-flex justify-content-between align-items-center" style="width: 80%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0 close-all-modals" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Help & Support</p>
                </div>
                
                <div class="chat-image m-auto">
                    <img src="images/free-chat-3543025-2969412-removebg-preview.png" alt="">
                </div>
                <p class="fs-5 fw-bold text-center text-light">How Can We Help you?</p>
                <p class="text-light opacity-50 text-center">At ----we are commited to providing you with the best possible experience. If you have any questions, concerns or issues, we're here to help</p>
                <div class="row gx-4">
                    <div class="col-6">
                        <div class="col-for-social-media">
                            <div class="d-block py-4">
                                <div class="social-media-img m-auto">
                                    <img src="https://static.vecteezy.com/system/resources/previews/016/716/480/original/whatsapp-icon-free-png.png" alt="">
                                </div>
                                <p class="text-center text-light fw-bold fs-6 m-0">Whatsapp</p>
                            </div>
                        </div>
                       
                    </div>
                   
                    <div class="col-6">
                        <div class="col-for-social-media">
                            <div class="d-block py-4">
                                <div class="social-media-img m-auto">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" alt="">
                                </div>
                                <p class="text-center text-light fw-bold fs-6 m-0">Telegram</p>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </section>





    <script src="views/functions/profile.js"></script>
</body>
</html>