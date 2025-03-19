
function homePage() {
    console.log("I was clicked");
}
const firstHeader = document.querySelector('#topHeader #logo');
firstHeader.addEventListener('click', function () {
    window.location.href = '../index.html'
})

//admin page codes ##########################################################################################

const adminPg_studentBtn = document.querySelector('main .manage-accounts .account-filter #studentBtn');
const adminPg_doctorBtn = document.querySelector('main .manage-accounts .account-filter #doctorBtn');
const adminPg_doctorTable = document.querySelector('main .manage-accounts #doctors');
const adminPg_studentTable = document.querySelector('main .manage-accounts #students')

adminPg_studentBtn.addEventListener('click', function () {
    adminPg_doctorBtn.classList.remove("active");
    adminPg_studentBtn.classList.add("active");
    adminPg_doctorTable.classList.remove("active");
    adminPg_studentTable.classList.add('active');
})

adminPg_doctorBtn.addEventListener('click', function () {
    adminPg_studentBtn.classList.remove("active");
    adminPg_doctorBtn.classList.add("active");
    adminPg_doctorTable.classList.add("active");
    adminPg_studentTable.classList.remove('active');
})

//### #### ####
const crtAccStudentBtn = document.querySelector('main .create-account-pg .accBtnType #studentBtn');
const crtAccDoctorBtn = document.querySelector('main .create-account-pg .accBtnType #doctorBtn');
const crtAccStudentForm = document.querySelector('main .create-account-pg .student-create')
const crtAccDoctorForm = document.querySelector('main .create-account-pg .doctor-create')

crtAccStudentBtn.addEventListener('click', function () {
    crtAccStudentBtn.classList.add("active");
    crtAccDoctorBtn.classList.remove("active");
    crtAccStudentForm.classList.add("active");
    crtAccDoctorForm.classList.remove("active");
})
crtAccDoctorBtn.addEventListener('click', function () {
    crtAccStudentBtn.classList.remove("active");
    crtAccDoctorBtn.classList.add("active");
    crtAccStudentForm.classList.remove("active");
    crtAccDoctorForm.classList.add("active");
})

//## ## ## 
const crtAccCancelBtn = document.querySelector('main .create-account-pg form .formDiv:last-of-type input:last-of-type');
const crtAccPg = document.querySelector('.create-account-pg');
const crtAccPgCancel = document.querySelector('.createAccPgBC');

crtAccCancelBtn.addEventListener('click', function () {
    crtAccPg.style.display = 'none';
    crtAccPgCancel.style.display = 'none';
})

// ###### #########
const adminAccPgAppear = document.querySelector('main .manage-accounts .new-account input');

adminAccPgAppear.addEventListener('click', function () {
    setTimeout(() => {
        crtAccPg.style.display = 'block';
        crtAccPgCancel.style.display = 'block';
    }, 100);

})