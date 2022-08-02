let PreviewText = document.querySelector("#PreviewText")
//Accordion Expansion 
function expandAccordion(chosenNumber){
    let accordion_content_body = document.querySelector(`#Accordion-Content-Container_${chosenNumber}`)
    let accordion_expandToggle_btn = document.querySelector(`#accordion_expandToggle_btn_${chosenNumber}`)
    accordion_expandToggle_btn.classList.toggle(`expandedAccordion_btn`)
    accordion_content_body.classList.toggle("showAccordion")
}

///Preview(Dummy) Accordion Creation///
let expandAccordionAddScreen = document.querySelector(".Add-Accordion-Container")
let New_Accordion_Container = document.querySelector(".New-Accordion-Container")
let accordionPreview_Cont = document.querySelector(".accordionPreview")
let saveAccordion = document.querySelector(".saveAccordion")
expandAccordionAddScreen.addEventListener("click",()=>{
    New_Accordion_Container.classList.toggle("newAccordionShow")
    accordionPreview_Cont.classList.toggle("previewShow")
    expandAccordionAddScreen.style.display = "none"
    saveAccordion.style.display = "block"
    PreviewText.style.display = "block"
}) 
//Dummy Title tracking
let New_Section_Name_input = document.querySelector("#New_Section_Name")
let Title_Preview = document.querySelector(".Title_Preview")

New_Section_Name_input.addEventListener("input",()=>{
        Title_Preview.innerHTML = ""
        Title_Preview.insertAdjacentText('beforeend',New_Section_Name_input.value);
        console.log(accordionPreview)
})
//Dummy Accordion Items
let New_accordionContent_title_input = document.querySelector("#New_accordionContent_title")
let add_accordionContent_btn = document.querySelector("#add_accordionContent")
let ul_Container = document.querySelector("#Accordion-Content-Container_-1").querySelector("#Accordion-Content-List_-1")
add_accordionContent_btn.addEventListener("click",()=>{
    let link_item = document.createElement("a")
    let list_item = document.createElement("li");
    let content_Title_item = document.createElement("span")
    link_item.className = "accordionLink_preview"
    list_item.className = "accordionContent"
    content_Title_item.className = "contentTitle"
    content_Title_item.innerText = New_accordionContent_title_input.value
    list_item.appendChild(content_Title_item)
    link_item.appendChild(list_item)
    ul_Container.appendChild(link_item)
})

//Add Accordion
let saveAccordion_btn = document.querySelector(".saveAccordion")
let Accordions = document.querySelector(".Accordions")
let new_title = document.querySelector("#New_Section_Name")
let New_accordionContent_title = document.querySelector("#New_accordionContent_title")
let add_accordionContent = document.querySelector("#add_accordionContent")
let remove_accordionContent = document.querySelector("#remove_accordionContent")


let content_list = []
add_accordionContent.addEventListener("click",()=>{
    content_list.push(New_accordionContent_title.value);
    // for(i in content_list){
    //     console.log("Yazılan Liste",content_list[i])
    // }
})
remove_accordionContent.addEventListener("click",()=>{
    content_list.pop(New_accordionContent_title.value);
    // for(i in content_list){
    //     console.log("Yeni Liste",content_list[i])
    // }
})


let accordionLink_preview = document.getElementsByClassName("accordionLink_preview")

saveAccordion_btn.addEventListener("click",()=>{
    let current_items_count = document.getElementsByClassName("Accordion-Container").length + 1
    console.log("current element count : ",current_items_count) 
    
    let accordion_cont = document.createElement("div")
    accordion_cont.className = "Accordion-Container"
    accordion_cont.id = `Accordion-Container${current_items_count}`

    let accordion_header = document.createElement("div")
    accordion_header.className = "Accordion-Header"
    accordion_header.setAttribute("onclick",`expandAccordion(${current_items_count})`)

    let Accordion_Section_Title = document.createElement("span")
    Accordion_Section_Title.className = "Accordion_Section_Title"
    Accordion_Section_Title.innerText = new_title.value

    let accordion_expandToggle_btn = document.createElement("button")
    accordion_expandToggle_btn.type = "button"
    accordion_expandToggle_btn.innerHTML = '<i class="fa-solid fa-caret-down"></i>'
    accordion_expandToggle_btn.id = `accordion_expandToggle_btn_${current_items_count}`

    let accordion_deleteToggle_btn = document.createElement("button")
    accordion_deleteToggle_btn.type = "button"
    accordion_deleteToggle_btn.innerHTML = '<i class="fa-solid fa-trash-can"></i>'
    accordion_deleteToggle_btn.id = "Delete_btn"
    accordion_deleteToggle_btn.setAttribute("onclick",`deleteAccordion(${current_items_count})`)


    accordion_header.appendChild(Accordion_Section_Title)
    accordion_header.appendChild(accordion_deleteToggle_btn)
    accordion_header.appendChild(accordion_expandToggle_btn)
    accordion_cont.appendChild(accordion_header)


    let Accordion_Content_Container = document.createElement("div")
    Accordion_Content_Container.className = "Accordion-Content-Container"
    Accordion_Content_Container.id = `Accordion-Content-Container_${current_items_count}`

    let Accordion_Content_List = document.createElement("ul")
    Accordion_Content_List.className ="Accordion-Content-List"
    Accordion_Content_List.id = `Accordion-Content-List_${current_items_count}`
    
    for(let i in content_list){
        let link_item = document.createElement("a")
        let list_item = document.createElement("li")
        list_item.className = "accordionContent"
    
        let contentTitle = document.createElement("span")
        contentTitle.className = "contentTitle"
        contentTitle.innerHTML = content_list[i]
    
        let contentDuration = document.createElement("span")
        contentDuration.className = "contentDuration"
        contentDuration.innerText = "1h 3m"

        list_item.appendChild(contentTitle)
        list_item.appendChild(contentDuration)
        link_item.appendChild(list_item)
        Accordion_Content_List.appendChild(link_item)
    }
    content_list.length = 0
    Accordion_Content_Container.appendChild(Accordion_Content_List)
    accordion_cont.appendChild(Accordion_Content_Container)
    Accordions.appendChild(accordion_cont)



    New_Accordion_Container.classList.toggle("newAccordionShow")
    saveAccordion_btn.style.display = "none"
    expandAccordionAddScreen.style.display = "block"
    PreviewText.style.display = "none"
    accordionPreview_Cont.classList.toggle("previewShow")
    ul_Container.innerHTML = ""
})

//Accordion Delete
function deleteAccordion(chosenAcc){
    console.log(chosenAcc)
    let chosenAccordion = document.querySelector(`#Accordion-Container${chosenAcc}`)
    chosenAccordion.parentNode.removeChild(chosenAccordion)
}

