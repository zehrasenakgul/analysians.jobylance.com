let NavbarProfile_Button = document.querySelector(".NavbarProfileMenu");
let HesapBilgilerim_Cont = document.querySelector(".CurrentSession_HesapBilgilerim")
let CloseCross = document.querySelector(".CloseCross")

NavbarProfile_Button.addEventListener("click", () => {
    HesapBilgilerim_Cont.classList.toggle("showhesapbilgilerim")
})
CloseCross.addEventListener("click", () => {
    HesapBilgilerim_Cont.classList.toggle("showhesapbilgilerim")
})