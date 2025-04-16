function toSeconds(time) {
    const [hours, minutes] = time.split(':').map(Number);
    return (hours * 60 + minutes) * 60;
}

function toHours(time) {
    const hour = time / (60 * 60);
    return hour;
}

const noti = document.querySelector("#notifications");
const today = new Date();
if(today.getDay()==6||today.getDay()==5){
    noti.innerHTML="<h2>Notifications</h2><div class='doctor-info'><p>Today is a holiday, no one is available</p></div>"
}
// console.log(today.getDay());

const doctorNot =document.querySelectorAll(".doctorNot");
// doctorNot.style.backgroundColor="red";

doctorNot.forEach(b=>{
    let sumHours=0;
    const timeCtrl = b.querySelectorAll(".timeCtrl");
    timeCtrl.forEach(function(info){
        const s = info.querySelector(".s").value;
        // console.log(s);
        const e = info.querySelector(".e").value;
        // console.log(e);
        let calc = toHours(toSeconds(e) - toSeconds(s));
        sumHours+=calc;
    });
    if(sumHours==0){
        b.style.display="none";
    }

});
