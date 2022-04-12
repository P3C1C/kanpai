<template>
    <div>
        <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
            <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
        </a>
        <div class="titoli" style="display: inline-block">FAQ</div>
        <div id="paragrafi">
            <div class="domanda">Come creo un evento?</div>
            <div class="risposta">Facendo tap sul + in basso al centro e inserire le informazioni richieste.</div>
            <br />
            <div class="domanda">Come funzionano gli eventi?</div>
            <div class="risposta">Ci sono due tipi di eventi: quelli creati dagli utenti, che possono scegliere una categoria da attribuirgli in modo da trovare persone con gli stessi interessi, e quelli creati dai bar, che sono ufficailizzati dagli stessi.</div>
            <br />
            <div class="domanda">Sono disponibili tutti i bar della mia città?</div>
            <div class="risposta">Saranno presenti solo i bar che si sono iscritti nella tua zona, ma puoi sempre chiedere al tuo bar preferito di unirsi a noi!</div>
            <br />
            <div class="domanda">Qual è la differenza tra le sezioni Vicino a te e Scopri?</div>
            <div class="risposta">
                Nella sezione Vicino a te troverai soltanto i bar vicino alla tua posizione; quando un bar ha organizzato un evento, vedrai l'icona di una stella sulla loro foto, in basso a destra. <br />
                Nella sezione Scopri, troverai solo eventi, creati sia da bar che da utenti; attraverso i filtri, puoi scegliere se visualizzarne solo un tipo, e puoi inoltre filtrare gli eventi degli utenti in base alle categorie di interesse.
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'FAQ',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
