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

    const timeCtrl1 = b.querySelector(".time-ctrl1");
    const timeCtrl2 = b.querySelector(".time-ctrl2");
    const shift1=timeCtrl1.querySelector(".Shift1");
    const shift2=timeCtrl2.querySelector(".Shift2");

    const s1 = timeCtrl1.querySelector(".s").value;
    console.log(s1);
    const e1 = timeCtrl1.querySelector(".e").value;
    console.log(e1);
    let calc1 = toHours(toSeconds(e1) - toSeconds(s1));
    totalHours += calc1;
    const s2 = timeCtrl2.querySelector(".s").value;
    console.log(s2);
    const e2 = timeCtrl2.querySelector(".e").value;
    console.log(e2);
    let calc2 = toHours(toSeconds(e2) - toSeconds(s2));
    totalHours += calc2;
    if(calc1==0&&calc2!==0){
        timeCtrl1.style.display="none";
        shift2.innerText="Shift";
    }
    if(calc1!==0&&calc2==0){
        timeCtrl2.style.display="none";
        shift1.innerText="Shift";
    }
    if(calc1==0&&calc2==0){
        b.style.display="none";
    }
});
const totalHourDisplay = document.getElementById("doctor-hours");
// console.log("total hours= "+totalHours);
totalHourDisplay.placeholder = totalHours + " Hours";
totalHourDisplay.style.backgroundColor = "#F5F2E4";


