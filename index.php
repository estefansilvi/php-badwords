<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <h1>
        <?php

        $titolo = 'PARLIAMO DI QUALCOSA';

        echo $titolo ;
        ?>

      </h1>

      <!-- dopo aver sritto un testo, calcolo la lunghezza della stringa tramite la funzione strlen -->

      <h4 style="text-decoration: underline;">
        <?php
        $sottotitoloUno = 'Prima parte dell\'esercizio:';
        echo $sottotitoloUno;
        ?>
      </h4>
      <p>
        <?php

        $contenuto = 'Il piccolo principe ritornò l’indomani.
        ” Sarebbe stato meglio ritornare alla stessa ora”, disse la volpe.
        ” Se tu vieni, per esempio, tutti i pomeriggi, alle quattro, dalle tre io comincerò ad essere felice. Col
        passare dell’ora aumenterà la mia felicità.
        Quando saranno le quattro, incomincerò ad agitarmi e ad inquietarmi; scoprirò il prezzo della felicità!
        Ma se tu vieni non si sa quando, io non saprò mai a che ora prepararmi il cuore… Ci vogliono i riti”.
        ” Che cos’è un rito?” disse il piccolo principe.
        ” Anche questa è una cosa da tempo dimenticata”, disse la volpe. “E’ quello che fa un giorno diverso
        dagli altri giorni, un’ora dalle altre ore. C’è un rito, per esempio, presso i miei cacciatori. Il giovedì
        ballano con le ragazze del villaggio. Allora il giovedì è un giorno meraviglioso! Io
        mi spingo sino alla vigna. Se i cacciatori ballassero in un giorno qualsiasi i giorni si assomiglierebbero
        tutti, e non avrei mai vacanza”.
        Così il piccolo principe addomesticò la volpe.
        E quando l’ora della partenza fu vicina:
        “Ah!” disse la volpe, “…Piangerò”.
        ” La colpa è tua”, disse il piccolo principe, “Io, non ti volevo far del male, ma tu hai voluto che ti
        addomesticassi…”
        ” E’ vero”, disse la volpe. ';

        echo $contenuto;

        ?>
      </p>

      <span>
        Il paragrafo contiene
        <b>
          <?php
          echo strlen($contenuto);
          ?>
        </b>
        caratteri
      </span>
    </div>

    <!-- sostituisco la parola "principe" con "***" tramite la funzione str_replace-->
    <div>
      <h4 style="text-decoration: underline;">
        <?php
        $sottotitoloDue = 'Seconda parte dell\'esercizio:';
        echo $sottotitoloDue;
        ?>
      </h4>
      <p>
        <?php

        $contenutoDue = 'Il piccolo principe ritornò l’indomani.
        ” Sarebbe stato meglio ritornare alla stessa ora”, disse la volpe.
        ” Se tu vieni, per esempio, tutti i pomeriggi, alle quattro, dalle tre io comincerò ad essere felice. Col
        passare dell’ora aumenterà la mia felicità.
        Quando saranno le quattro, incomincerò ad agitarmi e ad inquietarmi; scoprirò il prezzo della felicità!
        Ma se tu vieni non si sa quando, io non saprò mai a che ora prepararmi il cuore… Ci vogliono i riti”.
        ” Che cos’è un rito?” disse il piccolo principe.
        ” Anche questa è una cosa da tempo dimenticata”, disse la volpe. “E’ quello che fa un giorno diverso
        dagli altri giorni, un’ora dalle altre ore. C’è un rito, per esempio, presso i miei cacciatori. Il giovedì
        ballano con le ragazze del villaggio. Allora il giovedì è un giorno meraviglioso! Io
        mi spingo sino alla vigna. Se i cacciatori ballassero in un giorno qualsiasi i giorni si assomiglierebbero
        tutti, e non avrei mai vacanza”.
        Così il piccolo principe addomesticò la volpe.
        E quando l’ora della partenza fu vicina:
        “Ah!” disse la volpe, “…Piangerò”.
        ” La colpa è tua”, disse il piccolo principe, “Io, non ti volevo far del male, ma tu hai voluto che ti
        addomesticassi…”
        ” E’ vero”, disse la volpe. ';

        echo str_replace("principe","***",$contenutoDue);


        ?>
      </p>
    </div>


  </body>
</html>
