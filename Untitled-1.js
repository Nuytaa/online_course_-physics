
// Тест"Вес тела"
const questions = [
    {
        question: "1.Вес тела -это сила, с которой",
        answers: [
            "1) тело притягивается к Земле",
            "2) на него действует другое тело",
            "3) его удерживает опора",
            "4) оно, притягиваясь к Земле, действует на опору",
        ],
        correct: "4",
    },

    {
        question: "2.На что действует вес тела и как он направлен?",
        answers: ["1) На тело, находящееся на опоре или подвесе; вниз",
        "2) На тело, которое лежит на опоре; вверх",
        "3) На опору или подвес; вниз",
        "4) На опору или подвес; вверх"],
        correct: "3",
    },

    {
        question: "3.Какие силы изображены на рисунке буквами F1 и F2?",
        answers: ["1) F1 — сила тяжести, F2 — сила упругости",
        "2) F1 — сила тяжести, F2 — вес",
        "3) F1 — сила упругости, F2 — вес",
        "4) F1 — сила тяжести, F2 — сила тяжести"],
        correct: "2",
    },

    {
        question: "4. В каких случаях силы, действующие на тела, изображённые на рисунке, обозначены правильно?",
        answers: ["1) №3",
        "2) №1 и №2",
        "3) №2 и №3",
        "4) №1 и №4"],
        correct: "2",
    }, 

    {
        question: "5.Как зависит вес от силы тяжести, действующей на тело в со­стоянии покоя?",
        answers: ["1) Не зависит",
        "2) Чем меньше сила тяжести, тем больше вес",
        "3) Чем меньше сила тяжести, тем больше вес",
        "4) Среди ответов нет верного"],
        correct: "3",
    }
];

//Находим элементы
const headerContainer = document.querySelector('#header');
const listContainer = document.querySelector = ('#list');
const submitBtn = document.querySelector = ('#submit');

// headerContainer.innerHTML = '';
// listContainer.innerHTML = '';
let score = 0; //Кол-во правильных ответов 
let questionIndex = 0; //Текущий вопрос

clearPage();
showQuestion();

function clearPage() {
    headerContainer.innerHTML = '';
    listContainer.innerHTML = '';
}

function showQuestion() {
    const headerTemplate = `<h2 class="title">%title%</h2>`;
    const title = headerTemplate.replace('%title%', questions[questionIndex]['question']);

    headerContainer.innerHTML = title;

    //Варианты ответов

    for (answerText of questions[questionIndex]['answers']) {
        console.log(answerText);

        const questionTemplate = 
        `<label>
            <input type="radio" class="answer" name="answer",
            <span>%answer%</span>
        </label>`;

        const answerHTML = questionTemplate.replace('%answer%', answerText);

        listContainer.innerHTML += answerHTML; 
    }
}