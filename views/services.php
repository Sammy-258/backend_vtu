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
                <a href="services" class="color-nav-small"><i class="fa-brands fa-servicestack"></i> <span style="margin-left: 0.3rem;">Services</span></a>
                <a href="wallet"><i class="fa-solid fa-wallet"></i> <span class="show-not-small"  style="margin-left: 0.3rem;">Wallet</span></a>
                <a href="profile"><i class="fa-solid fa-user"></i> <span class="show-not-small"  style="margin-left: 0.3rem;">Profile</span></a>
            </div>


            <a href="logout" class="logout-link">Logout</a>
        </section>
        <section class="second-section">
            <div class="container px-4 small-bootom">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="services-main-text m-0">Services</p>
                        <p class="m-0">Explore our range of services designed to simplify your life</p>
                    </div>
                </div>
                <div class="row mt-4 gy-4">
                    <div class="col-lg-3 col-md-4 col-6" id="airtime">
                        <div class="quick-action-div">
                            <i class="fa-solid fa-phone text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                            <p class="text-light fw-bold m-0">Airtime</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="data">
                        <div class="quick-action-div">
                            <i class="fa-solid fa-wifi text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                            <p class="text-light fw-bold m-0">Data</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="cable">
                        <div class="quick-action-div">
                            <i class="fa-solid fa-tv text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                            <p class="text-light fw-bold m-0">Cable Tv</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="electricity">
                        <div class="quick-action-div">
                            <i class="fa-solid fa-lightbulb text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                            <p class="text-light fw-bold m-0">Electricity</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="Internet">
                        <div class="quick-action-div">
                            <i class="fa-solid fa-globe text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                            <p class="text-light fw-bold m-0">Internet</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="education">
                        <div class="quick-action-div">
                            <i class="fa-solid fa-book-open text-light" style="font-size: 1.5rem;background-color: rgb(69, 68, 68);padding: 0.8rem;border-radius:100px ;"></i>
                            <p class="text-light fw-bold m-0">Education</p>
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
                <form action="airtime" method="post" class="mt-3 pb-4">
                    <input type="hidden" name="email" value="<?=$this->user_data["email"]?>">
                    <input type="hidden" name="user_amount" value="<?=$this->user_data["balance"]?>">

                    <label for="" class="text-light opacity-50 mt-2">Phone Number</label>
                    <input type="number" name="number" class="form-control py-3" placeholder="Enter Your Phone Number" pattern="[0-9]*" inputmode="numeric" oninput="validateInput(this)" required>

                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <input type="hidden" name="name" id="network_type">
                    <div class="d-flex justify-content-between">
                        <div class="network-providers">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwdKrDXNqeQDc6nF7htd1ppchf4w7FdzZ1KMpEDbpUw&s" id="airtel_click" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/mtn.png" id="mtn_click" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://nigerianguide.com.ng/wp-content/uploads/2019/11/wp-1483041434766.jpg" id="glo_click" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://www.seekpng.com/png/detail/344-3443327_9mobile-mtn-glo-airtel-and-9mobile.png" id="9mobile_click" alt="">
                        </div>
                    </div>

                    <div class="d-none" id="mtn-airtime-type">
                        <label for="" class="text-light opacity-50 mt-2">Airtime Type</label>
                        <select name="mtn-airtime-type" class="form-control py-3" id="">
                            <option value="">-----Mtn Airtime Type-----</option>
                            <option value="001">VTU</option>
                            <option value="002">Share And Sell</option>
                        </select>
                    </div>

                    <label for="" class="text-light opacity-50 mt-2">Amount</label>
                    <input type="number" name="amount" class="form-control py-3" placeholder="₦0.00" required>

                    <button type="button" class="btn text-light form-control btn-submit py-3 mt-4" id="submit_for_airtime_purchase">submit</button>
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
                <form action="data" method="post" class="mt-3 pb-4">
                    <input type="hidden" name="email" value="<?=$this->user_data["email"]?>">
                    <input type="hidden" name="user_amount" value="<?=$this->user_data["balance"]?>">

                    <label for="" class="text-light opacity-50 mt-2">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control py-3" placeholder="Enter Your Phone Number" pattern="[0-9]*" inputmode="numeric" oninput="validateInput(this)" required>

                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <input type="hidden" name="name" id="network_type_data">
                    <div class="d-flex justify-content-between">
                        <div class="network-providers">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwdKrDXNqeQDc6nF7htd1ppchf4w7FdzZ1KMpEDbpUw&s" id="airtel_click_data" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/mtn.png" id="mtn_click_data" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://nigerianguide.com.ng/wp-content/uploads/2019/11/wp-1483041434766.jpg" id="glo_click_data" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://www.seekpng.com/png/detail/344-3443327_9mobile-mtn-glo-airtel-and-9mobile.png" id="9mobile_click_data" alt="">
                        </div>
                    </div>

                    <select name="" class="form-control py-3 mt-3 d-none" id="data_variation">
                        <option value="" selected>----Kindly Select the variation type-----</option>
                        <option value="SME">SME</option>
                        <option value="CG_LITE">CG_LITE</option>
                        <option value="CG">CG</option>
                        <option value="GIFTING">GIFTING</option>
                    </select>

                    <label for="" class="text-light opacity-50 mt-2">Service Plan</label>
                    <select name="data_plan" class="form-control py-3" id="data_plan" required>
                        <option value="" selected>-----select data plan-----</option>
                        <option class="mtn_sme" value="50" data-type="110" style="display: none;">[mtn] 500MB (SME) - N110 30days</option>
                        <option class="mtn_sme" value="51" data-type="229" style="display: none;">[mtn] 1GB (SME) - N229 30days</option>
                        <option class="mtn_sme" value="52" data-type="450" style="display: none;">[mtn] 2GB (SME) - N450 30days</option>
                        <option class="mtn_sme" value="53" data-type="660" style="display: none;">[mtn] 3GB (SME) - N660 30days</option>
                        <option class="mtn_sme" value="54" data-type="1100" style="display: none;">[mtn] 5GB (SME) - N1100 30days</option>
                        <option class="mtn_sme" value="91" data-type="2180" style="display: none;">[mtn] 10GB (SME) - N2180 30days</option>
                                
        
        
        
        
                        <option class="mtn_cgl" value="180" data-type="120" style="display: none;">[mtn] 500MB (CG_LITE) - N120 30days</option>
                        <option class="mtn_cgl" value="181" data-type="230" style="display: none;">[mtn] 1GB (CG_LITE) - N230 30days</option>
                        <option class="mtn_cgl" value="182" data-type="460" style="display: none;">[mtn] 2GB (CG_LITE) - N460 30days</option>
                        <option class="mtn_cgl" value="183" data-type="690" style="display: none;">[mtn] 3GB (CG_LITE) - N690 30days</option>
                        <option class="mtn_cgl" value="184" data-type="1140" style="display: none;">[mtn] 5GB (CG_LITE) - N1140 30days</option>
                        <option class="mtn_cgl" value="185" data-type="2270" style="display: none;">[mtn] 10GB (CG_LITE) - N2270 30days</option>
        
       
        
                        <option class="mtn_cg" value="45" data-type="120" style="display: none;">[mtn] 500MB (CG) - N120 30days</option>
                        <option class="mtn_cg" value="46" data-type="235" style="display: none;">[mtn] 1GB (CG) - N235 30days</option>
                        <option class="mtn_cg" value="47" data-type="470" style="display: none;">[mtn] 2GB (CG) - N470 30days</option>
                        <option class="mtn_cg" value="48" data-type="690" style="display: none;">[mtn] 3GB (CG) - N690 30days</option>
                        <option class="mtn_cg" value="49" data-type="1150" style="display: none;">[mtn] 5GB (CG) - N1150 30days</option>
                        <option class="mtn_cg" value="88" data-type="2300" style="display: none;">[mtn] 10GB (CG) - N2300 30days</option>
                        
      
                        
                        <option class="mtn_gifting" value="152" data-type="490" style="display: none;">[mtn] 750MB (Direct) - N490 14days</option>
                        <option class="mtn_gifting" value="83" data-type="1000" style="display: none;">[mtn] 1.5GB (Direct) - N1000 30days</option>
                        <option class="mtn_gifting" value="84" data-type="1170" style="display: none;">[mtn] 2GB (Direct) - N1170 30days</option>
                        <option class="mtn_gifting" value="58" data-type="1460" style="display: none;">[mtn] 3GB (Direct) - N1460 30days</option>
                        <option class="mtn_gifting" value="85" data-type="2000" style="display: none;">[mtn] 4.5GB (Direct) - N2000 30days</option>
                        <option class="mtn_gifting" value="153" data-type="2500" style="display: none;">[mtn] 6GB (Direct) - N2500 7days</option>
                        <option class="mtn_gifting" value="56" data-type="3000" style="display: none;">[mtn] 10GB (Direct) - N3000 30days</option>
                        
                                    
        
                        <option class="glo_cg" value="158" data-type="52" style="display: none;">[glo] 200MB (CG) - N52 14days</option>
                        <option class="glo_cg" value="159" data-type="120" style="display: none;">[glo] 500MB (CG) - N120 30days</option>
                        <option class="glo_cg" value="160" data-type="230" style="display: none;">[glo] 1GB (CG) - N230 30days</option>
                        <option class="glo_cg" value="161" data-type="450" style="display: none;">[glo] 2GB (CG) - N450 30days</option>
                        <option class="glo_cg" value="162" data-type="670" style="display: none;">[glo] 3GB (CG) - N670 30days</option>
                        <option class="glo_cg" value="163" data-type="1110" style="display: none;">[glo] 5GB (CG) - N1110 30days</option>
                        <option class="glo_cg" value="164" data-type="2220" style="display: none;">[glo] 10GB (CG) - N2220 30days</option>
                                
       
        
                        
                        <option class="airtel_gifting" value="66" data-type="450" style="display: none;">[airtel] 750MB (Direct) - N450 14days</option>
                        <!-- <option class="airtel_gifting" value="66" data-type="450" style="display: none;">[airtel] 1.5GB (Direct) - N9000000 30days</option> -->
                        <option class="airtel_gifting" value="68" data-type="1080" style="display: none;">[airtel] 2GB (Direct) - N1080 30days</option>
                        <option class="airtel_gifting" value="69" data-type="1350" style="display: none;">[airtel] 3GB (Direct) - N1350 30days</option>
                        <option class="airtel_gifting" value="70" data-type="1800" style="display: none;">[airtel] 4.5GB (Direct) - N1800 30days</option>
                        <option class="airtel_gifting" value="71" data-type="2250" style="display: none;">[airtel] 6GB (Direct) - N2250 30days</option>
                        <option class="airtel_gifting" value="72" data-type="2700" style="display: none;">[airtel] 10GB (Direct) - N2700 30days</option>
                        
                                        
                        <!--9mobile-->
                        <option class="mobile_sme" value="168" data-type="80" style="display: none;">[9mobile] 500MB (SME) - N80 30days</option>
                        <option class="mobile_sme" value="128" data-type="200" style="display: none;">[9mobile] 1GB (SME) - N200 30days</option>
                        <option class="mobile_sme" value="129" data-type="230" style="display: none;">[9mobile] 1.5GB (SME) - N230 30days</option>
                        <option class="mobile_sme" value="130" data-type="310" style="display: none;">[9mobile] 2GB (SME) - N310 30days</option>
                        <!-- <option class="mobile_sme" value="68" data-type="1080" style="display: none;">[9mobile] 2.5GB (SME) - N4080000 30days</option> -->
                        <option class="mobile_sme"  value="132" data-type="460"style="display: none;">[9mobile] 3GB (SME) - N460 30days</option>
                        <option class="mobile_sme"  value="169" data-type="620" style="display: none;">[9mobile] 4GB (SME) - N620 30days</option>
                        <!-- <option class="mobile_sme"  value="68" data-type="1080" style="display: none;">[9mobile] 4.5GB (SME) - N689 30days</option> -->
                        <option class="mobile_sme" value="134" data-type="770" style="display: none;">[9mobile] 5GB (SME) - N770 30days</option>
        
                                        
                        <option class="mobile_gifting" value="75" data-type="420" style="display: none;">[9mobile] 500MB (Direct) - N420 30days</option>
                        <option class="mobile_gifting" value="76" data-type="850" style="display: none;">[9mobile] 1.5GB (Direct) - N850 30days</option>
                        <option class="mobile_gifting" value="77" data-type="1010" style="display: none;">[9mobile] 2GB (Direct) - N1010 30days</option>
                        <option class="mobile_gifting" value="78" data-type="1260" style="display: none;">[9mobile] 3GB (Direct) - N1260 30days</option>
                        <option class="mobile_gifting" value="79" data-type="1680" style="display: none;">[9mobile] 4.5GB (Direct) - N1680 30days</option>
                        <option class="mobile_gifting" value="80" data-type="3350" style="display: none;">[9mobile] 11GB (Direct) - N3350 30days</option>
                        <option class="mobile_gifting" value="81" data-type="4200" style="display: none;">[9mobile] 15GB (Direct) - N4200 30days</option>
                    </select>

                    <label for="" class="text-light opacity-50 mt-2">Amount</label>
                    <input type="text" class="form-control py-3 text-center fs-4" name="amount" id="data_amount" value="₦0.00" required>

                    <button type="button" class="btn text-light form-control btn-submit py-3 mt-4" id="submit_for_data_purchase">Submit</button>
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
                    <input type="hidden" name="email" value="<?=$this->user_data["email"]?>">
                    <input type="hidden" name="user_amount" value="<?=$this->user_data["balance"]?>">


                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <input type="hidden" name="cable_name" id="cable_type">
                    <div class="d-flex justify-content-between">
                        <div class="network-providers">
                            <img src="https://cdn.punchng.com/wp-content/uploads/2016/04/04214509/DStv-logo.jpg" id="dstv_click" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://assets.sunnewsonline.com/2021/05/GOtv-1.jpg" id="gotv_click" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://cdn.punchng.com/wp-content/uploads/2016/07/10202202/startimes-logo.jpg" id="startimes_click" alt="">
                        </div>
                        <div class="network-providers">
                            <img src="https://cdn.vanguardngr.com/wp-content/uploads/2022/09/showmax.png" id="showmax_click" alt="">
                        </div>
                    </div>

                    <label for="" class="text-light opacity-50 mt-2">Decoder Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Decoder Number" id="iuc_number" required>

                    <input type="text" class="form-control py-3 fw-bold mt-4" id="name_verified" style="display:none;">

                    <label for="" class="text-light opacity-50 mt-2" required>Service Plan</label>
                    <select name="" class="form-control py-3" id="">
                        <option value="">-----select data plan-----</option>
                    </select>

                    <button type="button" class="btn text-light form-control btn-submit py-3 mt-4" id="submit_cable_tv">Submit</button>
                </form>
            </div>
        </div>


        <!-- electricity-modal -->
        <div class="modals modal-electricity position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-4 py-4">
                <div class="d-flex justify-content-between align-items-center" style="width: 60%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Electricity</p>
                </div>
                <form action="" class="mt-3 pb-4">

                    <label for="" class="text-light opacity-50 mt-2">Meter Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Meter Number">

                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <select name="" class="form-control py-3" id="">
                        <option value="">-----select Service Provider-----</option>
                    </select>

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
                </form>
            </div>
        </div>


        <!-- education-modal -->
        <div class="modals modal-education position-absolute d-none">
            <div class="d-block px-lg-5 px-md-5 px-4 py-4">
                <div class="d-flex justify-content-between align-items-center" style="width: 60%;">
                    <i class="fa-solid fa-circle-chevron-left text-light m-0" style="font-size: 1.5rem;"></i>
                    <p class="modal-heading text-light m-0">Cable Tv</p>
                </div>
                <form action="" class="mt-3 pb-4">

                    <label for="" class="text-light opacity-50 mt-2">Meter Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Meter Number">

                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <select name="" class="form-control py-3" id="">
                        <option value="">-----select Service Provider-----</option>
                    </select>

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
                </form>
            </div>
        </div>
    </section>



    <script src="views/functions/index.js"></script>
    <script>
        // for the forms , network select
        let mtnClick = document.getElementById("mtn_click");
        let airtelClick = document.getElementById("airtel_click");
        let gloClick = document.getElementById("glo_click");
        let mobileClick = document.getElementById("9mobile_click");
        let network_type = document.getElementById("network_type");
        let mtn_airtime_type = document.getElementById("mtn-airtime-type");



    

       
        mtnClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:3px solid green;";
            gloClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:none;";
            mtn_airtime_type.classList.remove("d-none");
            network_type.value="01";
            document.getElementById("submit_for_airtime_purchase").setAttribute("type", "submit");
        });
        airtelClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:none;";
            gloClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:3px solid green;";
            mtn_airtime_type.classList.add("d-none");
            network_type.value="03";
            document.getElementById("submit_for_airtime_purchase").setAttribute("type", "submit");
        });
        gloClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:none;";
            gloClick.parentNode.style="border:3px solid green;";
            mtn_airtime_type.classList.add("d-none");
            network_type.value="02";
            document.getElementById("submit_for_airtime_purchase").setAttribute("type", "submit");
        });
        mobileClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:none;";
            gloClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:3px solid green;";
            mtn_airtime_type.classList.add("d-none");
            network_type.value="04";
            document.getElementById("submit_for_airtime_purchase").setAttribute("type", "submit");
        });



        // for the forms , network select for the data aspect
        let mtnClickData = document.getElementById("mtn_click_data");
        let airtelClickData = document.getElementById("airtel_click_data");
        let gloClickData = document.getElementById("glo_click_data");
        let mobileClickData = document.getElementById("9mobile_click_data");
        let network_typeData = document.getElementById("network_type_data");
        let data_variation = document.getElementById("data_variation");


        mtnClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:3px solid green;";
            gloClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:none;";
            network_typeData.value=01;
            document.getElementById("submit_for_data_purchase").setAttribute("type", "submit");
            data_variation.classList.remove("d-none");data_variation.classList.remove("d-none");
            data_variation.children[1].classList.remove("d-none");
            data_variation.children[2].classList.remove("d-none");
            data_variation.children[3].classList.remove("d-none");
            data_variation.children[4].classList.remove("d-none");
            
        });
        airtelClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:none;";
            gloClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:3px solid green;";
            network_typeData.value=03;
            document.getElementById("submit_for_data_purchase").setAttribute("type", "submit");
            data_variation.classList.remove("d-none");
            data_variation.children[1].classList.add("d-none");
            data_variation.children[2].classList.add("d-none");
            data_variation.children[3].classList.add("d-none");
            data_variation.children[4].classList.remove("d-none");
            // console.log(data_variation.children[0])
        });
        gloClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:none;";
            gloClickData.parentNode.style="border:3px solid green;";
            network_typeData.value=02;
            document.getElementById("submit_for_data_purchase").setAttribute("type", "submit");
            document.getElementById("submit_for_data_purchase").setAttribute("type", "submit");
            data_variation.classList.remove("d-none");
            data_variation.children[1].classList.add("d-none");
            data_variation.children[2].classList.add("d-none");
            data_variation.children[3].classList.remove("d-none");
            data_variation.children[4].classList.add("d-none");
            // data_variation.children[4].classList.add("d-none");
        });
        mobileClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:none;";
            gloClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:3px solid green;";
            network_typeData.value=04;
            document.getElementById("submit_for_data_purchase").setAttribute("type", "submit");
            data_variation.classList.remove("d-none");
            data_variation.children[1].classList.remove("d-none");
            data_variation.children[2].classList.add("d-none");
            data_variation.children[3].classList.add("d-none");
            data_variation.children[4].classList.remove("d-none");
        });



        // for the forms , tv subscription aspect select
        let dstv_click = document.getElementById("dstv_click");
        let gotv_click = document.getElementById("gotv_click");
        let startimes_click = document.getElementById("startimes_click");
        let showmax_click = document.getElementById("showmax_click");
        let cable_type = document.getElementById("cable_type");
        let submit_cable_tv = document.getElementById("submit_cable_tv");

        dstv_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:3px solid green;";
            startimes_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:none;";
            cable_type.value=1;
            submit_cable_tv.setAttribute("type", "submit");
        });
        gotv_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:none;";
            startimes_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:3px solid green;";
            cable_type.value=2;
            submit_cable_tv.setAttribute("type", "submit");
        });
        startimes_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:none;";
            startimes_click.parentNode.style="border:3px solid green;";
            cable_type.value=3;
            submit_cable_tv.setAttribute("type", "submit");
        });
        showmax_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:none;";
            startimes_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:3px solid green;";
            cable_type.value=4;
            submit_cable_tv.setAttribute("type", "submit");
        });




        // data variations
        let mtn_sme = document.querySelectorAll(".mtn_sme");
        let mtn_cgl = document.querySelectorAll(".mtn_cgl");
        let mtn_cg = document.querySelectorAll(".mtn_cg");
        let mtn_gifting = document.querySelectorAll(".mtn_gifting");
        let glo_cg = document.querySelectorAll(".glo_cg");
        let airtel_gifting = document.querySelectorAll(".airtel_gifting");
        let mobile_sme = document.querySelectorAll(".mobile_sme");
        let mobile_gifting = document.querySelectorAll(".mobile_gifting");

        

        data_variation.addEventListener("change", ()=>{
            // console.log(data_variation.value)
            if(data_variation.value=="SME" && network_typeData.value==01){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:block;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:none;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:none;";
                });
                glo_cg.forEach(element => {
                    element.style="display:none;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:none;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:none;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:none;";
                });
            }else if(data_variation.value=="CG_LITE" && network_typeData.value==01){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:block;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:none;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:none;";
                });
                glo_cg.forEach(element => {
                    element.style="display:none;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:none;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:none;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:none;";
                });
        
            }else if(data_variation.value=="CG" && network_typeData.value==01){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:block;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:none;";
                });
                glo_cg.forEach(element => {
                    element.style="display:none;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:none;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:none;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:none;";
                });
            }else if(data_variation.value=="GIFTING" && network_typeData.value==01){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:none;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:block;";
                });
                glo_cg.forEach(element => {
                    element.style="display:none;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:none;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:none;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:none;";
                });
            
            }else if(data_variation.value=="CG" && network_typeData.value==02){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:none;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:none;";
                });
                glo_cg.forEach(element => {
                    element.style="display:block;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:none;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:none;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:none;";
                });
            }else if(data_variation.value=="GIFTING" && network_typeData.value==03){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:none;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:none;";
                });
                glo_cg.forEach(element => {
                    element.style="display:none;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:block;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:none;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:none;";
                });
            
            }else if(data_variation.value=="SME" && network_typeData.value==04){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:none;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:none;";
                });
                glo_cg.forEach(element => {
                    element.style="display:none;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:none;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:block;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:none;";
                });
            
            }else if(data_variation.value=="GIFTING" && network_typeData.value==04){
                // console.log("working");
                mtn_sme.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cgl.forEach(element => {
                    element.style="display:none;";
                });
                mtn_cg.forEach(element => {
                    element.style="display:none;";
                });
                mtn_gifting.forEach(element => {
                    element.style="display:none;";
                });
                glo_cg.forEach(element => {
                    element.style="display:none;";
                });
                airtel_gifting.forEach(element => {
                    element.style="display:none;";
                });
                mobile_sme.forEach(element => {
                    element.style="display:none;";
                });
                mobile_gifting.forEach(element => {
                    element.style="display:block;";
                });
            }
        });


        let data_plan = document.getElementById("data_plan");

        data_plan.addEventListener("change", ()=>{
            let selectedOption = data_plan.options[data_plan.selectedIndex];
            let amount = selectedOption.getAttribute("data-type");
            // console.log(amount);
            document.getElementById("data_amount").value=`₦${amount}.00`
        });



        // validate the number of digit in the number field
        function validateInput(input) {
            const value = input.value;
            if (value.length < 11) {
                input.setCustomValidity("Please enter at least 11 digits.");
            } else {
                input.setCustomValidity("");
            }
        }


        

        // for tv subscription

        let iuc_number = document.getElementById("iuc_number");
        let cable_type_value = document.getElementById("cable_type");

        iuc_number.addEventListener("keyup", ()=>{
           
            const xhr = new XMLHttpRequest();

            // Configure the request
            xhr.open("POST", "verifyIuc", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Set up the callback function for when the request completes
            xhr.onload = function() {
            if (xhr.status === 200) {
                // Request was successful
                

                responseObject=JSON.parse(xhr.responseText);

                console.log(responseObject);
                

                if(responseObject.success=='false'){
                    const nameVerifiedElement = document.getElementById("name_verified");
                    nameVerifiedElement.style.display="block";
                    nameVerifiedElement.style.color="red";
                    nameVerifiedElement.value="failed to verify iuc";
                    nameVerifiedElement.setCustomValidity("Failed To verify you iuc number");
                    
                }else{
                    const nameVerifiedElement = document.getElementById("name_verified");
                    nameVerifiedElement.style.display="block";
                    nameVerifiedElement.style.color="green";
                    nameVerifiedElement.value=responseObject.message.content.Customer_Name;
                    nameVerifiedElement.setCustomValidity("");
                }
              
                console.log(document.getElementById("name_verified"))
                
            } else {
                // Request failed
                console.log("Error: " + xhr.status);
            }
            };

            // Prepare the data to be sent
            const data = new URLSearchParams();
            data.append("iuc", iuc_number.value);
            data.append("tv_type", cable_type_value.value);

            // Send the request with the data in the request body
            xhr.send(data);

            

            

        });



    </script>
</body>
</html>