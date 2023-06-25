// the date
let timepTag = document.getElementById("time-p-tag");
function updateDateTime() {
    const date = new Date();
    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();
    let hour = date.getHours();
    const minute = date.getMinutes();
    const period = hour >= 12 ? 'pm' : 'am';

    // Convert hour to 12-hour format
    hour = hour % 12 || 12;

    // Format the date and time
    const formattedDate = `${month}/${day}/${year}`;
    const formattedTime = `${hour}:${minute.toString().padStart(2, '0')}${period}`;

    // Print the formatted date and time
    // console.log(`${formattedDate} ${formattedTime}`);

    timepTag.innerHTML=`${formattedDate} ${formattedTime}`;

}
  
// Update the date and time every second
setInterval(updateDateTime, 1000);
  




// the modals
let modalSections = document.querySelector(".modal-sections");
let modalAirtime = document.querySelector(".modal-airtime");
let modalData = document.querySelector(".modal-data");
let modalCableTv = document.querySelector(".modal-cable-tv");
let modalElectricity = document.querySelector(".modal-electricity");
let modalEducation = document.querySelector(".modal-education");


let airtime = document.getElementById("airtime");
let data = document.getElementById("data");
let cable = document.getElementById("cable");
let electricity = document.getElementById("electricity");
let Internet = document.getElementById("Internet");
let education = document.getElementById("education");


let closeModal = document.querySelectorAll(".fa-circle-chevron-left");




closeModal.forEach((e)=>{
    e.addEventListener("click", ()=>{
        modalSections.classList.add("d-none");
        modalAirtime.classList.add("d-none");
        modalData.classList.add("d-none");
        modalCableTv.classList.add("d-none");
        modalElectricity.classList.add("d-none");
        modalEducation.classList.add("d-none");
    })
})

// modalSections.addEventListener("click", ()=>{
//     modalSections.classList.add("d-none");
//     modalAirtime.classList.add("d-none");
//     modalData.classList.add("d-none");
//     modalCableTv.classList.add("d-none");
//     modalElectricity.classList.add("d-none");
//     modalEducation.classList.add("d-none");
// })



airtime.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    modalAirtime.classList.remove("d-none");
    modalData.classList.add("d-none");
    modalCableTv.classList.add("d-none");
    modalElectricity.classList.add("d-none");
    modalEducation.classList.add("d-none");
});

data.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    modalAirtime.classList.add("d-none");
    modalData.classList.remove("d-none");
    modalCableTv.classList.add("d-none");
    modalElectricity.classList.add("d-none");
    modalEducation.classList.add("d-none");
});

cable.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    modalAirtime.classList.add("d-none");
    modalData.classList.add("d-none");
    modalCableTv.classList.remove("d-none");
    modalElectricity.classList.add("d-none");
    modalEducation.classList.add("d-none");
});


electricity.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    modalAirtime.classList.add("d-none");
    modalData.classList.add("d-none");
    modalCableTv.classList.add("d-none");
    modalElectricity.classList.remove("d-none");
    modalEducation.classList.add("d-none");
});

education.addEventListener("click", ()=>{
    modalSections.classList.remove("d-none");
    modalAirtime.classList.add("d-none");
    modalData.classList.add("d-none");
    modalCableTv.classList.add("d-none");
    modalElectricity.classList.add("d-none");
    modalEducation.classList.remove("d-none");
});



  