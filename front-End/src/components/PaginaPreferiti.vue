<template>
    <div>
        <div class="titoli">Preferiti</div>
        <div class="preferiti">
            <a @click="visualizza(item)" v-for="(item, index) in bar" class="pref" :key="index">
                <img src="../assets/es.png" alt="casa" />
                <div class="testo">
                    <div>
                        <img src="../assets/cuore.png" alt="cuoricino" style="width: 16px; height: 16px" />
                        {{ JSON.parse(item).nome }}
                    </div>
                </div>
            </a>
        </div>

        <div class="menu">
            <router-link to="pagina-home" tag="a" class="link">
                <img src="../assets/bx_bxs-home.png" alt="casa" />
                Home
            </router-link>
            <router-link to="#" tag="a" class="link">
                <img src="../assets/cuore.png" alt="cuore" />
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
    name: 'PaginaPreferiti',
    data() {
        return {
            bar: [],
        };
    },
    async mounted() {
        if (localStorage.tipo == 'u') {
            await axios
                .post('http://localhost/kanpai/back-End/PaginaPreferiti.php', {
                    id: JSON.parse(localStorage.user).idUtente,
                })
                .then((response) => {
                    this.bar = response.data;
                    console.log(this.bar.nome);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
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
        visualizza(i) {
            //console.log(i);
            localStorage.setItem('bar', i);
            //console.log(localStorage.bar);
            this.$router.push('/pagina-bar');
        },
    },
};
</script>

<style></style>
