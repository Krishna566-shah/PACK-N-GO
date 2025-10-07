document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const passwordInput = document.getElementById("password");

  // Show/Hide password toggle
  const toggleButton = document.createElement("button");
  toggleButton.type = "button";
  toggleButton.textContent = "Show";
  toggleButton.style.marginLeft = "10px";
  passwordInput.insertAdjacentElement("afterend", toggleButton);

  toggleButton.addEventListener("click", function () {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleButton.textContent = "Hide";
    } else {
      passwordInput.type = "password";
      toggleButton.textContent = "Show";
    }
  });

  // Popup function
  function showPopup(message) {
    document.getElementById("popupMessage").textContent = message;
    document.getElementById("popupBox").style.display = "block";
  }

  // Close popup
  document.getElementById("closeBtn").onclick = function () {
    document.getElementById("popupBox").style.display = "none";
  };

  // // Check URL parameters for status
  const urlParams = new URLSearchParams(window.location.search);
  const status = urlParams.get("status");

  if (status === "success") {
    showPopup("Registration successful!");
  } else if (status === "invalid_email") {
    showPopup("Invalid email address. Please try again.");
  } else if (status === "error") {
    showPopup("Something went wrong. Please try again.");
  }
});
