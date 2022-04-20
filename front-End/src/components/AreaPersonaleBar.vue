<template>
    <div>
        <div class="titoli">Area Personale</div>
        <div class="imgProfilo">
            <img src="../assets/imgUser.png" alt="" />
        </div>
        <div class="titoloEventi">{{ nome }}</div>
        <div id="modProf" class="aPerTxt">
            <router-link tag="a" to="modifica-profilo-bar"> <img src="../assets/modProf.png" class="ico" alt="" />Modifica Profilo </router-link>
        </div>
        <div id="impostazioni" class="aPerTxt">
            <router-link tag="a" to="creati-da-me"> <img src="../assets/Star.png" class="ico" alt="" />Creati da me </router-link>
        </div>
        <div id="eventiPersonali" class="aPerTxt">
            <router-link tag="a" to="pagina-impostazioni"> <img src="../assets/imp.png" class="ico" alt="" />Impostazioni </router-link>
        </div>
        <div id="faq" class="aPerTxt">
            <router-link tag="a" to="FAQ"> <img src="../assets/faq.png" class="ico" alt="" />FAQ </router-link>
        </div>
        <div id="privacy" class="aPerTxt">
            <router-link tag="a" to="pagina-privacy"> <img src="../assets/priv.png" class="ico" alt="" />privacy </router-link>
        </div>
        <div id="logOut" class="aPerTxt">
            <a @click="out(true)"> <img src="../assets/logOut.png" class="ico" alt="" />Log Out </a>
        </div>

        <!-- ----------------------- logOut ---------------------------------------->
        <div v-if="logout">
            <div id="sfondoLogOut"></div>
            <div id="contLogOut">
                <div id="inLogOut">Sicuro di voler uscire?</div>
                <div id="confAnn">
                    <div class="confAnn" id="conferma">
                        <a @click="esci()" style="color: white"> Conferma </a>
                    </div>
                    <div class="confAnn" id="annulla" @click="out(false)">
                        <a> Annulla </a>
                    </div>
                </div>
            </div>
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
            <router-link to="#" tag="a" class="link">
                <img src="../assets/utente.png" alt="utente" />
                Profilo
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'AreaPersonaleBar',
    data() {
        return {
            nome: '',
            cognome: '',
            logout: false,
        };
    },
    mounted() {
        this.nome = JSON.parse(localStorage.user).nome;
        this.cognome = JSON.parse(localStorage.user).cognome;
    },
    methods: {
        crea() {
            if (localStorage.getItem('tipo') == 'u') {
                this.$router.push('/crea-evento-utente');
            } else this.$router.push('/crea-evento-bar');
        },
        out(v) {
            this.logout = v;
        },
        esci() {
            localStorage.removeItem('user');
            localStorage.removeItem('tipo');
            this.$router.push('/');
        }
    },
};
</script>

<style></style>
