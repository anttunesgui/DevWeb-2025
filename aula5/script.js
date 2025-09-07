function calcula(){
    let resultado = document.getElementById('resultado');
    let n1 = parseInt(document.getElementById('n1').value);
    let n2 = parseInt(document.getElementById('n2').value);
    let result =0;
    const operacao = document.getElementById('operacao').value;
    if (operacao == 1){
        result = n1*n2;
    }else if (operacao == 2){
        result = n1/n2;
    }else if (operacao == 3){
        result = n1+n2;
    }else{
        result = n1-n2;
    }
    
    resultado.classList.remove('negativo','positivo','nulo','result_zero');
    if ((operacao == 2) && (n2 == 0)){
        resultado.innerHTML = 'Erro, divisão por 0';
        resultado.classList.add('result_zero');
    }else{
        resultado.innerHTML = result;
        if (result < 0){
            resultado.classList.add('negativo');
        }else if (result > 0){
            resultado.classList.add('positivo');

        }else{
            resultado.classList.add('nulo');
        }
    }
}