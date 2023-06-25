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
<style>
    .services-main-text{
        font-size: 2.5rem;
        font-weight: bold;
    }
</style>
<body>
    <section class="main-body">
        <section class="first-section">
            <div class="logo-image m-auto">
                <img src="" alt="">
            </div>
            <div class="main-nav-div">
                <a href="dashboard"><i class="fa-solid fa-house"></i> <span class="show-not-small" style="margin-left: 0.3rem;">Home</span></a>
                <a href="services"><i class="fa-brands fa-servicestack"></i> <span class="show-not-small" style="margin-left: 0.3rem;">Services</span></a>
                <a href="wallet" class="color-nav-small"><i class="fa-solid fa-wallet"></i> <span style="margin-left: 0.3rem;">Wallet</span></a>
                <a href="profile"><i class="fa-solid fa-user"></i> <span class="show-not-small"  style="margin-left: 0.3rem;">Profile</span></a>
            </div>


            <a href="" class="logout-link">Logout</a>
        </section>
        <section class="second-section">
            <div class="container px-4 small-bootom">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="services-main-text m-0">My Wallet</p>
                        <p class="m-0">Your Central hub for managing your funds, and track your wallet history</p>
                    </div>
                </div>
                <div class="row mt-4 mb-2 mb-lg-0 mb-md-0">
                    <div class="col-lg-6">
                        <div class="display-balnce-card">
                            <div class="display-balnce-card-data">
                                <p class="total-balance-text">Wallet Balance</p>
                                <p class="total-acct-balance">NGN 60.00</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="display-balnce-card" style="height: fit-content !important;">
                            <div class="display-balnce-card-data">
                                <button class="btn bg-gradient fund-btn px-5 py-lg-5 py-md-5 py-3" style="width: 100%;border-radius: 10px !important;">Fund Wallet</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <p class="recent-activity m-0">Wallet Transactions</p>
                        <p class="see-all m-0">See all</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <div class="first-recent-part d-flex align-items-center m-0">
                            <div class="wallet-icon m-0" style="width: fit-content;height: fit-content;">
                                <i class="fa-solid fa-wallet" style="font-size: 1.2rem !important;padding: 0.5rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(1, 32, 1);border-radius: 100px;"></i>
                                
                            </div>
                            <div class="m-0 mx-lg-2 mx-md-2 mx-1">
                                <p class="m-0 main-text">Account_Transfer Deposit</p>
                                <p class="m-0 date-transaction">may, 18, 2023. 3.58pm</p>
                            </div>
                        </div>
                        <div class="second-recent-part m-0">
                            <p class="m-0 text-center fw-bold">₦120.00</p>
                            <p class="m-0 success-display text-center">credit</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <div class="first-recent-part d-flex align-items-center m-0">
                            <div class="wallet-icon m-0" style="width: fit-content;height: fit-content;">
                                <i class="fa-solid fa-wallet" style="font-size: 1.2rem !important;padding: 0.5rem;background-color:  rgba(13, 200, 13, 0.774);color: rgb(1, 32, 1);border-radius: 100px;"></i>
                                
                            </div>
                            <div class="m-0 mx-lg-2 mx-md-2 mx-1">
                                <p class="m-0 main-text">Airtel Airtime Debit</p>
                                <p class="m-0 date-transaction">may, 18, 2023. 3.58pm</p>
                            </div>
                        </div>
                        <div class="second-recent-part m-0">
                            <p class="m-0 text-center fw-bold">₦120.00</p>
                            <p class="m-0 failed-display text-center">deposit</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    
    
</body>
</html>