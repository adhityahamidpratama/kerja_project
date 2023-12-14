const navlink = document.querySelectorAll(".links a");
function highlighActivelink() {
    const currentSection = window.location.hash;
    navlink.forEach((link)=> {
        link.classList.remove("active");
    });
    navlink.forEach((link)=>{
        if(link.getAttribute("href") === currentSection) {
            link.classList.add("active");
        }
    });
}

highlighActivelink();

window.addEventListener("hashchange",highlighActivelink);
