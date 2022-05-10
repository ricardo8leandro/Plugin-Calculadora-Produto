jQuery(document).ready(function($){


    $('.header_calc').on('click', function(){
        $('.bodyCalc').toggle();
    });

    var altura = '';
    var largura = '';
    var areaTotal = '';
    var qtRolos1m = '';        //1mt
    var qtRolos12m = '';        //1.2mt


    $('.optionsRolls').hide();

    $("#n1").on('keyup',function(){

        altura = $("#n1").val();
        

        
        if(altura > 3.00){

            alert("Altura não pode ser maior que 3.00mt, informe um valor abaixo disso ou entre em contato conosco!");
            $(this).val('');
            $('body').find('#ht-ctc-chat').trigger('click');

        }else{

            $(".buttonCalc").on('click',function(e){
                e.preventDefault();

                altura = parseFloat($("#n1").val()).toFixed(2);
                largura = parseFloat($("#n2").val()).toFixed(2);
                

                if((largura != '' && largura != 0) && (altura != '' && altura != 0)){
                    
                    areaTotal = (altura * largura).toFixed(2);
                    console.log(areaTotal + " AreaTotal");

                    qtRolos1m = (largura / 1.00);
                    qtRolos12m = (largura / 1.20);

                    var resultado1m = Math.ceil(qtRolos1m);
                    var resultado12m = Math.ceil(qtRolos12m);

                    console.log(resultado1m + " 12m");
                    console.log(resultado12m + " 1m");
                    $('.optionsRolls').show();
                    $('.liso').text(resultado1m + "  ");
                    $('.linho').text(resultado12m + "  ");
                    $('.arenito').text(resultado12m + "  ");
                    $('.artistico').text(resultado12m + "  ");
                    $('.rustico').text(resultado12m + "  ");
                    $('.convencional').text(resultado1m + "  ");
                    $('.couro').text(resultado12m + "  ");
                    $('#liso').val(resultado1m);
                    $('#linho').val(resultado12m);
                    $('#arenito').val(resultado12m);
                    $('#artistico').val(resultado12m);
                    $('#rustico').val(resultado12m);
                    $('#convencional').val(resultado1m);
                    $('#couro').val(resultado12m);

                    

                }else{

                    alert('Informe valores válidos nos campos!');

                }

            });

        }

    });

    
        
        $('.optionsRolls input').each(function(index, el){
            $(this).on('change', function(){
                if($(this).is(':checked')){
                    var valor = $(this).val();
                    var id = $(this).attr('id');
                    
                    var optionButton = $('ul li.variable-item').eq(index);
                    optionButton.trigger('click');

                    $('.input-text.qty.text').val(valor);

                }
            });                
        });


    
    });
    