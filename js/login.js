const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button1 input"),
errorText = form.querySelector(".error-msg");


form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
   // let's start Ajax
    let msk = new XMLHttpRequest();
    msk.open("POST","php/login.php",true);
    msk.onload = ()=>{
        if(msk.readyState === XMLHttpRequest.DONE){
            if(msk.status === 200){
                let data = msk.response;
                console.log(data);
                if(data == "success"){
                    location.href = "index.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                   
                }
            }
        }

    }
    let formData = new FormData(form);
    msk.send(formData);

}