<template>
    <div>
        <div class="titoli" style="display: inline-block">Scopri</div>
        <div style="float: right; padding: 20px">
            <select name="" id="categ">
                <option value="">Tutti Gli Eventi</option>
                <option value="">Eventi Bar</option>
                <option value="">Eventi Utenti</option>
            </select>
        </div>

        <div class="elementi">
            <a href="eventoUtente.html" class="linkh">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">Gara Shottini</div>
                    <div class="t2">Bar collo</div>
                    <div class="t3">
                        <img src="../assets/cuore.png" alt="cuoricino" style="width: 16px; height: 16px" />
                        250
                    </div>
                </div>
            </a>
            <a href="eventoUtente.html" class="linkh">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">Gara Shottini</div>
                    <div class="t2">Via Roma, 13</div>
                    <div class="t3">
                        <div class="eqInner cat" id="carHent">Car Hentusiast</div>
                    </div>
                </div>
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
            <router-link to="#" tag="a" class="link">
                <img src="../assets/drink.png" alt="bicchiere" />
                Scopri
            </router-link>
            <router-link to="area-personale-bar" tag="a" class="link">
                <img src="../assets/bx_bxs-user.png" alt="utente" />
                Profilo
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PaginaScopri',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
