let section = document.querySelectorAll(".section");
let navlinks = document.querySelectorAll(".menu-bar a");
navlinks.forEach(link=>{
    link.addEventListener("click",()=>{
        removeLink();
        section.forEach(sec=>{
            if(sec.id==link.dataset.filter){
                sec.classList.remove("hidden");
            }
        })
    })
})
function removeLink(){
    section.forEach(sec=>{
        sec.classList.add("hidden");
    })
}
