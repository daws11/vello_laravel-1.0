'use strict';



/**
 * navbar toggle
 */

const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const overlay = document.querySelector("[data-overlay]");

const elemArr = [navCloseBtn, overlay, navOpenBtn];

for (let i = 0; i < elemArr.length; i++) {
  elemArr[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}

/**
 * toggle navbar & overlay when click any navbar-link
 */

const navbarLinks = document.querySelectorAll("[data-navbar-link]");

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}





/**
 * header & go-top-btn active
 * when window scroll down to 400px
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");


document.addEventListener('DOMContentLoaded', function () {
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('visible');
          }
      });
  }, { threshold: 0.1 });

  const hiddenElementsTop = document.querySelectorAll('.fade-in-top');
  hiddenElementsTop.forEach(el => observer.observe(el));

  const hiddenElementsBottom = document.querySelectorAll('.fade-in-bottom');
  hiddenElementsBottom.forEach(el => observer.observe(el));
});

//Quiz
function showNextQuestion(index) {
  const currentQuestion = document.getElementById(`question-${index}`);
  const nextQuestion = document.getElementById(`question-${index + 1}`);
  
  if (nextQuestion) {
      // Scroll to the next question and show it
      nextQuestion.classList.remove('hidden');
      nextQuestion.scrollIntoView({ behavior: 'smooth' });

      // Apply fade-in effect using IntersectionObserver
      nextQuestion.classList.add('fade-in-bottom');
  }
}

// Function to show the next question
function showNextQuestion(index) {
  const currentQuestion = document.getElementById(`question-${index}`);
  const nextQuestion = document.getElementById(`question-${index + 1}`);
  
  if (nextQuestion) {
      // Scroll to the next question and show it
      nextQuestion.classList.remove('hidden');
      nextQuestion.scrollIntoView({ behavior: 'smooth' });

      // Apply fade-in effect using IntersectionObserver
      nextQuestion.classList.add('fade-in-bottom');
  }
}

// Function to handle the selection of an answer
function selectAnswer(questionIndex, answer) {
  // Get all cards in the current question
  const cards = document.querySelectorAll(`#question-${questionIndex} .card`);
  
  // Remove 'selected' class from all cards
  cards.forEach(card => card.classList.remove('selected'));

  // Highlight the selected card
  const selectedCard = Array.from(cards).find(card => card.textContent === answer);
  selectedCard.classList.add('selected');

  // Show the next question
  showNextQuestion(questionIndex);
}

// Function to handle the finish action
function finishQuiz() {
  submitQuiz();
}

function submitQuiz() {
  // Simpan data form atau panggil Ajax jika perlu
  let queueNumber = "0012"; // Contoh nomor antrian, ini bisa diambil dari server melalui Ajax.

  // Setelah data tersimpan, tampilkan modal
  document.getElementById('successModal').classList.remove('hidden');
  document.getElementById('successModal').classList.add('show');

  // Setel link WhatsApp dengan nomor antrian
  const whatsappLink = `https://wa.me/+62895352359306?text=Halo, Saya ingin melanjutkan konsultasi dengan nomor antrian ${queueNumber}`;
  document.getElementById('whatsappLink').setAttribute('href', whatsappLink);
}

function closeModal() {
  // Tutup modal
  document.getElementById('successModal').classList.remove('show');
}

// Function to show the description form when "Lainnya" is selected
function showDescriptionForm(questionIndex) {
  // Get the form element for the description
  const descriptionForm = document.getElementById(`description-form-${questionIndex}`);
  
  // Show the description form
  descriptionForm.classList.remove('hidden');
}