var opcao = "default";
function opcaoSelecionada(valor){
    opcao = valor;
}

function fazPost(body){

    jQuery.ajax({
            url: 'https://octo.hk/sKUHeHE0HqtZWxJmAqQR', 
            type: 'POST',
            data: body,
            dataType: 'json',
            contentType: "application/json",
            success: function (response) {
                console.log(response); 
                window.location.href='/obrigado';              
            }
        });

}

function cadastraUsuario(){
    event.preventDefault()
    nome = document.getElementById("nome").value;
    email = document.getElementById("email").value;
    telefone = document.getElementById("telefone").value;
    data = document.getElementById("data").value;
    if(telefone.length!=17 || nome.length<3 || !validateEmail(email) || data.length<10 || opcao == 'default'){
        jQuery('#resposta').html('Preencha todos os campos com dados válidos.').addClass('text-danger text-center');
    }
    else{
        telefone = telefone.replace('(','').replace(')','').replace('-','').replace(/\s/g, '');
        body={
            "name": String(nome),
            "email": String(email),
            "phone": String(telefone),
            "birthday": String(data),
            "role": String(opcao)
        }
        body = JSON.stringify(body);
        fazPost(body);
        console.log(body);
    }
}

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }
