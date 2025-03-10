function toggleAnswer(questionElement) {
  const answer = questionElement.nextElementSibling;
  const arrow = questionElement.querySelector(".arrow");

  if (answer.style.maxHeight) {
    answer.style.maxHeight = null;
    arrow.style.transform = "rotate(0deg)";
  } else {
    answer.style.maxHeight = answer.scrollHeight + "px";
    arrow.style.transform = "rotate(180deg)";
  }
}
