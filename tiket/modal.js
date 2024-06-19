document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("travelModal");
  const closeModalButton = document.getElementById("closeModal");

  document.querySelectorAll(".custombtntravel").forEach(button => {
    button.addEventListener("click", function () {
      const travelName = this.parentElement.parentElement.querySelector(".custom-role").innerText;
      document.getElementById("modalTitle").innerText = travelName;
      // Tambahkan logika untuk mengisi modal dengan konten yang sesuai berdasarkan travelName
      modal.style.display = "block";
    });
  });

  closeModalButton.addEventListener("click", function () {
    modal.style.display = "none";
  });

  window.addEventListener("click", function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
});


