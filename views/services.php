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


            <a href="" class="logout-link">Logout</a>
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
                <form action="" class="mt-3 pb-4">
                    <label for="" class="text-light opacity-50 mt-2">Phone Number</label>
                    <input type="number" class="form-control py-3" placeholder="Enter Your Phone Number">

                    <label for="" class="text-light opacity-50 mt-2">Service Provider</label>
                    <input type="text" id="network_type">
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
                    <input type="text" id="network_type_data">
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
                    <input type="text" id="cable_type">
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
                    <input type="number" class="form-control py-3" placeholder="Enter Your Decoder Number">

                    <label for="" class="text-light opacity-50 mt-2">Service Plan</label>
                    <select name="" class="form-control py-3" id="">
                        <option value="">-----select data plan-----</option>
                    </select>

                    <button class="btn text-light form-control btn-submit py-3 mt-4">Submit</button>
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
        let network_type = document.getElementById("network_type")


        mtnClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:3px solid green;";
            gloClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:none;";
            network_type.value=1;
        });
        airtelClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:none;";
            gloClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:3px solid green;";
            network_type.value=2;
        });
        gloClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:none;";
            gloClick.parentNode.style="border:3px solid green;";
            network_type.value=3;
        });
        mobileClick.addEventListener("click", ()=>{
            mtnClick.parentNode.style="border:none;";
            airtelClick.parentNode.style="border:none;";
            gloClick.parentNode.style="border:none;";
            mobileClick.parentNode.style="border:3px solid green;";
            network_type.value=4;
        });



        // for the forms , network select for the data aspect
        let mtnClickData = document.getElementById("mtn_click_data");
        let airtelClickData = document.getElementById("airtel_click_data");
        let gloClickData = document.getElementById("glo_click_data");
        let mobileClickData = document.getElementById("9mobile_click_data");
        let network_typeData = document.getElementById("network_type_data")


        mtnClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:3px solid green;";
            gloClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:none;";
            network_typeData.value=1;
        });
        airtelClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:none;";
            gloClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:3px solid green;";
            network_typeData.value=2;
        });
        gloClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:none;";
            gloClickData.parentNode.style="border:3px solid green;";
            network_typeData.value=3;
        });
        mobileClickData.addEventListener("click", ()=>{
            mtnClickData.parentNode.style="border:none;";
            airtelClickData.parentNode.style="border:none;";
            gloClickData.parentNode.style="border:none;";
            mobileClickData.parentNode.style="border:3px solid green;";
            network_typeData.value=4;
        });



        // for the forms , tv subscription aspect select
        let dstv_click = document.getElementById("dstv_click");
        let gotv_click = document.getElementById("gotv_click");
        let startimes_click = document.getElementById("startimes_click");
        let showmax_click = document.getElementById("showmax_click");
        let cable_type = document.getElementById("cable_type")


        dstv_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:3px solid green;";
            startimes_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:none;";
            cable_type.value=1;
        });
        gotv_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:none;";
            startimes_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:3px solid green;";
            cable_type.value=2;
        });
        startimes_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:none;";
            startimes_click.parentNode.style="border:3px solid green;";
            cable_type.value=3;
        });
        showmax_click.addEventListener("click", ()=>{
            dstv_click.parentNode.style="border:none;";
            gotv_click.parentNode.style="border:none;";
            startimes_click.parentNode.style="border:none;";
            showmax_click.parentNode.style="border:3px solid green;";
            cable_type.value=4;
        });
    </script>
</body>
</html>