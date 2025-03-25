
    const studentEdit =document.querySelectorAll(".student-edit");
    const doctorEdit=document.querySelectorAll(".doctor-edit");
    const inputs =document.querySelectorAll(".accounts-table table tr td input")
    inputs.forEach((input)=>{
        input.style.width=(input.value.length + 3) + 'ch';
    })
studentEdit.forEach(button=>{
    button.addEventListener('click',function(){
        let row=this.closest('tr');
        console.log(row.querySelectorAll("td")[1].textContent);
        let id= row.querySelectorAll("td")[1].textContent;
        let rowId="#studentEditRow"+id;
        // console.log(rowId); 
        const studentEditForms=document.querySelector(rowId);
        studentEditForms.style.display="table-row";
        const cancelBtn = document.querySelector(rowId + " td button");
        cancelBtn.addEventListener('click',()=>{
            studentEditForms.style.display="none";
        })
    })
})

doctorEdit.forEach(function(button){
    button.addEventListener('click',function(){
        let row =this.closest('tr');
        let id =row.querySelectorAll("td")[1].textContent;
        let rowId="#doctorEditRow"+id;
        console.log(rowId);
        const doctorEditForms=document.querySelector(rowId);
        doctorEditForms.style.display="table-row";

        const cancelBtn =document.querySelector(rowId+ " td button");
        cancelBtn.addEventListener('click',()=>{
            doctorEditForms.style.display="none";
        })
    })
})
