// Toggle tabs
function showSection(section) {
  document
    .querySelectorAll(".tab-btn")
    .forEach((btn) => btn.classList.remove("active"));
  document
    .querySelector(`button[onclick="showSection('${section}')"]`)
    .classList.add("active");

  document.querySelectorAll(".tab-content").forEach((content) => {
    content.style.display = "none";
    content.classList.remove("active");
  });
  document.getElementById(section).style.display = "block";
  document.getElementById(section).classList.add("active");
}

function toggleModal(role) {
  const modal = document.getElementById("user-modal");
  modal.style.display = modal.style.display === "flex" ? "none" : "flex";

  if (role) {
    document.getElementById("modal-title").textContent = `Add ${
      role.charAt(0).toUpperCase() + role.slice(1)
    }`;
  }
}
