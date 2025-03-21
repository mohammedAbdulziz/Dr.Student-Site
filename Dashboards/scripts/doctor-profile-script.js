// The name of the doctor
const doctorNameTitle = document.querySelectorAll('main .doctor-info h1')[0];
var doctorName = "T. Shahlaa` Al-Swailim";
doctorNameTitle.textContent = doctorName;

const doctorStatusAv = document.querySelectorAll('main .doctor-info #doc-status .status-btn')[0];
const doctorStatusNAv = document.querySelectorAll('main .doctor-info #doc-status .status-btn')[1];

var docStatus = 'available';
var docStatus = 'unavailable';

if(docStatus=='available'){
    doctorStatusAv.classList.add('active');
    doctorStatusNAv.classList.remove('active');
}
else{
    doctorStatusAv.classList.remove('active');
    doctorStatusNAv.classList.add('active');
}
