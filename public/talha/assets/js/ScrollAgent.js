let lastparagraph = document.querySelector("#P4")
window.onload = () => {
    if(screen.width < 700){
        console.log("why not")
      lastparagraph.innerHTML = "Sitemizi diğer platformlardan ayıran en önemli özelliklerinden biri kullanıcı dostu olmasıdır.Platformda başarılı analistleri tek bir yerde görmeniz, size uygun Analisti karar vermede kolaylık sağlayacaktır. Bu sayede en doğru seçimi kolay bir şekilde yapabileceksiniz."
    }
}
window.addEventListener("resize",() => {
    if(screen.width > 700){
        lastparagraph.innerHTML = 'Sitemizi diğer platformlardan ayıran en önemli<br>özelliklerinden biri kullanıcı dostu olmasıdır.<br>Platformda başarılı analistleri tek<br>bir yerde görmeniz, size uygun Analisti karar vermede<br>kolaylık sağlayacaktır. Bu sayede en doğru seçimi<br>kolay bir şekilde yapabileceksiniz.'
    }
    else{
        lastparagraph.innerHTML = "Sitemizi diğer platformlardan ayıran en önemli özelliklerinden biri kullanıcı dostu olmasıdır.Platformda başarılı analistleri tek bir yerde görmeniz, size uygun Analisti karar vermede kolaylık sağlayacaktır. Bu sayede en doğru seçimi kolay bir şekilde yapabileceksiniz."        
    }
})