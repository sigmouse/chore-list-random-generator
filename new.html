const SHEET_ID = '1-T95_BJRz3Vm2ffio4-ib0F5JKjlMz-VsPRxau0nuo4'; // Replace with your actual Google Sheet ID
const API_KEY = 'AIzaSyDbuG7m8dq7FhHzMBG4M48Z6mC9TSE9wiI'; // Replace with your actual API key
const RANGE = 'Sheet1!A:B'; // Adjust to your sheet name and column range

async function fetchChore(randomNumber) {
    const url = `https://sheets.googleapis.com/v4/spreadsheets/${SHEET_ID}/values/${RANGE}?key=${API_KEY}`;
    try {
        const response = await fetch(url);
        const data = await response.json();
        const rows = data.values;

        // Find the chore with the matching ID
        const chore = rows.find(row => parseInt(row[0]) === randomNumber);
        if (chore) {
            document.getElementById('result').innerText = `Your chore is: ${chore[1]}`;
        } else {
            document.getElementById('result').innerText = `No chore found for ID: ${randomNumber}`;
        }
    } catch (error) {
        console.error('Error fetching chore:', error);
        document.getElementById('result').innerText = 'Failed to load chore.';
    }
}

// Example usage:
const randomNumber = Math.floor(Math.random() * 40) + 1; // Replace with your actual random number generator
fetchChore(randomNumber);
