let dashboardmenu = document.querySelector(".DashboardMenu")
window.addEventListener("scroll",() =>{
    if (window.scrollY > 200){
        let sidenavbar = document.querySelector(".SideNavbar")
        sidenavbar.style.marginTop = "-5em";
        if(screen.height < 900){
            dashboardmenu.style.marginTop = "-14em"
        }
        else{
            dashboardmenu.style.marginTop = "-10em"
        }
        if(screen.height < 770){
            dashboardmenu.style.marginTop = "-5.5em"
        }
        else{
            dashboardmenu.style.marginTop = "-5em"
        }
        console.log(window.scrollY)
    }
    if (window.scrollY < 200){
        let sidenavbar = document.querySelector(".SideNavbar")
        sidenavbar.style.marginTop = "-1.7em"
        dashboardmenu.style.marginTop = "-3em"
        if(screen.height == 768){   
            dashboardmenu.style.marginTop = "-5em"
        }
    }
})

//Responsive Menü Fix
let sidenavbar = document.querySelector(".scrollhere")
if (screen.width < 600){
    window.onload = () => {
        sidenavbar.scrollIntoView({
            behavior : "smooth",
        })
    }
}

let testit = document.querySelector("#TESTIT")
let testit_hvr = document.querySelector(".testit")

testit_hvr.addEventListener("click",() => {
    testit.style.display = "block"
})