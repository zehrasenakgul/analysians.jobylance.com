function showComments(postNumber){
    console.log("hey")
    let commentsSection = document.querySelector(`#postComments${postNumber}`)
    commentsSection.classList.toggle("showCommentsSection")
}
function deleteComment(commentNumber){
    console.log(commentNumber)
    let chosenComment = document.querySelector(`#postedComment${commentNumber}`)
    chosenComment.parentNode.removeChild(chosenComment)
}
function likeComment(commentNumber){
    let likeBtn = document.querySelector(`#likeComment${commentNumber}`)
    likeBtn.classList.toggle("Liked")
}
function editComment(commentNumber){

}