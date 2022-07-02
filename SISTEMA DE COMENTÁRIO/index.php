<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script1.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Permutando DEV 1</title>
</head>

<body>

 
     <div class="divMasterClass">
        <div class="mrgB">
            <h1>FESTA ANOS 80</h1>
            <?php  $festa = 1;  ?>
        </div>
        
        <div class="opns" id="comments_1">
            <div><b>João Fernando <span class="tx12">(12/09/2017 19:01)</span>:</b> Acho essa festa muito mais animada, voto nessa!</div>
            <div><b>Mariana Gomes <span class="tx12">(12/09/2017 19:03)</span>:</b> Amo festa anos 80. Me lembra uma época boa da minha vida!</div>
            <?php include("ajax/envia_comentario.php"); ?>
        </div>

        <form class="formSend" id="formComments1">
            <div>
                Deixe sua opinião:
            </div>
            <div><label for="autor">Nome*:</label> <input type="text" name="autor" id="autor" class="autor" value="" /></div>
            <div><label for="opniao">Opinião*:</label> <textarea maxlength="255" type="text" name="opiniao" id="opiniao" class="opiniao"></textarea></div>
            <div><input style="display:none;" type="text" name="id_festa" id="id_festa" class="id_festa" value="<?php echo $festa;?>" /></div>
                    <div class="txalc">
                <input type="submit" name="enviar" class="enviar" id="enviar1" value="Envia" />
            </div>
        </form>
    </div> 
 




 
    <div class="divMasterClass">
        <div class="mrgB">  
                  
            <h1>BAILE DO HAVAII</h1>
            <?php  $festa = 2;  ?>
        </div>

        <div class="opns" id="comments_2">
            <div><b>Felipe Darly <span class="tx12">(12/09/2017 19:03)</span>:</b> Se rolar piscina prefiro essa festa!</div>
            <?php include("ajax/envia_comentario.php"); ?>
        </div>

        <form class="formSend" id="formComments2">
            <div>
                Deixe sua opinião:
            </div>
            <div><label for="autor">Nome*:</label> <input type="text" name="autor" id="autor" class="autor" value="" /></div>
            <div><label for="opniao">Opinião*:</label> <textarea maxlength="255" type="text" name="opiniao" id="opiniao" class="opiniao"></textarea></div>
            <div><input style="display:none;" type="text" name="id_festa" id="id_festa" class="id_festa" value="<?php echo $festa;?>" /></div>
            
            
            <div class="txalc">
                <input type="button" name="enviar" class="enviar" id="enviar2" value="Enviar" />
            </div>
        </form>
    </div>


    
    <div class="divMasterClass">
        <div class="mrgB">
       
            <h1>FESTA A FANTASIA</h1>
            <?php  $festa = "3";  ?>
        </div>

        <div class="opns" id="comments_3">
            <div><b>George Tablas <span class="tx12">(12/09/2017 19:04)</span>:</b> Já tô com minha fantasia de superman preparada!</div>
            <div><b>Cibele Dias <span class="tx12">(12/09/2017 19:04)</span>:</b> Posso ir com um Cosplay da Lara Croft! Woo-rooo!</div>
            <?php include("ajax/envia_comentario.php"); ?>

        </div>

        <form class="formSend" id="formComments3">        
            <div>
                Deixe sua opinião:
            </div>
            <div><label for="autor">Nome*:</label> <input type="text" name="autor" id="autor" class="autor" value="" /></div>
            <div><label for="opniao">Opinião*:</label> <textarea maxlength="255" type="text" name="opiniao" id="opiniao" class="opiniao"></textarea></div>
            <div><input style="display:none;" type="text" name="id_festa" id="id_festa" class="id_festa" value="<?php echo $festa;?>" /></div>
           
            <div class="txalc">
                <input type="button" name="enviar" class="enviar" id="enviar3" value="Enviar" />
            </div>
        </form>
    </div> 


</body>

</html>