const month_days = [
  1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22,
  23, 24, 25, 26, 27, 28, 29, 30,
];
const daynames = [
  "MON",
  "TUE",
  "WED",
  "THU",
  "FRI",
  "SAT",
  "SUN",
  "MON",
  "TUE",
  "WED",
  "THU",
  "FRI",
  "SAT",
  "SUN",
  "MON",
  "TUE",
  "WED",
  "THU",
  "FRI",
  "SAT",
  "SUN",
  "MON",
  "TUE",
  "WED",
  "THU",
  "FRI",
  "SAT",
  "SUN",
  "SAT",
  "SUN",
];
const daynames_long = [
  "MONDAY",
  "TUESDAY",
  "THURSDAY",
  "FRIDAY",
  "SATURDAY",
  "SUNDAY",
  "MONDAY",
  "TUESDAY",
  "THURSDAY",
  "FRIDAY",
  "SATURDAY",
  "SUNDAY",
  "MONDAY",
  "TUESDAY",
  "THURSDAY",
  "FRIDAY",
  "SATURDAY",
  "SUNDAY",
  "MONDAY",
  "TUESDAY",
  "THURSDAY",
  "FRIDAY",
  "SATURDAY",
  "SUNDAY",
  "MONDAY",
  "TUESDAY",
  "THURSDAY",
  "FRIDAY",
  "SATURDAY",
  "SUNDAY",
];
const week = [1, 2, 3, 4, 5, 6, 7];
const month_names = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

let Dates = document.getElementsByClassName(".Date");
let DatesContainer = document.querySelector(".Dates");
let DatesContainer_Select = document.querySelector("#DatesSelect");
let FilterOptions = document.querySelector("#FilterOptions");

//Containers

FilterOptions.addEventListener("change", detectChange);
detectChange();
function detectChange() {
  let ChoosenOption = FilterOptions.options[FilterOptions.selectedIndex].value;
  currentListingType = "Week";
  if (ChoosenOption == "Week") {
    currentListingType = "Week";
  }
  if (ChoosenOption == "Month") {
    currentListingType = "Month";
  }
  if (ChoosenOption == "Year") {
    currentListingType = "Year";
  }
  console.log(currentListingType)
  updateListing(currentListingType);
}

function updateListing(currentListingType) {
    if (currentListingType == "Week") {
        DatesContainer.innerHTML = ""
        DatesContainer.style.display = "flex"
        DatesContainer_Select.style.display = "none"
    for (let i = 0; i < week.length; i++) {
      let Date = document.createElement("div");
      let Date_Day = document.createElement("span");
      let Date_Number = document.createElement("span");
      Date.classList.add("Date");
      Date.id = `Date${i + 1}`;
      Date_Day.id = `DateDay${i + 1}`;
      Date_Number.id = `DateNumber${i + 1}`;
      Date_Day.classList.add("DateDay");
      Date_Number.classList.add("DateNumber");
      Date_Number.innerText = week[i];
      Date_Day.innerText = daynames[i];
      Date.appendChild(Date_Day);
      Date.appendChild(Date_Number);
      DatesContainer.appendChild(Date);
      Date.setAttribute("onclick", `ChosenDate(${i})`);
    }
  }
  if (currentListingType == "Month") {  
    DatesContainer.innerHTML =""
    DatesContainer.style.display = "none"
    DatesContainer_Select.style.display = "flex"
    DatesContainer_Select.innerHTML = ""
    for (let i = 0; i < month_days.length; i++) {
      let Date = document.createElement("option");
      let Date_Day = document.createElement("span");
      let Date_Number = document.createElement("span");
      Date.classList.add("Date");
      Date_Day.classList.add("DateDay");
      Date_Number.classList.add("DateNumber");
      Date.id = `Date${i + 1}`;
      Date_Day.id = `DateDay${i + 1}`;
      Date_Number.id = `DateNumber${i + 1}`;
      Date_Number.innerText = month_days[i];
      Date_Day.innerText = " " + daynames_long[i];
      Date.appendChild(Date_Number);
      Date.appendChild(Date_Day);
      DatesContainer_Select.appendChild(Date);
      Date.setAttribute("onclick", `ChosenDate(${i})`);
    }

}
    if (currentListingType == "Year") {
        DatesContainer.style.display = "none"
        DatesContainer_Select.style.display = "flex"
        DatesContainer_Select.innerHTML = ""
    for (let i = 0; i < month_names.length; i++) {
        let Date = document.createElement("option");
        let Date_Day = document.createElement("span");
        Date.classList.add("Date");
        Date_Day.classList.add("DateDay");
        Date.id = `Date${i + 1}`;
        Date_Day.id = `DateDay${i + 1}`;
        Date_Day.innerText = month_names[i];
        Date.appendChild(Date_Day);
        DatesContainer_Select.appendChild(Date);
        Date.setAttribute("onclick", `ChosenDate(${i})`);
    }
    }
}

function ChosenDate(idnum) {
  let all_Date_Numbers = document.getElementsByClassName("DateNumber");
  let all_Date_Days = document.getElementsByClassName("DateDay");
  for (var i = 0; i < all_Date_Numbers.length; i++) {
    let number_element = all_Date_Numbers[i];
    console.log("----");
    console.log(all_Date_Numbers[i]);
    number_element.className = "DateNumber";
  }
  for (var i = 0; i < all_Date_Days.length; i++) {
    let day_element = all_Date_Days[i];
    console.log("----");
    console.log(all_Date_Days[i]);
    day_element.className = "DateDay";
  }
  let Date_Number = document.querySelector(`#DateNumber${idnum + 1}`);
  let Date_Day = document.querySelector(`#DateDay${idnum + 1}`);
  let Date_Year = document.querySelector(`#DateDay${idnum + 1}`);
  if (currentListingType == "Year") {
    Date_Year.classList.toggle("ActiveDateMonth");
  } else {
    Date_Number.classList.toggle("ActiveDateNumber");
  }
  Date_Day.classList.toggle("ActiveDateDay");
}
