<?php
echo '   <div class="helper">
<!-- start query     -->
<form action="">
<div class="container">
    <div class="item-a">
        <!-- query -->
        <div id="radios">
        <label class="radio radio-gradient">
            <span class="radio__input">
              <input class="Kuiva" id="Kuiva" value="Kuiva" type="radio" name="radio">
              <span class="radio__control"></span>
            </span>
            <span class="radio__label">Kuiva</span>
          </label>
          <!-- <button> -->
          <label class="radio radio-before">
            <span class="radio__input">
            <input  id="Atooppinen" value="Atooppinen" type="radio" name="radio">
              <span class="radio__control"></span>
            </span>
            <span class="radio__label">Atooppinen/allerginen iho</span>
          </label>
          <!-- <button> -->
          <label class="radio radio-gradient">
            <span class="radio__input">
              <input  id="Rasvoittuva" value="Rasvoittuva" type="radio" name="radio">
              <span class="radio__control"></span>
            </span>
            <span class="radio__label">Rasvoittuva iho</span>
          </label>
          <!-- <button> -->
          <label class="radio radio-gradient">
            <span class="radio__input">
              <input  id="Normaali" value="Normaali"  type="radio" name="radio">
              <span class="radio__control"></span>
            </span>
            <span class="radio__label">Normaali iho</span>
          </label>
          <!-- <button> -->
          <label class="radio radio-gradient">
            <span class="radio__input">
              <input   id="Sekalainen" value="Sekalainen" type="radio" name="radio">
              <span class="radio__control"></span>
            </span>
            <span class="radio__label">Sekalainen iho</span>
          </label>
          
          <!-- <button> -->
        </div>
    </div>
    <div class="item-b">
        <!-- image -->
    </div>
    <div class="item-c">
        <!-- tips -->
        <div class="tip" id="hidden1">
                <h2>
                Yleisin syy kuivaan ihoon:
                </h2>
                <p>
                Kuiva iho johtuu usein ihon vitamiinin puutoksesta sek?? kuivan tai kylm??n ilman tekem??st?? vauriosta. 
                </p>
        </div>
        <!-- tip2-->
        <div class="tip" id="hidden2">
            <h2>
                Atoopikolle tiedoksi:
                </h2>
                
                <p>
                    Atooppiselle/allergiselle iholle suosittelemme yksinkertaisia huolellisesti puhdistettuja luonnollisia raaka-aineita. kuten Jojoba ??ljy?? tai shea-voita. 
                    Allergioita on monia, usein tehokkaasti kosteutta v??litt??v?? glyseriini ei sovi allergikolle. 
                </p>
    </div>
    <!-- tip3 -->
    <div class="tip" id="hidden3">
        <h2>
            Mit?? rasvoittuva iho tarvitsee?
        </h2>
        
        <p>
            Rasvoittuvalle iholle kaivataan usein kevyemp???? ja ihoa puhdistavia tuotteita. 
            Rasvoittuvan ihon hoidossa on my??s eritt??in t??rke???? huolellinen kasvojen pesu ennen voiteiden laittoa. 
        </p>
</div>
<!-- tip4 -->
<div class="tip" id="hidden4">
    <h2>
        Normaali ihokin kaipaa hoitoa
    </h2>
    
    <p>
    Normaali iho kaipaa usein puhtia ja hehkua vitamiinipitoisista tuotteista. 
    Normaalillakin iholla voi olla kuivalla ilmalla ongelmansa, jolloin usein valinta kannattaa kohdistaa kosteuttaviin ja ravinnerikkaisiin voiteisiin ja ??ljyihin.
    </p>
</div>
<!-- tip5 -->
<div class="tip" id="hidden5">
    <h2>
        Sekalainen iho ja mit?? se tarkoittaa
        </h2>
        
        <p>
        Sekaiholla tarkoitetaan sit?? ett?? se voi joskus olla kuiva, joskus rasvoittuva, ja saatat olla esim. glyseriini allergikko. 
        Valitse tuotteesi t??m??nhetkisen tilanteesi mukaan, ottaen allergiat huomioon. 
        </p>
</div>



</div>
    <div class="item-d">
        4
    </div>
</div>
<div>
<div >
    <div >
    <input  id="button" type="button" value="next">
    </div>
</form>
</div>
</div>

<!-- end query -->

</div>
<!-- radiobutton check -->
<!-- kun klikkaa nakyy vihje hidden div -->
<script>
// luodaan Array
// const tipit =
// ["#Kuiva",
// "#Atooppinen",
// "#Rasvoittuva",
// "#Normaali",
// "#Sekalainen"
// ]
// // tehaan functio joka piilottaa
// function piilota() {
//     $(tipit[0]).hide();    
//     console.log(tipit[0]);
//     $(tipit[1]).hide();    
//     $(tipit[2]).hide();    
//     $(tipit[3]).hide();    
//     $(tipit[4]).hide();    
// }
// // ajetaan foreach Arraylle
// // tipit.forEach(piilota);


$( "#Kuiva" ).on( "click", function() {
    $("#hidden5").hide();
    $("#hidden4").hide();
    $("#hidden3").hide();
    $("#hidden2").hide();
    $("#hidden1").fadeIn();
    });
$( "#Atooppinen" ).on( "click", function() {
    $("#hidden5").hide();
    $("#hidden4").hide();
    $("#hidden3").hide();
    $("#hidden2").fadeIn();
    $("#hidden1").hide();
});
$( "#Rasvoittuva" ).on( "click", function() {
    $("#hidden5").hide();
    $("#hidden4").hide();
    $("#hidden3").fadeIn();
    $("#hidden2").hide();
    $("#hidden1").hide();
});
$( "#Normaali" ).on( "click", function() {
    $("#hidden5").hide();
    $("#hidden4").fadeIn();
    $("#hidden3").hide();
    $("#hidden2").hide();
    $("#hidden1").hide();
});
$( "#Sekalainen" ).on( "click", function() {
    $("#hidden5").fadeIn();
    $("#hidden4").hide();
    $("#hidden3").hide();
    $("#hidden2").hide();
    $("#hidden1").hide();
});
</script>';

?>