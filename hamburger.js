const menu = document.querySelector(".meni");

menu.addEventListener("click", () => {
  menu.classList.toggle("active");
});


function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("klik");
    // Get the output text
    var menu = document.getElementById("menu");
    var body = document.getElementById("main-container");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      body.style.overflow = "hidden";
      menu.style.top = "0vh";
     
    } else {
      body.style.overflow = "visible";
      menu.style.top = "-200vh";
    }
  }