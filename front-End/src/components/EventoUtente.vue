<template>
    <div>
        <!-- --------------------- Bar da cui parte l'evento e Immagine copertina ------------------------------->
        <div class="titoli">Evento di {{ nome }}</div>
        <div id="picBar"></div>
        <!-- ---------------------- Titolo ----------------------------->

        <div class="titoloEventi">{{ evento.nome }}</div>
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
                <div class="eqInner">{{ evento.data }}</div>
            </div>
            <div class="innContenitore eqTitle">
                Orario
                <div class="eqInner">{{ evento.ora }}</div>
            </div>
        </div>
        <!-- ---------------------- Categorie ----------------------------->

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Categorie
                <div class="eqInner cat" id="carHent">{{ evento.categoria }}</div>
            </div>

            <div class="innContenitore eqTitle">
                N° Part.
                <div class="eqInner">
                    <img src="../assets/nPersone.png" id="nPersone" alt="icona per il numero di persone" />
                    {{ evento.nPartecipanti }}
                </div>
            </div>
        </div>

        <!-- ----------------------- Descrizione ---------------------------------------->

        <div class="bioDesc">
            <div class="descrEvBar">Descrizione</div>
            {{ evento.descrizione }}
        </div>
        <!-- ----------------------- Unisciti ---------------------------------------->

        <div style="text-align: center">
            <button v-if="bottone" @click="partecipa(false)" type="button" class="btn">
                <img src="../assets/joinButton.png" alt="per unirsi ad un evento" style="width: 16px; height: 16px" />
                Partecipa
            </button>
            <button v-else @click="partecipa(true)" type="button" class="btn">Disdici</button>
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
    name: 'EventoUtente',
    data() {
        return {
            evento: [],
            nome: '',
            bottone: true,
        };
    },
    async mounted() {
        this.evento = JSON.parse(localStorage.evento);
        //console.log(this.evento);
        await axios
            .post('http://localhost/kanpai/back-End/NomeUtente.php', {
                id: this.evento.idUtente,
            })
            .then((response) => {
                //console.log(response.data);
                this.nome = response.data;
            })
            .catch((error) => {
                console.log(error);
            });
        await axios
            .post('http://localhost/kanpai/back-End/Verifica.php', {
                ide: this.evento.idUEvento,
                idu: JSON.parse(localStorage.user).idUtente,
            })
            .then((response) => {
                if (response.data == 'y') {
                    this.bottone = false;
                } else {
                    this.bottone = true;
                }
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
        async partecipa(i) {
            await axios
                .post('http://localhost/kanpai/back-End/Partecipa.php', {
                    ide: this.evento.idUEvento,
                    idu: JSON.parse(localStorage.user).idUtente,
                })
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error);
                });
            this.bottone = i;
        },
    },
};
</script>

<style></style>
