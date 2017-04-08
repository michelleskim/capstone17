/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

jQuery(function($){

  var currentpanel=0;

  $(document).on("scroll",handlescroll);

  function handlescroll(e){
    var st=$(document).scrollTop();
    var panel=Math.floor(st/200);

    if (panel!=currentpanel){
      currentpanel=Math.min(6,panel);

      showpanel(currentpanel);
    }
  }


  function showpanel(n){
    //scroll the the correct panel
    $("#panel").css({
      "top":(n*-100)+"%"
    })
    //update nav dots
    $(".breadcrumbs-intro i").removeClass("fa-circle").addClass("fa-circle-o");
    $(".breadcrumbs-intro").children().eq(n).children("i").removeClass("fa-circle-o").addClass("fa-circle");
    console.log(n);
  }

  $(".breadcrumbs-intro a").on("click",handledotclick);

  function handledotclick(e){
    var n=$(this).index();
    showpanel(n);
    e.preventDefault();
  }

  $(".fa-chevron-down").on("click",handledotclick);

});



jQuery(

  function(){

    jQuery("#down").on("click", handleClick);

    function handleClick(){

      jQuery(".menu").toggleClass("active");

    }

  }

);
