<!-- <footer class="footer ">Все права защищены (c) Мой блог</footer> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"

        crossorigin="anonymous"></script>


        <script src="www/styling/script.js"> </script>

        <script >




 let barBtns = document.querySelectorAll(".bar-btn")
 let noContent = document.querySelector(".no-content")



   barBtns.forEach((barBtn)=> {
     barBtn.addEventListener("click",()=> {
       barBtn.classList.toggle("bar-btn-rotate")
       
       noContent.classList.remove("no-content")
       noContent.classList.add("article-paragraph")
       
       barBtn.addEventListener("click",()=> {
         noContent.classList.toggle("no-content")
         noContent.classList.toggle("article-paragraph")
        })
        
      })
    })
     
    
   
//OPEN ALL ARTICLES
  

let navMenu = document.querySelector(".nav-menu") 
let links = document.querySelector(".links")
let regLogIn = document.querySelector(".regLogIn")

navMenu.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu-rotate")
  links.classList.toggle("nav-menu-no-display")
  regLogIn.classList.toggle("nav-menu-no-display")

})



let acc = document.getElementsByClassName("accordion");
let accNmae = document.querySelector("#accc")

let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
      this.classList.toggle("active"); 
        let panel = this.nextElementSibling;


    
        if (classList = "unactive"){
         accNmae.textContent = "Закрыть"
       } 

    
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
          this.classList.add("unactive"); 
      
       if (classList = "unactive"){
        accNmae.textContent = "Открыть все статьи"
      } 

        } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      this.classList.remove("unactive"); 


    }
  });

}

// SECONDS COUNTDOWN &  PAGE TRANSFER


let number = 7
let countDown = document.getElementById("number").innerHTML = number

const timer = setInterval(()=>{
 document.getElementById("number").innerHTML = countDown
  if (number === 0){
    clearInterval(timer);
    let countDown = document.getElementById("number").innerHTML =  myURL()

  }
  else document.getElementById("number").innerHTML = `${number--}`

},1000)

function myURL() {
  document.location.href = "http://learning-php/www/index.php/main"
 }

// OPEN-IMAGE 

function openPhoto() {
  let photo = document.querySelector(".bd-placeholder-img").innerHTML 
   photo.textContent = "fdsad"
  
}


</script>
      
</body>

</html>