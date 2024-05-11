// Constants for DOM elements
const balanceDisplay = document.getElementById("balance");
const incomeDisplay = document.getElementById("money-plus");
const expenseDisplay = document.getElementById("money-minus");
const list = document.getElementById("list");
const form = document.getElementById("form");
const textInput = document.getElementById("text");
const amountInput = document.getElementById("amount");

// Get transactions from local storage or initialize as empty array
const storedTransactions = JSON.parse(localStorage.getItem('transactions'));
let transactions = storedTransactions !== null ? storedTransactions : [];

// Function to add a transaction
function addTransaction(e) {
    e.preventDefault();
    if(textInput.value.trim() === '' || amountInput.value.trim() === '') {
        alert('Please add text and amount');
    } else {
        const transaction = {
            id: generateID(),
            text: textInput.value,
            amount: +amountInput.value
        };

        transactions.push(transaction);

        addTransactionDOM(transaction);
        updateValues();
        updateLocalStorage();
        textInput.value = '';
        amountInput.value = '';
    }
}

// Function to generate a random ID for transactions
function generateID() {
    return Math.floor(Math.random() * 1000000000);
}

// Function to add transaction to the DOM list
function addTransactionDOM(transaction) {
    const sign = transaction.amount < 0 ? "-" : "+";
    const item = document.createElement("li");

    item.classList.add(transaction.amount < 0 ? "minus" : "plus");

    item.innerHTML = `
      ${transaction.text} <span>${sign}${Math.abs(transaction.amount)}</span>
      <button class="delete-btn" onclick="removeTransaction(${transaction.id})">x</button>
      `;
    list.appendChild(item);
}

// Function to update balance, income, and expense displays
function updateValues() {
    const amounts = transactions.map(transaction => transaction.amount);
    const total = amounts.reduce((acc, item) => (acc += item), 0).toFixed(2);
    const income = amounts.filter(item => item > 0).reduce((acc, item) => (acc += item), 0).toFixed(2);
    const expense = (amounts.filter(item => item < 0).reduce((acc, item) => (acc += item), 0) * -1).toFixed(2);

    balanceDisplay.innerText = `$${total}`;
    incomeDisplay.innerText = `$${income}`;
    expenseDisplay.innerText = `$${expense}`;
}

// Function to remove a transaction by ID
function removeTransaction(id) {
    transactions = transactions.filter(transaction => transaction.id !== id);
    updateLocalStorage();
    init();
}

// Function to update local storage with current transactions
function updateLocalStorage() {
    localStorage.setItem('transactions', JSON.stringify(transactions));
}

// Function to initialize the application
function init() {
    list.innerHTML = "";
    transactions.forEach(addTransactionDOM);
    updateValues();
}

// Initialize the application
init();

// Event listener for form submission
form.addEventListener('submit', addTransaction);
