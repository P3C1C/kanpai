<template>
    <div>
        <!-- --------------------- Bar da cui parte l'evento e Immagine copertina ------------------------------->
        <div class="titoli">Evento di Pierino23</div>
        <div id="picBar"></div>
        <!-- ---------------------- Titolo ----------------------------->

        <div class="titoloEventi">Gara di shots</div>
        <!-- ---------------------- Luogo - N. Partecipanti ----------------------------->
        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Luogo
                <div class="eqInner">Bar minchione</div>
            </div>
            <div class="innContenitore eqTitle">
                Città
                <div class="eqInner">Verona</div>
            </div>
        </div>
        <!-- ---------------------- Data - Ora ----------------------------->

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Data
                <div class="eqInner">16 / 08</div>
            </div>
            <div class="innContenitore eqTitle">
                Orario
                <div class="eqInner">18:30</div>
            </div>
        </div>
        <!-- ---------------------- Categorie ----------------------------->

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Categorie
                <div class="eqInner cat" id="carHent">Car Hentusiast</div>
            </div>

            <div class="innContenitore eqTitle">
                N° Part.
                <div class="eqInner">
                    <img src="../assets/nPersone.png" id="nPersone" alt="icona per il numero di persone" />
                    025
                </div>
            </div>
        </div>

        <!-- ----------------------- Descrizione ---------------------------------------->

        <div class="bioDesc">
            <div class="descrEvBar">Descrizione</div>
            Degustazione di birre artigianali dalla Lombardia e dal Piemonte. La prima birra è gratis
        </div>
        <!-- ----------------------- Unisciti ---------------------------------------->

        <div style="text-align: center">
            <a href="home.html">
                <button type="button" class="btn">
                    <img src="../assets/joinButton.png" alt="per unirsi ad un evento" style="width: 16px; height: 16px" />
                    Partecipa
                </button>
            </a>
        </div>

        <div class="menu">
            <router-link to="pagina-home" tag="a" class="link">
                <img src="../assets/bx_bxs-home.png" alt="casa" />
                Home
            </router-link>
            <router-link to="pagina-preferiti" tag="a" class="link">
                <img src="../assets/bx_bxs-heart.png" alt="cuore" />
                Preferiti
            </router-link>
            <router-link to="crea-evento-utente" tag="a" class="link">
                <img src="../assets/bx_bx-plus-circle.png" alt="zircles" />
            </router-link>
            <router-link to="pagina-scopri" tag="a" class="link">
                <img src="../assets/bx_bxs-drink.png" alt="bicchiere" />
                Scopri
            </router-link>
            <router-link to="#" tag="a" class="link">
                <img src="../assets/bx_bxs-user.png" alt="utente" />
                Profilo
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'EventoUtente',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
