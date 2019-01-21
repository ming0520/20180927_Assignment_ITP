var btnClickMe = document.getElementsByClassName("btn-outline-hover");
var question_x = question_engineering;
var title_x = title_engineering;
for (var i = 0; i < btnClickMe.length; i++) {
    btnClickMe[i].addEventListener("click", setQuestions);

}

//Function that set the questions
function setQuestions() {
    var btnNewsValue = this.attributes["data-btnnews"].value;
    console.log(btnNewsValue);
    switch (btnNewsValue) {
        case 'Challenge Technology':
            question_x = question_tech;
            title_x = title_tech;
            break;
        case 'Challenge Science':
            question_x = question_science;
            title_x = title_science;
            break;
        default:
            question_x = question_tech;
            title_x = title_tech;
            break;
    }
}

var currentQuestion = 0;
var score = 0;

var qlen = question_x.length;
var bodyTitle = document.getElementById("containerTitle");

var container = document.getElementById('quizContainer');
var question = document.getElementById('question');
var opt1 = document.getElementById('opt1');
var opt2 = document.getElementById('optBtn2');
var opt3 = document.getElementById('optBtn3');
var opt4 = document.getElementById('optBtn4');
var nextButton = document.getElementById('nextButton');
var resultTxt = document.getElementById('resultTxt');
var resultPannel = document.getElementById('result');

bodyTitle.innerHTML = title_x;

function loadQuestion(questionIndex) {
    var q = question_x[questionIndex];
    question.textContent = (questionIndex + 1) + '. ' + q.question;
    opt1.textContent = q.option1;
    opt2.textContent = q.option2;
    opt3.textContent = q.option3;
    opt4.textContent = q.option4;
};

function loadNextQuestion() {
    var selectedOption = document.querySelector('input[type=radio]:checked');
    if (!selectedOption) {
        alert('Please select your answer!');
        return;
    }
    var answer = selectedOption.value;
    if (question_x[currentQuestion].answer == answer) {
        score += 10;
    } else {
        alert('Wrong answer');
    }
    selectedOption.checked = false;
    currentQuestion++;
    if (currentQuestion == qlen - 1) {
        nextButton.textContent = 'Finish';
    }
    if (currentQuestion == qlen) {
        container.style.display = 'none';
        resultPannel.style.display = '';
        resultTxt.value = score;
        return;
    }
    loadQuestion(currentQuestion);
}

loadQuestion(currentQuestion);