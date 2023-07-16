<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $recepies =[
        [
            'id'=>1,'name'=>'Carbonara','presentation'=>'Primo piatto tipico romano con uova, guanciale e pecorino',
            'details'=>"
                Per preparare gli spaghetti alla carbonara cominciate mettendo sul fuoco una pentola con l’acqua salata per cuocere la pasta. Nel frattempo eliminate la cotenna dal guanciale e tagliatelo prima a fette e poi a striscioline spesse circa 1cm. La cotenna avanzata potrà essere riutilizzata per insaporire altre preparazioni. Versate i pezzetti di guanciale in una padella antiaderente e rosolate per circa minuti a fiamma medio alta, fate attenzione a non bruciarlo altrimenti rilascerà un aroma troppo forte. Nel frattempo tuffate gli spaghetti nell’acqua bollente e cuoceteli al dente. Intanto versate i tuorli in una ciotola. Aggiungete il Pecorino  e insaporite con il pepe nero . Amalgamate il tutto con una frusta a mano , sino ad ottenere una crema liscia. Intanto il guanciale sarà giunto a cottura; spegnete il fuoco e utilizzando un mestolo prelevatelo dalla padella, lasciando il fondo di cottura all'interno della padella stessa. Trasferite il guanciale in una ciotolina e tenetelo da parte. Versate una mestolata d’acqua della pasta in padella, insieme al grasso del guanciale. Scolate la pasta al dente direttamente nel tegame con il fondo di cottura. Saltatela brevemente per insaporirla . Togliete dal fuoco e versate il composto di uova e Pecorino nel tegame. Mescolate velocemente per amalgamare. Per renderla ben cremosa, al bisogno, potete aggiungere poca acqua di cottura della pasta. Aggiungete il guanciale, mescolate un'ultima volta e servite subito gli spaghetti alla carbonara aggiungendo ancora del pecorino in superficie e un pizzico di pepe nero.
            ", 
            'img'=>"https://www.giallozafferano.it/images/244-24489/Spaghetti-alla-Carbonara_450x300_sp.jpg", "region"=>"Lazio", "type"=>"Primo"
        ],
        [
            'id'=>2,'name'=>'Vitello tonnato','presentation'=>'Il vitello tonnato si può servire come antipasto o come secondo, l’importante è che le fettine di carne siano sottili e cotte al punto giusto per amalgamarsi al meglio in bocca con la salsa a base di tonno, tuorli, capperi e acciughe.',
            'details'=>"
            Accomodate il girello in una ciotola, copritelo con vino bianco, profumate con il sedano a pezzetti, 2 foglie di alloro, 3 chiodi di garofano, 6 foglie di salvia. Coprite la ciotola con la pellicola e ponete a marinare in frigo per almeno 12 ore. Trasferite il girello in una casseruola, copritelo con la marinata, filtrata, e rabboccate con acqua in modo che risulti abbondantemente coperto. Salate, portate a bollore e cuocete per un’ora. Conservate 2 mestolini di acqua di cottura, poi scolatelo, lasciatelo raffreddare per un paio di ore, quindi mettetelo in frigo per un’ora per farlo rassodare.Frullate il tonno sgocciolato con i tuorli sodi, un cucchiaio abbondante di capperi, il succo di un limone, le acciughe, mezzo bicchiere di olio e un cucchiaio di aceto. Aggiungete alla salsa tonnata ottenuta 2 mestolini dell’acqua di cottura tenuta da parte, filtrata, per renderla liscia e vellutata. Aggiungete alla salsa tonnata ottenuta 2 mestolini dell’acqua di cottura della carne, per renderla più liscia e vellutata. Tagliate la carne a fette molto sottili (l’ideale sarebbe usare l’affettatrice) e disponetele nei piatti. Copritele abbondantemente di salsa tonnata e completate con qualche cappero, accompagnando con cetriolini sott’aceto a piacere.


            ", 
            'img'=>"https://media-assets.lacucinaitaliana.it/photos/62cd8cc59ac43bd623be70ae/1:1/w_1920,c_limit/vitello-tonnato.jpg", "region"=>"Piemonte", "type"=>"Secondo"
        ],
        [
            'id'=>3,'name'=>'Amatriciana','presentation'=>'Primo piatto tipico con pomodoro, guanciale e pecorino conteso tra Roma e Amatrice',
            'details'=>"
            Prima di tutto mettete in una padella il guanciale tagliato a listarelle ( piccoli rettangoli uguali non troppo fini) insieme ad un pezzetto di peperoncino.

            Fate scaldare a fiamma vivace ( senza aggiungere olio)  finché non risultino rosolati, croccanti e dorati ma non bruciati e avranno rilasciato tutto il loro olio. 
            Poi scolate i pezzi di guanciale tamponandoli con uno scottex e metteteli da parte nel frattempo nella padella con grasso lasciato dal guanciale, aggiungete il peperoncino. Infine aggiungete in padella altri 2 cucchiai di olio, lasciate scaldare, sfumate con il vino bianco, quando sarà completamente evaporato, aggiungete i pomodori pelati tagliati a pezzettini ( anche qui ricavate una polpa fine di pezzettini tutti uguali) 
            
            Poi lasciate cuocere a fiamma moderata per circa 15 / 18 minuti. Infine correggete di sale 
            Nel frattempo ponete l’acqua della pasta con sale. 
            Poi grattugiare a parte il pecorino
            Infine cuocete la pasta per circa 4 minuti (deve solo ammorbidirsi)
            Poi prelevatela dalla pentola (senza buttare l’acqua di cottura) e ponetela direttamente nella padella del sugo con  3 / 4 cucchiai di acqua di cottura. Lasciate completare la cottura della pasta in padella risottando i bucatini, se necessario aggiungete altra acqua di cottura della pasta per renderli cremosi.

            A fine cottura aggiungete il pecorino grattugiato, mantecate a fuoco spento per amalgamare il tutto, aggiungete il guanciale croccante, amalgamate tutto insieme.
            
            
            ", 
            'img'=>"https://www.tavolartegusto.it/wp/wp-content/uploads/2022/04/Amatriciana.jpg", "region"=>"Lazio", "type"=>"Primo"
        ],
        [
            'id'=>4,'name'=>'cannolo','presentation'=>'Dolce tipico siciliano a base di ricotta',
            'details'=>"
            Prima di tutto, realizzate la crema di ricotta.

            Sgocciolate la ricotta alla perfezione, strizzandola in un canovaccio di tela. Trasferite la ricotta asciutta in una ciotola, aggiungete lo zucchero, frullate con un minipimer, in modo da ottenere un composto cremoso e vellutato senza grumi! Aggiungete le gocce di cioccolato. Girate e riponete in frigo per almeno 4 / 5 h. Lavorate con le fruste lo strutto, la vaniglia, la cannella, il sale e lo zucchero, fino ad ottenere un composto spumoso. Aggiungete l’uovo, lavorate ancora con le fruste per amalgamare il tutto.

            Poi aggiungete la farina precedentemente setacciata con cacao, a poco alla volta alternandola con aceto di vino e marsala. Fino ad esaurimento ingredienti e fino a raggiungere un impasto lavorabile e compatto, se necessario spolverate con un pizzico di farina. Sigillare con una pellicola e lasciate riposare in frigo per almeno 1 h.

            Come realizzare la forma del Cannolo siciliano
            Trascorso il tempo indicato, dividete l’impasto in 3 / 4 parti. Stendetelo sottilissimo ad uno spessore di 2 / 3 mm con l’aiuto di una macchinetta della pasta.
            
            Dovrete procedere ripiegando l’impasto su se stesso più volte, con aggiunta di farina cosi come si fa per le Chiacchiere 
            
            fino ad ottenere una sfoglia compatta e che non attacca più!
            
            Se non avete la macchinetta della pasta, potete procedere a mano con un mattarello, ci vorrà più tempo e più fatica per assottigliare la sfoglia!
            
             Dividete la sfoglia in quadrati di circa 10 x 10 cm
            
            Attenzione che la misura del quadrato dev’essere grande come il cilindro di alluminio; non deve uscire fuori, altrimenti dopo cotto, avrete difficoltà a sfilarlo!
            
            Se state usando dei cilindri più piccoli, naturalmente realizzerete dei quadrati di 7 / 8 cm :
            
            Posizionate al centro di ogni quadrato il cilindro. Realizzate in questo modo tutte le scorze dei vostri cannoli siciliani. Ponete in frigo per almeno 1 ora.

            Questo passaggio in frigo è fondamentale! i cilindri devono risultare freddi per reggere l’elevata temperatura della frittura!
            
            Cottura delle scorze dei Cannoli
            Scaldate l’olio per friggere in un pentolino a bordi alti, friggete una cialda per volta. Basterà 1 minuto circa , girandola un paio di volte. Vedrete che salirà subito a galla riempiendosi di bolle. Scolate su carta assorbente ed eliminate subito la cannula! Se aspettate troppo tempo resteranno incastrate!
            
            Lasciate quindi raffreddare le cialde pronte e cuocete tutte le altre!
            
            Quando le cialde sono pronte, riempite i cannoli con la crema di ricotta e gocce di cioccolato. Prima un lato, poi un altro. Completate aggiungendo sulle punte di crema la granella di frutta secca, gocce di cioccolato, scorze di arancia candita, ciliegie candite. Spolverate di zucchero a velo e servite!

            Ecco pronti i Cannoli siciliani! Perfetti come in pasticceria!
            
            
            ", 
            'img'=>"https://www.tavolartegusto.it/wp/wp-content/uploads/2019/06/cannoli-siciliani-Ricetta-originale-Cannoli-siciliani.jpg", "region"=>"Sicilia","type"=>"Dolce"
        
        ],
        [
            'id'=>5,'name'=>'Bonet','presentation'=>'Budino tipico piemontese a base di amaretti',
            'details'=>"
                Tritate gli amaretti nel mixer. Versate il latte in una casseruola e scaldatelo a fiamma bassa. Rompete le uova in una ciotola e montatele con 4 cucchiai di zucchero fino a ottenere un composto chiaro e spumoso. Unite gli amaretti, il cacao setacciato e mescolate. Versate a filo il latte caldo e amalgamate gli ingredienti. Versate lo zucchero rimasto in un pentolino, aggiungete due cucchiai di acqua e cuocetelo fino alla formazione di un caramello dorato. Versatelo in uno stampo liscio e, tenendo lo stampo con un canovaccio da cucina, inclinatelo in modo da distribuire il caramello sul fondo e sui bordi.


                Fate raffreddare, versatevi il composto preparato e cuocete il bonet a bagnomaria in forno preriscaldato a 150° per circa un’ora. Fate raffreddare e mettete il dolce in frigo per almeno 4 ore prima di sformarlo e servirlo sul piatto da portata.
            ", 
            'img'=>"https://tse4.mm.bing.net/th?id=OIP.LkCIYm78jY5Ed7UDNWeJPwHaEs&pid=Api", "region"=>"Piemonte", "type"=>"Dolce"
        ],
        [
            'id'=>6,'name'=>'Pesce spada alla Ghiotta','presentation'=>'Secondo piatto tipico siciliano a base di pesce spada',
            'details'=>"
            Pulire la cipolla e tagliarla a fettine non troppo sottili, quindi pelare il sedano eliminando i fili e tagliarlo a pezzetti. Denocciolare e tagliare a fettine le olive, dissalare i capperi.

            Mettere in una padella olio extravergine di oliva e poca acqua e unire a freddo la cipolla e il sedano. Stufare le verdure a fuoco basso, mescolando spesso e, quando saranno diventate traslucide, aggiungere i capperi dissalati e le olive a pezzetti. Cuocere per 3-4 minuti. Quindi, aggiungere la polpa di pomodoro. Salare e cuocere per circa 10 minuti.
            
            Rosolare i tranci di pesce spada in olio extravergine per pochi minuti, finché  il pesce non cambia colore.
            
            Disporre il pesce spada nel sugo, aggiungendo se necessario pochissima acqua calda. Aggiustare di sale e cuocere a fuoco medio per altri 10 minuti. Fare riposare qualche ora in modo che i sapori si armonizzino perfettamente e riscaldare leggermente prima di servire.
            
            Un consiglio: noi in Sicilia con il sugo, che è sempre abbondante, usiamo condire gli spaghetti che, come vuole la tradizione, vengono spolverizzati con il pecorino, anche se molti potrebbero non gradire il formaggio sui sughi a base di pesce.
            
             
            In Sicilia, oltre al pesce spada a tocchi (ricordate che più i tocchi sono spessi più il pesce resterà morbido), facciamo anche le braciole di pesce spada a ghiotta: involtini fatti con sottili fette di pesce spada farcite con un composto a base di pane grattugiato, pecorino, capperi, olio e prezzemolo, cotti in questo intingolo. Da provare.
            
                      
            
            ", 
            'img'=>"https://www.sicilianicreativiincucina.it/wp-content/uploads/2016/07/pescespadaaghiotta.jpg", "region"=>"Sicilia", "type"=>"Secondo"
        ],
        [
            'id'=>7,'name'=>'Ragu alla Bolognese','presentation'=>'Primo piatto tipico emiliano con carne e verdure',
            'details'=>"
            Iniziate a preparare il ragù alla bolognese dal soffritto. Tritate finemente al coltello il sedano, la carota e la cipolla. Scaldate l’olio e il burro in una casseruola dal fondo pesante, aggiungete le verdure e fatele appassire lentamente a fiamma bassa. 
            Aggiungete la pancetta e, dopo un paio di minuti, la carne macinata. Rosolate a fiamma alta mescolando continuamente e sgranando con un cucchiaio. Sfumate con il vino bianco e lasciate evaporare. Quando non si sentirà più l'odore dell'alcool, aggiungete il latte e lasciate assorbire a fiamma media sempre mescolando di tanto in tanto. Aggiustate di sale e pepe fresco di mulinello.
            questo punto unite la passata di pomodoro e il concentrato, mescolando con un cucchiaio per amalgamare. Portate a bollore, coprite, senza sigillare con il coperchio, e cuocete a fiamma bassissima per almeno 2 ore. Il ragù alla bolognese è pronto per arricchire i vostri piatti.
            ", 
            'img'=>"https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-ragu-bolognese/_jcr_content/header-par/image_single_1959466428.img.jpg/1498118488325.jpg", "region"=>"Emilia-Romagna", "type"=>"Primo"
        ], 
        [
            'id'=>8,'name'=>'Straca Dent','presentation'=>'dolce tipico emiliano a base di mandorle',
            'details'=>"
            In una terrina amalgamate la farina al miele, ricorrendo all'ausilio di un goccio d'acqua calda se l'impasto fosse troppo compatto. Incorporate al composto le mandorle tagliate in due in senso longitudinale e gli albumi montati a neve ferma.
            Distribuitelo a cucchiaiate in una teglia imburrata e leggermente infarinata che introdurrete nel forno già riscaldato a 130-140°. Estraete dal forno la teglia con gli straca dent dorati dopo mezz'ora circa e rimuoveteli dal recipiente quando sono freddi del tutto.
            ", 
            'img'=>"https://tse1.mm.bing.net/th?id=OIP.RO8KEKvOstWkAt6_8OIp7QHaE8&pid=Api", "region"=>"Emilia-Romagna", "type"=>"Dolce"
        ],
    ];
    
    
    public function index () {
        return view('welcome', ['recepies'=>$this->recepies]);
    }

    public function show($id){
        foreach($this->recepies as $recepie){
            if($recepie['id'] == $id){
                return view('ricette', ['recepie'=>$recepie]);
            }
        }
    }

    public function filteredByRegion($region){
        $recepiesByRegion = [];

        foreach($this->recepies as $recepie){
            if($region == $recepie['region']){
                $recepiesByRegion[] = $recepie;
            }
        } return view('region', ['regions'=>$recepiesByRegion]);
    }

    public function filteredByType($type){
        $recepiesByType = [];

        foreach($this->recepies as $recepie){
            if( $type == $recepie['type']){
                $recepiesByType[] = $recepie;
            }
        } return view('tipo', ['types'=>$recepiesByType]);
    } 
}
