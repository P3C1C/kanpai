<template>
    <div>
        <div class="logo">
            <img src="../assets/home.svg" alt="background" class="mx-auto d-block" style="margin-top: -100px; margin-bottom: -5px" />
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FBF5EB" fill-opacity="1" d="M0,96L40,101.3C80,107,160,117,240,149.3C320,181,400,235,480,234.7C560,235,640,181,720,160C800,139,880,149,960,176C1040,203,1120,245,1200,272C1280,299,1360,309,1400,314.7L1440,320L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
        </svg>

        <div class="titoli">Eventi a cui partecipi</div>

        <div class="elementi">
            <a v-for="(item, index) in eventi" @click="event(item)" class="linkh" :key="index">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">{{ JSON.parse(item).nome }}</div>
                    <div class="t2">Via Roma, 13</div>
                    <div class="t3">
                        <img src="../assets/bx_bxs-heart.png" alt="cuoricino" style="width: 16px; height: 16px" />
                        250
                    </div>
                </div>
            </a>
        </div>

        <div class="menu">
            <router-link to="#" tag="a" class="link">
                <img src="../assets/casa.png" alt="casa" />
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
    name: 'PaginaHome',
    data() {
        return {
            eventi: [],
        };
    },
    async mounted() {
        console.log(localStorage.tipo);
        console.log(JSON.parse(localStorage.user));
        if (localStorage.tipo == 'u') {
            await axios
                .post('http://localhost/kanpai/back-End/PaginaHome.php', {
                    id: JSON.parse(localStorage.user).idUtente,
                })
                .then((response) => {
                    this.eventi = response.data;
                    console.log(this.eventi);
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
        event(i) {
            localStorage.setItem('evento', i);
            this.$router.push('/evento-utente');
        },
    },
};
</script>

<style></style>
