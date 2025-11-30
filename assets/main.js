document.addEventListener("DOMContentLoaded", () => {
  // Contact form validation
  const form = document.getElementById("hubForm");
  const status = document.getElementById("hubStatus");

  if (form && status) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      status.textContent = "";
      status.className = "form-status";

      const name = document.getElementById("hubName").value.trim();
      const email = document.getElementById("hubEmail").value.trim();
      const message = document.getElementById("hubMessage").value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!name || !email || !message) {
        status.textContent = "Please fill in all fields before submitting.";
        status.classList.add("error");
        return;
      }
      if (!emailPattern.test(email)) {
        status.textContent = "Please enter a valid email address.";
        status.classList.add("error");
        return;
      }

      form.reset();
      status.textContent = "Message sent successfully! We’ll reply within 48 hours.";
      status.classList.add("success");

      setTimeout(() => {
        status.textContent = "";
        status.className = "form-status";
      }, 4000);
    });
  }

  // Scroll to top
  const scrollBtn = document.getElementById("hubScrollTop");
  if (scrollBtn) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) scrollBtn.classList.add("show");
      else scrollBtn.classList.remove("show");
    });
    scrollBtn.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
  }

  // Footer year
  document.querySelectorAll("[data-year]").forEach((el) => {
    el.textContent = new Date().getFullYear();
  });
});
