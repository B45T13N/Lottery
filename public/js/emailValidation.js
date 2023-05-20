function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

const errorMessage = document.querySelector("#error-message");
const emailInput = document.querySelector("#email");
const submitButton = document.querySelector("button[type='submit']");

emailInput.addEventListener( "input",
    () => {
        if (!validateEmail(emailInput.value)) {
            errorMessage.style.display = "block";
            submitButton.disabled = true;
            submitButton.classList.add("cursor-not-allowed");
        }
        else {
            errorMessage.style.display = "none";
            submitButton.disabled = false;
            submitButton.classList.remove("cursor-not-allowed");
        }
    }
)
