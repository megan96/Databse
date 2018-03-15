 function goTo(transitionEvent,resouceType) {
    var i, formContent, tabLinks;
    formContent = document.getElementsByClassName("addNew");
    for (i = 0; i < formContent.length; i++) {
        formContent[i].style.display = "none";
    }
    tabLinks = document.getElementsByClassName("tabLinks");
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }
    document.getElementById(resouceType).style.display = "block";
    transitionEvent.currentTarget.className += " active";
 }
