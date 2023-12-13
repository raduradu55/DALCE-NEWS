<!DOCTYPE html>
<html>

<head>
  <title> DALCE-NEWS </title>
</head>



<body>

<?php
  function menu(){
?>
  <div>
      <a href="index.php?sezione=info">
        <h2 class="menu1">INFO</h2>
      </a>
      <a href="index.php?sezione=storia">
        <h2 class="menu2">LA STORIA</h2>
      </a>
      <a href="index.php?sezione=interviste">
        <h2 class="menu3">INTERVISTE</h2>
      </a>
      <a href="index.php?sezione=news">
        <h2 class="menu4">NEWS</h2>
      </a>
    </div>
    <?php
  }

?>

  <!-- sfondo -->
  <div>
    <img id="nuvola3" src="immagini/nuvola3.png">
    <img id="luna" src="immagini/roba_spazio/luna.png">
    <img id="ufo1" src="immagini/roba_spazio/ufo1.png">
    <img id="pianeta1" src="immagini/roba_spazio/pianeta1.png">
  </div>

  <!-- sezione iniziale -->
  <div>
    <img class="nuvola1" src="immagini/nuvola1.png">
    <img class="mano_sx" src="immagini/mano_sinistra.png">
    <img class="mano_dx" src="immagini/mano_destra.png">
    <h1 class="titolo"> DALCE-NEWS </h1>
  </div>

  <!-- menù -->
  <center>
  <?php
    menu();
    ?>


    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />

  </center>

  <?php

  if(isset($_GET["sezione"])){
  //INFO
  if($_GET["sezione"]=="info"){
    ?>




    <?php
  }


    //STORIA
  if($_GET["sezione"]=="storia"){
    ?>



  <center>


    <div id="container">

      <div id="la_storia">
        <h2 style="text-shadow: 3px 3px 5px black, 0 0 30px #867e23, 0 0 10px #ffffff">--# LA STORIA #-- </h2>
        <p> - - </p>
      </div>

    </div>


    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />

</center>
<?php

  }


  //INTERVISTE
  if($_GET["sezione"]=="interviste"){
    ?>
  <div id="container">
<center>
<div id="interviste">
<h2 style="text-shadow: 3px 3px 5px black, 0 0 30px #d06767, 0 0 10px #ffffff">--# INTERVISTE #-- </h2>

<div>
  <!-- ################################# -->
  <p> <b> Intervista al rappresentante di instituto Leonardo Ariton: </b> </p>

  <div class="grid-container">
    <div class="grid-item">
      <b> D </b>: Ariton, come mai hai deciso di candidarti? <br>
    </div>
    <div class="grid-item">
      <b> Ariton</b>:  Beh, più che altro è stato un mio pensiero, voglio aiutare tute le persone dato che sento una grande
      disparità tra sede centrale e sede staccata, non lascio nessuno indietro.<br>
    </div>
    <div class="grid-item">
      <b> D </b>: Eri sicuro di vincere le elezioni?<br>
    </div>
    <div class="grid-item">
      <b> Ariton </b>: Oddio, all'inizio non lo ero perchè nella mia testa pensavo tanto di non venire eletto e alla 
      fine lo davo per scontato, era tutto risate e giochini ma dopo ho visto i risultati e ancora faccio fatica a crederci, però 
      mi sto dando da fare in questo momento<br>
    </div>
    <div class="grid-item">
      <b> D </b>: Quali sono i tuoi prossimi obiettivi? <br>
    </div>
    <div class="grid-item">
      <b> Ariton </b>: Allora, prima di tutto la mia idea è quella di mantenere le promesse che ho fatto in sede elettorale, poi
      pensavo anche di organizzare l'assemblea di dicembre, di cui non posso dire tutti quanti i dettagli perchè stiamo 
      ancora in fase di progettazione, ma la mia idea era un po più modulare: il biennio poteva partecipare ad un torneo 
      <br>
    </div>	
  </div>

  <!-- ################################# -->
  <div>
    <p> <b> Intervista alla bidella Mara: </b> </p>

    <div class="grid-container">
      <div class="grid-item">
        <b> D </b>: Buongiorno, come si chiama? <br>
      </div>
      <div class="grid-item">
        <b> Mara </b>: Buongiorno ragazzi, io mi chiamo Mara. <br>
      </div>
      <div class="grid-item">
        <b> D </b>: Quali sono i suoi hobby? <br>
      </div>
      <div class="grid-item">
        <b> Mara </b>: Allora, a me piace camminare disegnare e cucinare. <br>
      </div>
      <div class="grid-item">
        <b> D </b>: Come mai ha scelto questa scuola? <br>
      </div>
      <div class="grid-item">
        <b> Mara </b>: Ho voluto provare un'esperienza diversa dalla scuola precedente in cui
        lavoravo,
        una sorta di percorso e di cammino differente. <br>
      </div>
      <div class="grid-item">
        <b> D </b>: E' soddisfatta della tua scelta? <br>
      </div>
      <div class="grid-item">
        <b> Mara </b>: Si, molto. <br>
      </div>
      <div class="grid-item">
        <b> D </b>: Cosa ne pensa degli studenti di questa scuola? <br>
      </div>
      <div class="grid-item">
        <b> Mara </b>: Molto educati, sono contenta e soddisfatta. <br>
      </div>
    </div>

  </div>
</div>
</div>


<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />

</center>


    <?php
  }



  //NEWS
  if($_GET["sezione"]=="news"){
    ?>



    <?php
  }
  }


  ?>
  </body>
</html>