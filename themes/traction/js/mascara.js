//faz com que a primeira linha so seja executada quando a pagina for inteira carregada.
        $(document).ready(function(){
            //para id use # e para classe .
            $('#cep').mask("00.000-000");
            $('#telefone').mask("(00) 00000 - 0000");
            $('#datas').mask("00/00/0000");
            $('#valor').mask("#.##0,00", {reverse: true});
            $('#cpf').mask("000.000.000-00");
            $("#apartamento").keyup(function() {
                this.value = ("000" + this.value).slice(-3)
            });
            //Placa: AAA - 0000
            var tradutor = {
                'translation' : {
                    A : {
                        pattern: /[A-Za-z]/
                    },
                    X :{
                        pattern: /[A-Za-z0-9]/
                    },
                    T :{
                        pattern: /[A-Fa-f0-9]/
                    }
                }
            };
            $('#pontoEletronico').mask("TTTTTTTT", tradutor);
            $('#tag').mask("TTTTTTTT", tradutor);
            $("#placa").mask("AAA - 0X00", tradutor);
        });