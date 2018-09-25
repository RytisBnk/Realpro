var questions = document.getElementsByClassName("faq-question");

for (var i = 0; i < questions.length; i++) {
    questions[i].addEventListener("click", function () {
        var category = this.parentNode.parentNode;
        var activeDoms = category.getElementsByClassName("active");
        var containerPrevious;
        if (activeDoms.length > 0) {
            console.log(activeDoms);
            containerPrevious = activeDoms[0].parentNode;
        }
        var answer = this.nextElementSibling;
        var container = answer.parentNode;
        this.classList.toggle("active");
        if (containerPrevious) {
            var activeQuestion = containerPrevious.getElementsByClassName("active")[0];
            if (activeQuestion) {
                activeQuestion.classList.toggle("active");
                var previousAnswer = activeQuestion.nextElementSibling;
                previousAnswer.style.maxHeight = null;
                previousAnswer.style.paddingBottom = null;
                containerPrevious.style.borderTop = null;
            }      
        }
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
            answer.style.paddingBottom = null;
            container.style.borderTop = null;
        } else {
            answer.style.display = "block";
            var newHeight = answer.scrollHeight + 30;
            answer.style.maxHeight = newHeight + "px";
            answer.style.paddingBottom = "30px";      
            container.style.borderTop = "2px solid #858991";
        }
    });
}