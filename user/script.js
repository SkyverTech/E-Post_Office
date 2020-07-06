/**Login Button Event Handler**/
const verifyBtn = document.getElementById("verify-btn");
verifyBtn.addEventListener("click", function() {
    const loginPage = document.getElementById("login-page");
    loginPage.style.display = "none";

    const transactionPage = document.getElementById("transaction-page");
    transactionPage.style.display = "block";
});

/**Deposit Button Event Handler**/

const depositBtn = document.getElementById("deposit-btn");
depositBtn.addEventListener("click", function() {
    const depositNumber = getInputNumber("deposit-amount");

    updateSpanText("current-deposit", depositNumber);

    updateSpanText("current-balance", depositNumber);
});

/**Withdraw Button Event Handler**/

const withdrawBtn = document.getElementById("withdraw-btn");
withdrawBtn.addEventListener("click", function() {
    const withdrawNumber = getInputNumber("withdraw-amount");

    updateSpanText("current-withdraw", withdrawNumber);
    updateSpanText("current-balance", -1 * withdrawNumber);
});

function updateSpanText(id, addedNumber) {
    const currentText = document.getElementById(id).innerText;
    const currentNumber = parseFloat(currentText);
    const total = addedNumber + currentNumber;
    document.getElementById(id).innerText = total;
}

function getInputNumber(id) {
    const inputAmount = document.getElementById(id).value;
    const inputNumber = parseFloat(inputAmount);
    document.getElementById(id).value = "";
    return inputNumber;
}