function validacada() {
    var nome = document.formcad.txt_nome.value;
    var senha = document.formcad.txt_senha.value;
    var email = document.formcad.txt_email.value;

    if (nome == '') {
        alert('Preencha com seu nome');
        formcad.txt_nome.focus();

        return false;
    }

    if (senha == '') {
        alert('Preencha com uma senha');
        formcad.txt_nome.focus();

        return false;
    }

}