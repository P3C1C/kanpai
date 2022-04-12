<template>
    <div>
        <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
        <div class="titoli" style="display: inline-block">Crea evento</div>

        <div class="fotobarevento">
            <img src="../assets/foto_bar.png" alt="" />
        </div>

        <div class="nomevento">
            <input type="text" class="inputce" placeholder="Nome evento" />
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Data
                <div class="eqInner">
                    <input type="date" class="inputdata" />
                </div>
            </div>
            <div class="innContenitore eqTitle">
                Orario
                <div class="eqInner">
                    <input type="time" class="inputora" />
                </div>
            </div>
        </div>

        <div class="bioDesc">
            <div class="descrEvBar">Descrizione</div>
            <textarea class="inputdesc" cols="30" rows="10" maxlength="50" placeholder="Inserisci delle informazioni aggiuntive"></textarea>
        </div>

        <div class="bottonecrea">
            <button class="btn"><i class="bi bi-plus-circle-fill"></i> Crea</button>
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
            <router-link to="#" tag="a" class="link">
                <img src="../assets/crea.png" alt="zircles" />
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
    name: 'CreaEventoBar',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
