<template>
    <div>
        <div class="titoli" style="display: inline-block">Scopri</div>
        <div style="float: right; padding: 20px">
            <select v-model="categoria" id="categ">
                <option value="t">Tutti Gli Eventi</option>
                <option value="b">Eventi Bar</option>
                <option value="u">Eventi Utenti</option>
            </select>
        </div>

        <div v-if="categoria == 't' || categoria == 'u'" class="elementi">
            <a v-for="(item, index) in eventou" @click="eventu(item)" class="linkh" :key="index">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">{{ JSON.parse(item).nome }}</div>
                    <div class="t2">Bar collo</div>
                    <div class="t3">
                        <img src="../assets/cuore.png" alt="cuoricino" style="width: 16px; height: 16px" />
                        250
                    </div>
                </div>
            </a>
        </div>

        <div v-if="categoria == 't' || categoria == 'b'" class="elementi">
            <a v-for="(item, index) in eventob" @click="eventb(item)" class="linkh" :key="index">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">{{ JSON.parse(item).nome }}</div>
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
            <a @click="crea()" class="link">
                <img src="../assets/bx_bx-plus-circle.png" alt="zircles" />
            </a>
            <router-link to="#" tag="a" class="link">
                <img src="../assets/drink.png" alt="bicchiere" />
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
    name: 'PaginaScopri',
    data() {
        return {
            categoria: 't',
            eventou: [],
            eventob: [],
        };
    },
    async mounted() {
        await axios
            .get('http://localhost/kanpai/back-End/PaginaScopri.php')
            .then((response) => {
                for (let i = 0; i < response.data[0].length; i++) {
                    this.eventou.push(response.data[0][i]);
                }
                for (let i = 0; i < response.data[1].length; i++) {
                    this.eventob.push(response.data[1][i]);
                }
                //console.log(this.eventou);
                //console.log(this.eventob);
            })
            .catch(function (error) {
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
        eventu(i) {
            localStorage.setItem('evento', i);
            this.$router.push('/evento-utente');
        },
        eventb(i) {
            localStorage.setItem('evento', i);
            this.$router.push('/evento-bar');
        },
    },
};
</script>

<style></style>
