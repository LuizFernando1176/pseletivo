// valida cpf
function TestaCPF(elemento) {
    cpf = elemento.value;
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf === '') {
        //alert('CPF inválido ' + cpf);
        return elemento.style = 'box-shadow:0px 0px 4px #FF0000 ';
    }
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length !== 11 ||
            cpf === "00000000000" ||
            cpf === "11111111111" ||
            cpf === "22222222222" ||
            cpf === "33333333333" ||
            cpf === "44444444444" ||
            cpf === "55555555555" ||
            cpf === "66666666666" ||
            cpf === "77777777777" ||
            cpf === "88888888888" ||
            cpf === "99999999999\n{") {
        alert('CPF inválido: ' + cpf);
        return elemento.style = 'box-shadow:0px 0px 4px #FF0000';
    }
    // Valida 1o digito 
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev === 10 || rev === 11)
        rev = 0;
    if (rev !== parseInt(cpf.charAt(9))) {
        alert('CPF inválido: ' + cpf);
        return elemento.style = 'box-shadow:0px 0px 4px #FF0000';
    }
    // Valida 2o digito 
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev === 10 || rev === 11)
        rev = 0;
    if (rev !== parseInt(cpf.charAt(10))) {
        alert('CPF inválido: ' + cpf);
        return elemento.style = 'box-shadow:0px 0px 4px #FF0000';
    }

    return elemento.style = 'box-shadow:0px 0px 4px  blue ';
}


//adiciona mascaras
function mascara(campo) {
    if (campo.id === 'Telefone') {
        if (campo.value.length === 0) {
            campo.value = '(' + campo.value;
        }
        if (campo.value.length === 3) {
            campo.value = campo.value + ') ';
        }

        if (campo.value.length === 9) {
            if (campo.value[5] < 6) {
                campo.value = campo.value + '-';
            }
        } else if (campo.value.length === 10) {
            campo.value = campo.value + '-';
        }
    } else if (campo.id === 'CPF') {
//        if (campo.value.length === 14) {
//            document.getElementById("Nome").focus();
//        }
        if (campo.value.length === 3) {
            campo.value = campo.value + '.';
        }
        if (campo.value.length === 7) {
            campo.value = campo.value + '.';
        }

        if (campo.value.length === 11) {
            campo.value = campo.value + '-';
        }
    } else if (campo.id === 'cep') {
        if (campo.value.length === 5) {
            campo.value = campo.value + '-';
        }
    }
}

// busca cep

$(document).ready(function () {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep !== "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});
//mostrar alerta
function mostraAlerta() {
    $("#alerta").fadein(500);
    $("#alerta").fadeout(5000);
}

//imprimir
function imprimir() {
    window.print();
}