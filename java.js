
const test=document.getElementById("locat");
const searchBtn=document.getElementById("search");
searchBtn.addEventListener("click", (e)=>{
        e.preventDefault();
        console.log(test.value);
        test.value="";
});

const hide=document.getElementById("show");
const myDiv=document.getElementById("my-div");
hide.addEventListener("click",()=>{
        if(myDiv.style.display!="none"){
                myDiv.style.display="none";
        }else
        {
                myDiv.style.display="block";
        }
})

const login=document.getElementById("btn-log");
const signup=document.getElementById("btn-reg");

login.addEventListener("click",()=>{
        window.location.href="login.html";
})

signup.addEventListener("click",()=>{
        window.location.href="register.html";
})