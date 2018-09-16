document.getElementById('default-tab').click();

function openCategory(event, category) {
    var tablinks = document.getElementsByClassName("tab-link");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    var tabcontents = document.getElementsByClassName('tab-content');
    for (var i = 0; i < tabcontents.length; i++) {
        tabcontents[i].style.display = "none";
    }

    document.getElementById(category).style.display = "block";
    event.currentTarget.className += " active";
}