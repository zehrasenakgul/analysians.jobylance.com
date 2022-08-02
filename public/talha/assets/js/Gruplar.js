let groupsettings_open_btn = document.querySelector("#GroupSettings_Btn") 
let groupsettings_cont = document.querySelector(".GroupSettings_Container")
let messageboxes = document.getElementsByClassName("Chat_Message-Content")

let isMessagesSizedDown = false;
let isGroupStngs_Open = false
groupsettings_open_btn.addEventListener("click",() => {
    if (isGroupStngs_Open == true){
        isGroupStngs_Open = false;
        groupsettings_open_btn.innerHTML = '<i class="fa-solid fa-circle-info"></i>'
        grouplar_open_btn.style.display = "block"
        isMessagesSizedDown = ! isMessagesSizedDown
    }
    else{
        isGroupStngs_Open = true;
        isMessagesSizedDown = ! isMessagesSizedDown
        groupsettings_open_btn.innerHTML = '<i class="fa-solid fa-xmark"></i>'
        grouplar_open_btn.style.display = "none"
    }
    groupsettings_cont.classList.toggle("GroupSettings_Container_Active")
    if(isMessagesSizedDown == false){
        for(let messagebox in messageboxes){
            messageboxes[messagebox].style.maxWidth = "none"
        }
    }
    else{
        for(let messagebox in messageboxes){
            messageboxes[messagebox].style.maxWidth = "830px"
        }
    }
})

let grouplar_open_btn = document.querySelector(".Go2Groups")
let grouplar_cont = document.querySelector(".Groups-Container")
let ChatBox = document.querySelector(".ChatBox")

let isGrouplar_Open = false
grouplar_open_btn.addEventListener("click",grouplar_open_close)
function grouplar_open_close(){
    console.log("Clicked it at :" ,screen.width)
    if (isGrouplar_Open == true){
        isGrouplar_Open = false;
        grouplar_cont.classList.toggle("Groups-Container_Active")
        ChatBox.style.display = "block"
        grouplar_open_btn.innerHTML = '<i class="fa-solid fa-bars"></i>'
    }
    else{
        isGrouplar_Open = true;
        grouplar_cont.classList.toggle("Groups-Container_Active")
        ChatBox.style.display = "none"
        grouplar_open_btn.innerHTML = '<i class="fa-solid fa-xmark"></i>'
    }
}

window.addEventListener("resize", () => {
    if (screen.width > 1000){
        ChatBox.style.display = "block"
        if (isGrouplar_Open == true){
            grouplar_open_close();
        }
    }
});

let UyelerTab_btn = document.querySelector("#UyelerTab_btn")
let Medyalar_btn = document.querySelector("#Medyalar_btn")
let MembersTab = document.querySelector(".MembersTab")
let MediaTab = document.querySelector(".MediaTab")

let isMedyalar_Open = false;
let isMembers_Open = true;
UyelerTab_btn.addEventListener("click",() => {
    if(isMedyalar_Open == true){
        MediaTab.classList.toggle("mediatab_open")
        isMedyalar_Open  = ! isMedyalar_Open;
    }
    if(isMembers_Open == false){
        MembersTab.classList.toggle("memberstab_open")
        isMembers_Open = ! isMembers_Open;
    }
    console.log(isMembers_Open)
})
Medyalar_btn.addEventListener("click",() => {
    if(isMembers_Open == true){
        MembersTab.classList.toggle("memberstab_open")
        isMembers_Open = ! isMembers_Open;
    }
    if(isMedyalar_Open == false){
        MediaTab.classList.toggle("mediatab_open")
        isMedyalar_Open  = ! isMedyalar_Open;
    }
})
let MedyaTab_Active = false;
let UyelerTab_Active = true;
function ChangeActivity(num){  
    if (num == 1){
        if(UyelerTab_Active == true){
            
        }
        else{
            Medyalar_btn.classList.toggle("activeTab")
            MedyaTab_Active = ! MedyaTab_Active
            UyelerTab_btn.classList.toggle("activeTab")
            UyelerTab_Active = ! UyelerTab_Active
        }
    }
    if (num == 2){
        if(MedyaTab_Active == true){
            
        }
        else{
            Medyalar_btn.classList.toggle("activeTab")
            MedyaTab_Active = ! MedyaTab_Active
            UyelerTab_btn.classList.toggle("activeTab")
            UyelerTab_Active = ! UyelerTab_Active
        }
    }
   
}
let openEditScreen = document.querySelector("#GroupInfo_EditProfile")
let closeEditScreen = document.querySelector("#closeEditScreen")
let editScreenContainer = document.querySelector(".EditGroup_Container")
closeEditScreen.addEventListener("click",editScreenToggle)
openEditScreen.addEventListener("click",editScreenToggle)

let is_editScreenOpen = false; 
function editScreenToggle(){
    is_editScreenOpen = ! is_editScreenOpen
    editScreenContainer.classList.toggle("editScreenOn")
}
window.addEventListener("resize",toggle_for_Res)
function toggle_for_Res(){
    if ( screen.width > 1398 && screen.width < 1400){
        if( isGroupStngs_Open == true){
           groupsettings_open_btn.click();
            isGroupStngs_Open = false;
       }
       if( is_editScreenOpen == true){
         editScreenToggle();
       }
    }
    if ( screen.width > 849 && screen.width < 851){
        if( isGroupStngs_Open == true){
           groupsettings_open_btn.click();
            isGroupStngs_Open = false;
       }
       if( is_editScreenOpen == true){
         editScreenToggle();
       }
    }
}
