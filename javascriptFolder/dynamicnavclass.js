!(function(d) {
 let path = window.location.href; // because the 'href' property of the DOM element is the absolute path
 console.log(path);
 menuItems = document.querySelectorAll(".bookshelf a");
 for (let i=0; i<menuItems.length; i++) {
     menuItems[i].classList.add("book");
         menuItems[i].classList.remove("activebook");
     if (menuItems[i].href===path) {
         menuItems[i].classList.remove("book");
         menuItems[i].classList.add("activebook");
     }
 }
}(document));