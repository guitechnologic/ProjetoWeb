const calcular = document.getElementById('calcular');

function calcularArea () {
    const base      = document.getElementById('base').value;
    const altura    = document.getElementById('altura').value;
    const resultado = document.getElementById('resultado');

    if (base !== '' && altura !== '' ) {

        const area = ( base * altura ).toFixed(2);

            resultado.textContent = `A área do quadrado é ${area}`;

        } else {
            resultado.textContent = 'preencha todos os campos';
        }

    }

calcular.addEventListener('click', calcularArea);