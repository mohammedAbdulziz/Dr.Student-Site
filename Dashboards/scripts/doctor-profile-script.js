// The name of the doctor
// const doctorNameTitle = document.querySelectorAll('main .doctor-info h1')[0];
// var doctorName = "T. Shahlaa` Al-Swailim";
// doctorNameTitle.textContent = doctorName;

// const doctorStatusAv = document.querySelectorAll('main .doctor-info #doc-status .status-btn')[0];
// const doctorStatusNAv = document.querySelectorAll('main .doctor-info #doc-status .status-btn')[1];

// var docStatus = 'available';
// var docStatus = 'unavailable';

// if(docStatus=='available'){
//     doctorStatusAv.classList.add('active');
//     doctorStatusNAv.classList.remove('active');
// }
// else{
//     doctorStatusAv.classList.remove('active');
//     doctorStatusNAv.classList.add('active');
// }
function toSeconds(time) {
    const [hours, minutes] = time.split(':').map(Number);
    return (hours * 60 + minutes) * 60;
}

function toHours(time) {
    const hour = time / (60 * 60);
    return hour;
}
const scheduleInfo = document.querySelectorAll(".schedule-info");
let totalHours = 0;
// hours.value="LOL";
scheduleInfo.forEach((b) => {

    const timeCtrl = b.querySelectorAll(".time-ctrl");


    timeCtrl.forEach((info) => {
        // info.style.backgroundColor = "red";
        const s = info.querySelector(".s").value;
        // console.log(s);
        const e = info.querySelector(".e").value;
        // console.log(e);
        let calc = toHours(toSeconds(e) - toSeconds(s));
        totalHours += calc;
        // console.log(totalHours);
    });
});
const totalHourDisplay = document.getElementById("doctor-hours");
// console.log("total hours= "+totalHours);
totalHourDisplay.placeholder = totalHours + " Hours";
totalHourDisplay.style.backgroundColor = "#F5F2E4";