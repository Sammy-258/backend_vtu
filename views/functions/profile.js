let personalInfo = document.getElementById("personal-info");
let setting = document.getElementById("setting");
let helpAndSupport = document.getElementById("help-and-support");



// modals 
let modalSections = document.querySelector(".modal-sections");
let personalInfoModal = document.querySelector(".personal-info-modal");
let settingModal = document.querySelector(".setting-modal");
let HelpAndSupportModal = document.querySelector(".Help-and-support-modal");



personalInfo.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    personalInfoModal.classList.remove("d-none");
    settingModal.classList.add("d-none");
    HelpAndSupportModal.classList.add("d-none");
})

setting.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    personalInfoModal.classList.add("d-none");
    settingModal.classList.remove("d-none");
    HelpAndSupportModal.classList.add("d-none");
})

helpAndSupport.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    personalInfoModal.classList.add("d-none");
    settingModal.classList.add("d-none");
    HelpAndSupportModal.classList.remove("d-none");
})



// close all modals
let closeAllModals = document.querySelectorAll(".close-all-modals");


closeAllModals.forEach((e)=>{
    e.addEventListener("click", ()=>{
        modalSections.classList.add("d-none");
        personalInfoModal.classList.add("d-none");
        settingModal.classList.add("d-none");
        HelpAndSupportModal.classList.add("d-none");
    })
})


let clickEditProfile = document.getElementById("click-edit-Profile");
let clickEditProfileDisplay = document.getElementById("click-edit-Profile-display");
let editProfileDisplayForm = document.getElementById("edit-profile-display-form");
let backToEditDisplay = document.getElementById("back-to-edit-display");


clickEditProfile.addEventListener("click", ()=>{
    editProfileDisplayForm.classList.remove("d-none");
    clickEditProfileDisplay.classList.add("d-none");
});

backToEditDisplay.addEventListener("click", ()=>{
    editProfileDisplayForm.classList.add("d-none");
    clickEditProfileDisplay.classList.remove("d-none");
})






let settingDisplay = document.getElementById("setting-display");
let securityDisplay = document.getElementById("security-display");
let securityClick = document.getElementById("security-click");
let resetPasswordClick = document.getElementById("reset-password-click");
let changePasswordDisplayForm = document.getElementById("change-password-display-form");


securityClick.addEventListener("click", ()=>{
    securityDisplay.classList.remove("d-none");
    settingDisplay .classList.add("d-none");
});

resetPasswordClick.addEventListener("click", ()=>{
    securityDisplay.classList.add("d-none");
    settingDisplay .classList.add("d-none");
    changePasswordDisplayForm.classList.remove("d-none")
});



let goBackToSecurityDisplay = document.getElementById("go-back-to-security-display");
let goBackToSettingDisplay = document.getElementById("go-back-to-setting-display");

goBackToSecurityDisplay.addEventListener("click", ()=>{
    securityDisplay.classList.remove("d-none");
    settingDisplay .classList.add("d-none");
    changePasswordDisplayForm.classList.add("d-none")
})

goBackToSettingDisplay.addEventListener("click", ()=>{
    securityDisplay.classList.add("d-none");
    settingDisplay .classList.remove("d-none");
    changePasswordDisplayForm.classList.add("d-none")
})