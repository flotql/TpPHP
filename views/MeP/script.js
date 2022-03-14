const form = document.getElementById("formulaireUpdate")
const btn = document.body.getElementsByClassName("btnAnimaux")

for (let i=0;i<= btn.length;i++){
    btn[i].addEventListener("click",function(){
        form.style.display = "block";
        btn[i].style.background = "cyan";
    })
}