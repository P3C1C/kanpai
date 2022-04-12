<template>
    <div>
        <!-- --------------------- Bar da cui parte l'evento e Immagine copertina ------------------------->
        <div class="titoli">Evento di bar pino</div>
        <div id="picBar"></div>
        <!-- ---------------------- Titolo - Data e Ora ----------------------------->

        <div class="titoloEventi">Degustazione di Birre</div>

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
        <!-- ----------------------- Descrizione ---------------------------------------->

        <div class="bioDesc">
            <div class="descrEvBar">Descrizione</div>
            Degustazione di birre artigianali dalla Lombardia e dal Piemonte. La prima birra è gratis
        </div>

        <!-- ----------------------- Visita ---------------------------------------->

        <div style="text-align: center">
            <router-link to="pagina-bar" tag="button" class="btn">
                <img src="../assets/occhio.png" alt="per unirsi ad un evento" style="width: 16px; height: 16px" />
                Visita il Bar
            </router-link>
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
    name: 'EventoBar',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
