<?php defined('ABSPATH') || exit;
/**
 * Plugin Name:          Calculadora de Produtos por metro
 * Description:          Faz o calculo de material necessário para compra do produto, conforme as necesidades do cliente
 * Author:               Ricardo Leandro
 * Author URI:           https://orangepmm.com.br
 * Version:              1.0
 * Text Domain:          calculadora
 */

if(!function_exists('add_action')){
    exit;
}

include('includes/activate.php');
include('includes/enqueue.php');


//Setup
define('CALCULADORA_PLUGIN_URL', __FILE__);
register_activation_hook(CALCULADORA_PLUGIN_URL, 'st_calculadora');

function calc_material_selecionado() { 


    if( has_term( array( 'papel-de-parede' ), 'product_cat', get_the_ID() ) ) :
                    
                
			
    
    ?>

<div id="calcMat">
	<div class="header_calc">
		<h5>CALCULE A QUANTIDADE DE ROLOS NECESSÁRIOS</h5>
	</div>
	<div class="bodyCalc">
        <div class="valuesFields">
            <p>Informe a medida da sua parede, em metros</p>
            <div class="row">
                <div class="altura">
                    <Label>Altura (mt)</Label>
                    <input id="n1" type="number" placeholder="0.00" data-mask="0.00" step="0.01" min="0" max="3.00" onkeypress="return event.charCode >= 46 && event.charCode <= 57 && event.charCode != 47"/>
                </div>
            </div>
            <div class="row">
                <div class="largura">
                    <Label>Largura (mt)</Label>
                    <input id="n2" type="number" placeholder="0.00" data-mask="0.00" onkeypress="return event.charCode >= 46 && event.charCode <= 57 && event.charCode != 47"/>    
                </div>     
            </div>  
            <button class="buttonCalc alt">CALCULAR</button>
        </div>
    </div>
</div>
<div class="optionsRolls">
<div class="header_calc">
		<h5>ESCOLHA A OPÇÃO DE MATERIAL DESEJADO</h5>
	</div>
    <div class="optionsFields">
        <div class="row">
            <input type="radio" id="liso" name="rolo" value=""> 
            <label for="Adesivo Liso">Adesivo Liso: <span class="liso result"></span>Rolos</label>
        </div>
        <div class="row">
            <input type="radio" id="linho" name="rolo" value="">
            <label for="Adesivo Texturizado Linho">Adesivo Texturizado Linho: <span class="linho result"></span>Rolos</label> 
        </div>
        <div class="row">
            <input type="radio" id="arenito" name="rolo" value="">
            <label for="Adesivo Texturizado Arenito">Adesivo Texturizado Arenito: <span class="arenito result"></span>Rolos</label>
        </div>
        <div class="row">
            <input type="radio" id="artistico" name="rolo" value="">
            <label for="Adesivo Texturizado Artístico">Adesivo Texturizado Artístico: <span class="artistico result"></span>Rolos</label>
        </div>
        <div class="row">
            <input type="radio" id="rustico" name="rolo" value="">
            <label for="Adesivo Texturizado Rústico">Adesivo Texturizado Rústico: <span class="rustico result"></span>Rolos</label>
        </div>
        <div class="row">
            <input type="radio" id="convencional" name="rolo" value="">
            <label for="Papel Convencional Linho">Papel Convencional Linho: <span class="convencional result"></span>Rolos</label>
        </div>
        <div class="row">
            <input type="radio" id="couro" name="rolo" value="">
            <label for="Papel Convencional Couro:">Papel Convencional Couro: <span class="couro result"></span>Rolos</label>
        </div>
    </div>
</div>

<?php 
	
    endif;


};

add_action( 'woocommerce_before_variations_form', 'calc_material_selecionado', 1, 0 );