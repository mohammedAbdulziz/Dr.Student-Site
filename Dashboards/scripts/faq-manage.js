const addFaqBtn = document.querySelector("#add-faq");
const addFaq = document.querySelector(".faqAdd");
const addFaqQst = document.querySelectorAll(".faq-item input")[1];

addFaqBtn.addEventListener('click', function () {

    addFaq.style.display = 'block';
    // setTimeout(() => {
    //     addFaq.style.opacity = '1';
    // }, 0);


});

addFaqQst.addEventListener('click', function () {
    // addFaq.style.opacity = '0';
    // setTimeout(() => {
    //     addFaq.style.display='none';
    // }, 1000);
    addFaq.style.display='none';


})

