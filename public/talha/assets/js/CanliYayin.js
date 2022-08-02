let PlayStopBtn = document.querySelector(".LiveStream_PlayStopBtn")
let VolumeBtn = document.querySelector(".LiveStream_VolumeBtn")
let VolumeLevel_Range = document.querySelector("#VolumeLevel") 
let LiveStream = document.querySelector(".LiveStream_Video")
let FullscreenBtn = document.querySelector(".LiveStream_FullscreenBtn")
let VolumeOnOff = document.querySelector(".volumeonoff")
//


isStreamPlaying = false;
PlayStopBtn.addEventListener("click",playstopvideo)
function playstopvideo(){
    console.log("Playing :",isStreamPlaying)
    if (isStreamPlaying === false){
        isStreamPlaying = true;
        PlayStopBtn.innerHTML = '<i class="fa-solid fa-pause"></i>'
        LiveStream.play()
    }
    else{
        PlayStopBtn.innerHTML = '<i class="fa-solid fa-play"></i>'
        isStreamPlaying = false;
        LiveStream.pause()
    }
}
// isVideoMuted = false;
// VolumeOnOff.addEventListener("click",VolumeControl)
// function VolumeControl(){
//     if (isVideoMuted === false){
//         isVideoMuted = true;
//         VolumeBtn.innerHTML = '<i class="volumeonoff fa-solid fa-volume-xmark"></i>'
//         LiveStream.volume = 0
//     }
// }
VolumeBtn.addEventListener("mouseover",VolumeLevelDisplay)
function VolumeLevelDisplay(){
    VolumeLevel_Range.style.display = "block" 
    VolumeLevel_Range.addEventListener("input",VolumeLevel)
    function VolumeLevel(){
        LiveStream.volume = VolumeLevel_Range.value / 100
    }
    VolumeLevel_Range.addEventListener("mouseout",() => {
        VolumeLevel_Range.style.display = "none";
    })    
}
document.addEventListener("fullscreenchange", function() {
    if (document.fullscreen) {
      console.log('Entering Full Screen Toggle');
    } else {
    LiveStream.removeAttribute("controls", "");
}
  });
isFullscreenOn = false;
FullscreenBtn.addEventListener("click",FullscreenToggle = () =>
{   
        LiveStream.toggleAttribute("controls")
        LiveStream.requestFullscreen();
})


let MessageInput = document.querySelector("#MessageInput")
let Chatbox = document.querySelector(".Chatbox")
let SendMessage = document.querySelector("#SendMessage")

SendMessage.addEventListener("click",() => {
    if(MessageInput.value.length == 0){
        alert("EMPTY STRING")  
    }
    else{
            let sentmessagecontainer = document.createElement("div")
            sentmessagecontainer.className = "SentMessageBox"
            let sentmessagespan = document.createElement("span")
            sentmessagespan.className = "SentMessage_Message"
            let message = document.createTextNode(MessageInput.value)
            sentmessagespan.appendChild(message)
            sentmessagecontainer.appendChild(sentmessagespan)
            Chatbox.appendChild(sentmessagecontainer)
    }
})