function showPlanDropdown(planId, planButtonId) {
    var collapse = document.getElementById(planId);
    var button = document.getElementById(planButtonId);
    button.classList.toggle("flipped-180");
    if (collapse.style.maxHeight == "190px") {
        collapse.style.maxHeight = collapse.scrollHeight + "px";
    }
    else {
        collapse.style.maxHeight = "190px";
    }
}