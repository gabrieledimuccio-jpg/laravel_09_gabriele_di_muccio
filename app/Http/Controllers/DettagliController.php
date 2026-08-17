<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class DettagliController extends Controller
{
public function articoli($title){
$arrayArticle = [
[
'titolo' =>'Il Trend del 2026: Allenamento Olistico e Mentale',
'testo' =>"La salute mentale è entrata a pieno titolo nelle routine di allenamento. Sempre più palestre e centri fitness propongono sessioni che uniscono sforzo fisico e benessere psicologico. Pratiche come lo yoga terapeutico, il breathwork (lavoro sul respiro) e le meditazioni attive sono ormai abbinate ai classici esercizi di potenziamento per gestire lo stress quotidiano."
],
[
'titolo' =>'Sfatare i Miti: Il Sudore non è sinonimo di Efficacia',
'testo' =>"Un falso mito molto duro a morire è l'idea che più si suda, più si bruciano grassi. In realtà, la quantità di sudore dipende dalla termoregolazione corporea e dalla temperatura dell'ambiente, non dall'intensità dello sforzo. L'efficacia di un allenamento si misura con parametri oggettivi, come il carico di lavoro e la progressione nel tempo."
],
[
'titolo' =>'La Rivoluzione dei Dati: Wearable e Personalizzazione',
'testo' =>"Il fitness moderno si affida sempre più alla tecnologia indossabile. Smartwatch e anelli smart permettono di monitorare in tempo reale parametri vitali come la variabilità della frequenza cardiaca, il sonno e il dispendio calorico. Grazie a questi dati, gli allenatori possono strutturare schede di allenamento iper-personalizzate basate sulle reali capacità di recupero dell'atleta."
],
[
'titolo' =>"Allenamento Funzionale e Versatilità: Ispirazione Calisthenics",
'testo' =>`L'allenamento a corpo libero e il calisthenics continuano a dominare le preferenze di chi vuole migliorare forza, agilità e mobilità senza macchinari pesanti. Eseguire esercizi come piegamenti, trazioni e squat permette di sviluppare una muscolatura armoniosa e funzionale, ideale per migliorare la postura e prevenire gli infortuni nella vita di tutti i giorni.`
],
[
'titolo' => "L Approccio Less is More in Vacanza",
'testo'  => "Molte persone vivono con ansia l'idea di non potersi allenare durante un viaggio..."
],
[
'titolo' =>'Gli Esercizi Fondamentali: Il Segreto della Costanza',
'testo' =>"Non serve un arsenale di attrezzi infiniti per ottenere risultati. I programmi di allenamento più solidi si basano su movimenti multiarticolari: squat, panca piana, stacchi da terra e trazioni. Concentrarsi su questi pilastri della forza permette di stimolare i maggiori gruppi muscolari in modo efficiente, costruendo una base solida su cui innestare qualsiasi altro obiettivo specifico."
],
];
foreach($arrayArticle as $article){
if ($title == $article['titolo']) {
return view('Dettagli', ['article' => $article]);
}
}
}
}
