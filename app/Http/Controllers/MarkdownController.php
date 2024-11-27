<?php

namespace App\Http\Controllers;

use Parsedown;

class MarkdownController extends HomeController
{
    public function show()
    {
        $parsedown = new Parsedown();

        // Esempio di Markdown complesso
        $markdown = <<<MD
        ## Progressi Scolastici

        ### 27/11/2024

        #### Materia: *Matematica*
        
        **Titolo:** *Studio delle funzioni*
        
        **Descrizione:** Oggi ho imparato a calcolare i limiti delle funzioni e 
        a determinare la continuità. Abbiamo anche esplorato il concetto di 
        derivata e il suo utilizzo nella risoluzione di problemi di ottimizzazione.
        MD;

        $html = $parsedown->text($markdown);

        return view('ohi', ['html' => $html]);
    }
}
