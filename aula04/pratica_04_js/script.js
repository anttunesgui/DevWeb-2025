function verifica_user(){
    const classe =  document.getElementById('senha');
    let user = document.getElementById('user').value;
    let pass = document.getElementById('pass').value;
    if ((user =='user') && (pass == 'pass')){
        classe.classList.remove('senha_error');
        window.alert('Usuario logado com sucesso!!');
    }else{
        classe.classList.add('senha_error'); 
        window.alert('Usuario ou senha incorretos');  
    }
}