// Obtenha o elemento select
const select = document.getElementById('pais');

if (localStorage.getItem('pais')) {
    select.value = localStorage.getItem('pais');
}

select.addEventListener('change', function () {
    localStorage.setItem('pais', this.value);
});
