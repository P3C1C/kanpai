<template>
    <div>
        <!-- --------------------- Bar da cui parte l'evento e Immagine copertina ------------------------->
        <div class="titoli">Evento di {{ bar.nome }}</div>
        <div id="picBar"></div>
        <!-- ---------------------- Titolo - Data e Ora ----------------------------->

        <div class="titoloEventi">{{ evento.nome }}</div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Data
                <div class="eqInner">{{ evento.data }}</div>
            </div>
            <div class="innContenitore eqTitle">
                Orario
                <div class="eqInner">{{ evento.ora }}</div>
            </div>
        </div>
        <!-- ----------------------- Descrizione ---------------------------------------->

        <div class="bioDesc">
            <div class="descrEvBar">Descrizione</div>
            {{ evento.descrizione }}
        </div>

        <!-- ----------------------- Visita ---------------------------------------->

        <div style="text-align: center">
            <router-link to="pagina-bar" tag="button" class="btn">
                <img src="../assets/visita.png" alt="per unirsi ad un evento" style="width: 16px; height: 16px" />
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
            <a @click="crea()" class="link">
                <img src="../assets/bx_bx-plus-circle.png" alt="zircles" />
            </a>
            <router-link to="pagina-scopri" tag="a" class="link">
                <img src="../assets/bx_bxs-drink.png" alt="bicchiere" />
                Scopri
            </router-link>
            <a @click="utente()" class="link">
                <img src="../assets/bx_bxs-user.png" alt="utente" />
                Profilo
            </a>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'EventoBar',
    data() {
        return {
            evento: [],
            bar: [],
        };
    },
    async mounted() {
        this.evento = JSON.parse(localStorage.evento);
        //console.log(this.evento);
        await axios
            .post('http://localhost/kanpai/back-End/NomeBar.php', {
                id: this.evento.idBar,
            })
            .then((response) => {
                localStorage.setItem('bar', JSON.stringify(response.data));
                this.bar = JSON.parse(localStorage.bar);
                //console.log(this.bar);
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        utente() {
            if (localStorage.getItem('tipo') == 'u') {
                this.$router.push('/area-personale-utente');
            } else this.$router.push('/area-personale-bar');
        },
        crea() {
            if (localStorage.getItem('tipo') == 'u') {
                this.$router.push('/crea-evento-utente');
            } else this.$router.push('/crea-evento-bar');
        },
    },
};
</script>

<style></style>
