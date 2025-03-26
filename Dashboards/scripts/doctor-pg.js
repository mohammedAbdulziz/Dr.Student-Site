function toSeconds(time) {
    const [hours, minutes] = time.split(':').map(Number);
    return (hours * 60 + minutes) * 60;
}

function toHours(time) {
    const hour = time / (60 * 60);
    return hour;
}

document.addEventListener('DOMContentLoaded', () => {
    const scheduleInfo = document.querySelectorAll(".schedule-info");
    const statusSubmit = document.getElementById("statusSubmit");
    const statusBtn=document.querySelectorAll(".status-btn");

    statusBtn.forEach((btn)=>{
        btn.addEventListener('click',()=>{
            setTimeout(() => {
                statusSubmit.click();
            }, 200);
        })
    });

    let totalHours = 0;
    // hours.value="LOL";
    scheduleInfo.forEach((b) => {

        const timeCtrl = b.querySelectorAll(".time-ctrl");
        // timeCtrl.style.backgroundColor="red";

        timeCtrl.forEach((info) => {
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
    totalHourDisplay.value = totalHours + " Hours";
    totalHourDisplay.style.backgroundColor = "#F5F2E4";


});