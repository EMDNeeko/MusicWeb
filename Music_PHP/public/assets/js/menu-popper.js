var dropdowns = document.querySelectorAll(".drop-list");
    for (var index = 0; index < dropdowns.length; index++) {
        dropdowns[index].classList.add("hide");
    }
    var dropdowns = document.querySelector("header").querySelectorAll(".dropdown");
    for (var index = 0; index < dropdowns.length; index++) {
        dropdowns[index].addEventListener("click", function(e){
            var links = e.currentTarget.parentNode.querySelectorAll(".drop-list");
            for (var i = 0; i < links.length; i++) {
                if ( e.currentTarget.querySelector(".drop-list") != links[i])
                    links[i].classList.add("hide");
            }
            e.currentTarget.querySelector(".drop-list").classList.toggle("hide");
        });
    }

var links = document.querySelector("header").querySelectorAll(".nav-item");
for (let index = 0; index < links.length; index++) {
    if(links[index].children[0].href == window.location.href || links[index].children[0].href+"/" == window.location.href){
        links[index].classList.add("active");
    }
}