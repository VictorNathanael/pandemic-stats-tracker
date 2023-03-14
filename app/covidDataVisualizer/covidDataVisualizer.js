const btnMortalityRate = document.getElementById('btnMortalityRate');
const paisSelect = document.getElementById('selectCountry');

btnMortalityRate.addEventListener('click', () => {
    const selectedOption = paisSelect.options[paisSelect.selectedIndex];
    if (selectedOption.value !== '') {
        const optionValue = selectedOption.value;
        localStorage.setItem('optionValue', optionValue);
        window.location.href =
            'http://localhost/app/covidDataCompare/covidDataCompare.php';
    } else {
        alert('Por favor, selecione um país.');
    }
});
