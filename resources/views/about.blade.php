<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirko Donnarumma | Chi è Mirko</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
</head>

<body>
    @include('partials.header') <!-- Include il file header -->
    <div class="container">
        <div class="colonna-testo">
            <div class="about-section">
                <h2>Chi sono</h2>
                <p>Mirko è una persona che durante le medie si è appassionata al mondo dell'informatica.
                    Come qualsiasi fanciullo che si approccia a qualcosa per la prima volta, presi la decisione di imparare Visual Basic da autodidatta; nulla di male in questo, se non fosse per il fatto che per impararlo, scaricai un PDF da 800.
                    Smisi di studiare qualche giorno dopo.
                    Dopo diversi anni, nei quali studiai e mi appassionai alla filosofia, all'arte, al mondo videoludico e alla letteratura in generale, durante il mio primo lavoro come addetto in un grande supermercato, mi capitò tra le mani un corso gratuito su Java; mandai la domanda di applicazione e venni accettato.
                    Conclusi quel corso classificandomi primo tra tutti i corsisti e mi venne offerta una posizione nella stessa azienda.
                    Il senso di appagamento e realizzazione furono impareggiabili, essere il primo tra tutti fu qualcosa fantastico; questa sensazione mi accompagnò negli anni successivi (e mi accompagna tutt'ora) ed è un tratto che mi contraddistingue: cerco sempre di arrivare primo, non importa quanto sia difficile.
                    Sono passati quasi 6 anni da quel corso e più si impara più è bello imparare; il mondo dell'informatica, nonostante si basi su principi base comuni a quasi tutte le sue aree, è talmente vasto che avere a che fare con tutte le sue sfaccettature è una sfida continua che elettrizza e non annoia mai.
                    “Il computer non è una macchina intelligente che aiuta le persone stupide, anzi è una macchina stupida che funziona solo nelle mani delle persone intelligenti.”</p>
            </div>
            <div class="experience-section">
                <h2>Esperienze professionali</h2>
                <p>Nel corso della mia carriera, ho avuto l'opportunità di lavorare su una vasta gamma di progetti, dalle applicazioni web complesse alle soluzioni software su misura per diverse industrie.
                    Sono un fermo sostenitore dello sviluppo Agile e credo nella consegna continua di valore attraverso iterazioni rapide e feedback costanti. La qualità del codice e l'applicazione delle best practice sono sempre al centro del mio lavoro.
                    Durante gli anni ho avuto modo di realizzare che l'interazione tra chi commissiona il lavoro e chi lo produce è alla base del successo di qualsiasi progetto. Differenze di semantica spesso portano ad incomprensioni e questo ha sfociato nel prioritizzare la comunicazione con gli stakeholder prima di qualsiasi cosa.
                    Obbiettivi vaghi producono risultati vaghi e il "progetto", per definizione, è qualcosa che ha un'inizio e deve avere una fine, pertanto è di vitale importanza per la riuscita dello stesso definire gli obbiettivi a stretto contatto con chi li commissiona, effettuare un planning e rispettarlo, sempre rimanendo flessibili alle esigenze del momento.
                    Una volta cominciati i lavori, è imprescindibile portare a termine gli obbiettivi fissati in partenza, facendo in modo che criteri di scalabilità, manutenibilità, performance e sicurezza siano al primo posto durante gli sviluppi.</p>
            </div>
            <div class="passion-section">
                <h2>Passioni</h2>
                <p>Nell'ultimo periodo mi sono avvicinato al mondo dei content creator e sto ancora cercando di trovare la nicchia che fa al caso mio. Nel frattempo mi diletto nella creazione di video di gaming, ho una pagina TikTok e un canale Youtube dove carico spezzoni delle live che produco su Twitch.
                    Le grafiche nei vari social sono tutte prodotte da me, l'editing dei video anche.
                    Un'altra passione che per la quale sto cercando di crearmi il tempo necessario è il copywriting, sono convinto che sia una skill utile in ogni area della vita.
                    Altre passioni più personali che professionali sono gli anime giapponesi, i manga, gli scacchi, la letteratura, la palestra, il pugilato, gli sport olimpici e una curiosità innata a tutto ciò che non conosco.
                    Infine, i videogiochi.
                    I videogiochi mi accompagnano da quando sono nato, fun fact about me da piccolino soffrivo molto d'asma e facevo puntualmente spirometrie su spirometrie; nella sala d'attesa dell'ospedale, c'erano dei computer, per la precisione 3, e c'erano ovviamente tutti i bambini che giocavano; uno dei giochi era il primissimo Doom, solo che all'ora ero troppo piccolo per sapere cosa fosse. Tutti i bambini che ci giocavano, anche più grandi di me, non riuscivano a terminare un livello particolare; un giorno, trovai uno dei pc liberi e così mi misi io a giocare a quel Doom; dopo un po' che venivo chiamato per la spirometria, l'allora medico che mi faceva le visite uscì dallo studio per capire perché questo bambino non si presentava e mi trovò davanti al pc, con tutti i bambini nella sala d'attesa dietro di me e anche gli adulti a guardarmi giocare e terminare il livello più difficile che anche i bambini più grandi di me non riuscirono a completare.</p>
            </div>
        </div>
        <div class="colonna-foto">
            <img src="{{ asset('media/IMG_4887.PNG') }}" alt="Mirko Donnarumma">
        </div>
    </div>
    @include('partials.footer') <!-- Include il file footer -->
</body>

</html>
