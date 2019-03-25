<?php
$zone_calcul = 0;
$cancel_mem = 0;
$cancel_button = 0;
?>
<form>
<h3>Calculatrice basique</h3>
<textarea style="resize:none" name="zone_result" cols="50" rows="5"><?php echo strip_tags($zone_calcul); ?></textarea>
</form>
<form action="calculatrice.php" method="post">
    <!--  -->
    <button type="button" name="erase_button" value="erase_mem"> Erase </button>
    <button type="button" name="cancel_button" value="cancel_mem"> Cancel </button><br>
    <input type="text" name="zone_calcul" value="" /><?php echo $zone_calcul; ?><br>
    <button type="button" name="add_button" value="<?php echo $zone_calcul;?>"> + </button>
    <button type="button" name="rem_button" value="<?php echo $zone_result;?>"> - </button>
    <button type="button" name="mul_button" value="<?php echo $mul_button;?>"> x </button>
    <button type="button" name="div_button" value="<?php echo $div_button;?>"> / </button>
    <button type="button" name="equ_button" value="<?php echo $equ_button;?>"> = </button><br>
    
    <textarea style="resize:none" cols="40" rows="1" name="visual_entry">
    
    <?php echo $zone_calcul; ?>
    </textarea>
</form>
<!-- <?php
if ($_POST.cancel_button.value == cancel_mem) {
    $zone_calcul = 400;
    echo '$_POST.cancel_button = null';
};
?>
 -->


<!-- 
if (button_pressed == + , - , * , / , = , "Erase" , "Cancel" ) {
    if (button_pressed == '=' OR button_pressed == "enter") {
        resolution operation (mem) [(op_value)] (stock);
        stockage dans (mem) du resultat;
        retour affichage de (mem); // affichage de op_value ?
    }
    else if (button_pressed == "Cancel") {
        remise à zéro de l'affichage et de (stock);
    }
    else if ($_POST.cancel_button == cancel_mem) {
        $zone_calcul = 0;
        $_POST.cancel_button = null;
    }
    else if (op_value != null) {
        resolution de l'operation et stockage dans (mem) // (mem) += (mem)([op_value]=)(stock)
        stockage de l'operateur (op_value); // op_value = button_pressed
    }
    
} -->