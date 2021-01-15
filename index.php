<!-- Quindi, dopo aver studiato le slide di oggi, vorrei che definiste 
una classe PHP che modella il concetto di una "Stanza di Hotel"; oltre a definire almeno 3 proprieta' distinte, vorrei che implementaste un costruttore che assegna un valore ad almeno una di queste proprieta', a vostro piacimento. 

Infine, implementate anche una funzione che, quando invocata sull'oggetto, stampi il contenuto di tutte le sue proprieta' ( concatenate i valori per formare una stringa ). Testate il tutto creando qualche istanza e invocando l'unica funzione che avete scritto. -->

<?php

class StanzaHotel { /* creo la classe */
    public $numero_camera;  /* genero le variabili/attributi della classe */
    public $piano;
    public $configurazione;

// implemento costruttore
    function __construct($numero_camera, $piano, $configurazione) { /* su tutte e tre le proprietà */
        $this->numero_camera = $numero_camera;
        $this->piano = $piano;
        $this->configurazione = $configurazione;

    }

    // implemento una funzione per stampare il contenuto delle proprietà della singola stanza
    public function print_all() {
        return 'numero camera:' . $this->numero_camera . ' ' . 'Piano numero:' . $this->piano . ' ' . 'Configurazione:' . ' ' . $this->configurazione;
    }
}

$camera1 = new StanzaHotel('101', '1', 'matrimoniale');
$camera2 = new StanzaHotel('105', '1', 'singola');
$camera3 = new StanzaHotel('207','2', 'singola');
$camera4 = new StanzaHotel('308', '3', 'matrimoniale');

echo $camera4->print_all();


?>