<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="views/style/dashboard.css">
    <link rel="stylesheet" href="views/style/nav.css">
</head>
<body>
    <section class="main-body">
        <section class="first-section">
            <div class="logo-image m-auto">
                <img src="" alt="">
            </div>
            <div class="main-nav-div">
                <a href="dashboard" class="color-nav-small"><i class="fa-solid fa-house"></i> <span  style="margin-left: 0.3rem;">Home</span></a>
                <a href="services"><i class="fa-brands fa-servicestack"></i> <span class="show-not-small" style="margin-left: 0.3rem;">Services</span></a>
                <a href="wallet"><i class="fa-solid fa-wallet"></i> <span class="show-not-small"  style="margin-left: 0.3rem;">Wallet</span></a>
                <a href="profile"><i class="fa-solid fa-user"></i> <span class="show-not-small"  style="margin-left: 0.3rem;">Profile</span></a>
            </div>


            <a href="" class="logout-link"><i class="fa-solid fa-right-from-bracket"></i><span style="margin-left: 0.3rem;">Logout</span></a>
        </section>
        <section class="second-section">
            <div class="container px-4 small-bootom">
                <div class="row">
                    <div class="d-flex justify-content-between mt-3 align-items-center">
                        <div class="profile-details d-flex align-items-center">
                            <div class="profile-photo m-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0-FVVaYSFbTMXiC6bUW2O_Vzx0OyauBu_RwRlfQ7iIU5aMvWJ86dpdfvGL7eYThBSkQ0&usqp=CAU" alt="">
                            </div>
                            <p class="m-0 profile-text d-none d-lg-block d-md-block"><span>Hello Dev,</span><br>Welcome to Data Sellig </p>
                        </div>
                        
                        <div class="time-div d-flex align-items-center justify-content-center m-0">
                            <p class="m-0 text-light fs-5 fw-bold" id="time-p-tag"></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-2 mb-lg-0 mb-md-0">
                    <div class="col-lg-6">
                        <div class="display-balnce-card">
                            <div class="display-balnce-card-data">
                                <p class="total-balance-text">Total Balance</p>
                                <p class="total-acct-balance">NGN 40.00</p>
                                <button class="btn bg-gradient fund-btn px-5 py-3">Fund Wallet <i class="fa-solid fa-circle-plus text-light"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-4 py-lg-0">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="quick-action-div" id="airtime">
                                    <i class="fa-solid fa-phone text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                                    <p class="text-light fw-bold m-0">Airtime</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6" id="data">
                                <div class="quick-action-div">
                                    <i class="fa-solid fa-wifi text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                                    <p class="text-light fw-bold m-0">Data</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6" id="cable">
                                <div class="quick-action-div">
                                    <i class="fa-solid fa-tv text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                                    <p class="text-light fw-bold m-0">Cable Tv</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="quick-action-div">
                                    <i class="fa-solid fa-ellipsis text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                                    <p class="text-light fw-bold m-0">More</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <p class="recent-activity m-0">Recent Activity</p>
                        <p class="see-all m-0">See all</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <div class="first-recent-part d-flex align-items-center m-0">
                            <div class="recent-image bg-danger m-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwdKrDXNqeQDc6nF7htd1ppchf4w7FdzZ1KMpEDbpUw&s" alt="">
                            </div>
                            <div class="m-0 mx-lg-2 mx-md-2 mx-1">
                                <p class="m-0 main-text">Airtel Airtime Services</p>
                                <p class="m-0 date-transaction">may, 18, 2023. 3.58pm</p>
                            </div>
                        </div>
                        <div class="second-recent-part m-0">
                            <p class="m-0 text-center fw-bold">₦120.00</p>
                            <p class="m-0 success-display">success</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <div class="first-recent-part d-flex align-items-center m-0">
                            <div class="recent-image m-0">
                                <img src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/mtn.png" alt="">
                            </div>
                            <div class="m-0 mx-lg-2 mx-md-2 mx-1">
                                <p class="m-0 main-text">Mtn Airtime Services</p>
                                <p class="m-0 date-transaction">may, 18, 2023. 3.58pm</p>
                            </div>
                        </div>
                        <div class="second-recent-part m-0">
                            <p class="m-0 text-center fw-bold">₦120.00</p>
                            <p class="m-0 failed-display text-center">failed</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <section class="modal-sections position-fixed d-none">
        <!-- airtime-modal -->
        <div class="modals modal-airtime position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-3 py-4">
                <div class="d-flex justify-content-between align-items-center" style="width: 60%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Airtime</p>
                </div>
                <form action="" class="mt-3 pb-4">
                    <label for="" class="text-light opacity-50 mt-2">Phone Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Phone Number">

                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <div class="d-flex justify-content-between">
                        <div class="network-providers">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwdKrDXNqeQDc6nF7htd1ppchf4w7FdzZ1KMpEDbpUw&s" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/mtn.png" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://nigerianguide.com.ng/wp-content/uploads/2019/11/wp-1483041434766.jpg" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://www.seekpng.com/png/detail/344-3443327_9mobile-mtn-glo-airtel-and-9mobile.png" alt="">
                        </div>
                    </div>

                    <label for="" class="text-light opacity-50 mt-2">Amount</label>
                    <input type="number" class="form-control py-3" placeholder="₦0.00">

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
                </form>
            </div>
        </div>


        <!-- data-modal -->
        <div class="modals modal-data position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-4 py-4">
                <div class="d-flex justify-content-between align-items-center" style="width: 90%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Buy Data Bundle</p>
                </div>
                <form action="" class="mt-3 pb-4">
                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <div class="d-flex justify-content-between">
                        <div class="network-providers">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwdKrDXNqeQDc6nF7htd1ppchf4w7FdzZ1KMpEDbpUw&s" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/mtn.png" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://nigerianguide.com.ng/wp-content/uploads/2019/11/wp-1483041434766.jpg" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://www.seekpng.com/png/detail/344-3443327_9mobile-mtn-glo-airtel-and-9mobile.png" alt="">
                        </div>
                    </div>

                    <label for="" class="text-light opacity-50 mt-2">Phone Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Phone Number">

                    <label for="" class="text-light opacity-50 mt-2">Service Plan</label>
                    <select name="" class="form-control py-3" id="">
                        <option value="">-----select data plan-----</option>
                    </select>

                    <label for="" class="text-light opacity-50 mt-2">Amount</label>
                    <input type="text" class="form-control py-3 text-center fs-4" value="₦0.00">

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
                </form>
            </div>
        </div>


        <!-- cable-modal -->
        <div class="modals modal-cable-tv position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-4 py-4">
                <div class="d-flex justify-content-between align-items-center" style="width: 60%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Cable Tv</p>
                </div>
                <form action="" class="mt-3 pb-4">
                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <div class="d-flex justify-content-between">
                        <div class="network-providers">
                            <img src="https://cdn.punchng.com/wp-content/uploads/2016/04/04214509/DStv-logo.jpg" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://assets.sunnewsonline.com/2021/05/GOtv-1.jpg" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://cdn.punchng.com/wp-content/uploads/2016/07/10202202/startimes-logo.jpg" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://cdn.vanguardngr.com/wp-content/uploads/2022/09/showmax.png" alt="">
                        </div>
                    </div>

                    <label for="" class="text-light opacity-50 mt-2">Decoder Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Decoder Number">

                    <label for="" class="text-light opacity-50 mt-2">Service Plan</label>
                    <select name="" class="form-control py-3" id="">
                        <option value="">-----select data plan-----</option>
                    </select>

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
                </form>
            </div>
        </div>
    </section>



    
    <script src="views/functions/index.js"></script>
</body>
</html>