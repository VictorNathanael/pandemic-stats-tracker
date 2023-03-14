const optionCountries = document.querySelectorAll('option');
const selectedValue = localStorage.getItem('optionValue');
localStorage.removeItem('optionValue');

const toDisable = optionCountries.length / 2;

for (let i = 0; i < optionCountries.length; i++) {
    if (optionCountries[i].value === selectedValue) {
        optionCountries[i].selected = true;
        optionCountries[i + toDisable].disabled = true;
        break;
    }
}
