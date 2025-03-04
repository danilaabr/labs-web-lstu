document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".main-form");

  const phoneInput = document.getElementById("contact_phone");
  phoneInput.addEventListener("input", function (e) {
    let value = e.target.value.replace(/[^\d+]/g, "");

    if (!value.startsWith("+")) {
      value = "+" + value;
    }

    if (value.length > 12) {
      value = value.slice(0, 12);
    }

    e.target.value = value;
  });

  form.addEventListener("submit", function (event) {
    let hasErrors = false;

    const sellerName = document.getElementById("seller_name");
    const nameRegex = /^[а-яА-ЯёЁa-zA-Z\s-]+$/;

    if (!nameRegex.test(sellerName.value)) {
      showError(
        sellerName,
        "Имя продавца может содержать только буквы и пробелы"
      );
      hasErrors = true;
    } else {
      clearError(sellerName);
    }

    const phone = document.getElementById("contact_phone");
    const phoneRegex = /^\+\d{11}$/;

    if (!phoneRegex.test(phone.value)) {
      showError(
        phone,
        "Телефон должен содержать 11 цифр, например: +79001002030"
      );
      hasErrors = true;
    } else {
      clearError(phone);
    }

    const email = document.getElementById("contact_email");
    const emailRegex =
      /^[a-zA-Z0-9._%+-]+@(gmail\.com|yandex\.(ru)|mail\.ru)$/i;

    if (!emailRegex.test(email.value)) {
      showError(
        email,
        "Разрешены только адреса от gmail.com, yandex.ru или mail.ru"
      );
      hasErrors = true;
    } else {
      clearError(email);
    }

    if (hasErrors) {
      event.preventDefault();
    }
  });

  function showError(element, message) {
    clearError(element);

    const errorDiv = document.createElement("div");
    errorDiv.className = "error-message-valid";
    errorDiv.textContent = message;
    errorDiv.style.color = "red";
    errorDiv.style.fontSize = "14px";
    errorDiv.style.fontWeight = "bold";
    errorDiv.style.marginTop = "5px";
    errorDiv.style.backgroundColor = "transparent";

    element.parentNode.appendChild(errorDiv);
    element.style.borderColor = "none";
  }

  function clearError(element) {
    const errorDiv = element.parentNode.querySelector(".error-message-valid");
    if (errorDiv) {
      element.parentNode.removeChild(errorDiv);
    }

    element.style.borderColor = "inherit";
  }

  document
    .querySelectorAll(".message-popup-close, .message-popup-overlay")
    .forEach((element) => {
      element.addEventListener("click", () => {
        document.querySelector(".message-popup-overlay").style.display = "none";
        document.querySelector(".message-popup").style.display = "none";
      });
    });
});
