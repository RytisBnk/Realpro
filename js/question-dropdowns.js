var questions = document.getElementsByClassName("faq-question");

for (var i = 0; i < questions.length; i++) {
    questions[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var answer = this.nextElementSibling;
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
        } else {
            answer.style.display = "block";
            answer.style.maxHeight = answer.scrollHeight + "px";
        }
    });
}