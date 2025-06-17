const form = document.getElementById("searchForm");
const formMobile = document.getElementById("searchFormMobile");

const input = document.getElementById("searchInput");
const inputMobile = document.getElementById("searchInputMobile");

const popup = document.getElementById("popupImage");
const popupMobile = document.getElementById("popupImageMobile");

form.addEventListener("submit", (e) => {
  if (input.value.trim() === "") {
    e.preventDefault();
    popup.classList.remove("hidden");

    setTimeout(() => {
      popup.classList.add("hidden");
    }, 3000);
  }
});
formMobile.addEventListener("submit", (e) => {
  if (inputMobile.value.trim() === "") {
    e.preventDefault();
    popupMobile.classList.remove("hidden");

    setTimeout(() => {
      popupMobile.classList.add("hidden");
    }, 3000);
  }
});

const menuCheck = document.getElementById("menu-btn-check");
const overlay = document.getElementById("overlay");

overlay.addEventListener("click", () => {
  menuCheck.checked = false;
});
