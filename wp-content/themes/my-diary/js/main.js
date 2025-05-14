const form = document.getElementById("searchForm");
const input = document.getElementById("searchInput");
const popup = document.getElementById("popupImage");

form.addEventListener("submit", (e) => {
  if (input.value.trim() === "") {
    e.preventDefault();
    popup.classList.remove("hidden");

    setTimeout(() => {
      popup.classList.add("hidden");
    }, 3000);
  }
});

const menuCheck = document.getElementById("menu-btn-check");
const overlay = document.getElementById("overlay");

overlay.addEventListener("click", () => {
  console.log("クリックされました！");
});
// overlay.addEventListener("click", () => {
//   console.log("e");
//   menuCheck.checked = false;
// });
