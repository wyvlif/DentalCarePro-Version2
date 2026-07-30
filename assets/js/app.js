/* ==========================================
DentalCare Pro v2.0
Global JavaScript
========================================== */

document.addEventListener("DOMContentLoaded", function () {

    /* -------------------------------
       Mobile Navigation
    ------------------------------- */

    const menuToggle = document.getElementById("menuToggle");
    const navbar = document.getElementById("navbar");

    if(menuToggle && navbar){

        menuToggle.addEventListener("click", ()=>{

            navbar.classList.toggle("active");

        });

    }

    /* -------------------------------
       Scroll To Top
    ------------------------------- */

    const scrollBtn = document.getElementById("scrollTop");

    window.addEventListener("scroll",()=>{

        if(window.scrollY > 300){

            scrollBtn.style.display="flex";

        }else{

            scrollBtn.style.display="none";

        }

    });

    if(scrollBtn){

        scrollBtn.addEventListener("click",()=>{

            window.scrollTo({

                top:0,

                behavior:"smooth"

            });

        });

    }

    /* -------------------------------
       Sticky Header
    ------------------------------- */

    const header=document.querySelector(".header");

    window.addEventListener("scroll",()=>{

        if(window.scrollY>50){

            header.classList.add("sticky");

        }else{

            header.classList.remove("sticky");

        }

    });

    /* -------------------------------
       Fade Animation
    ------------------------------- */

    const observer = new IntersectionObserver((entries)=>{

        entries.forEach(entry=>{

            if(entry.isIntersecting){

                entry.target.classList.add("show");

            }

        });

    });

    document.querySelectorAll(".fade-up").forEach(el=>{

        observer.observe(el);

    });

});