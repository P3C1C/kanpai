<template>
    <div>
        <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
            <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
        </a>
        <div class="titoli" style="display: inline-block">Creati Da Me</div>

        <div v-if="tipo == 'u'" class="elementi">
            <a v-for="(item, index) in evento" @click="modifica(item)" class="linkh" :key="index">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">{{JSON.parse(item).nome}}</div>
                </div>
            </a>
        </div>

        <div v-else class="elementi">
            <a v-for="(item, index) in evento" @click="modificabar(item)" class="linkh" :key="index">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">{{JSON.parse(item).nome}}</div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'CreatiDaMe',
    data() {
        return {
            id: '',
            tipo: '',
            evento: [],
        };
    },
    async mounted() {
        if (localStorage.tipo == 'u') {
            this.id = JSON.parse(localStorage.user).idUtente;
            this.tipo = 'u';
        } else {
            this.id = JSON.parse(localStorage.user).idBar;
            this.tipo = 'b';
        }
        await axios
            .post('http://localhost/kanpai/back-End/CreatiDaMe.php', {
                id: this.id,
                tipo: localStorage.tipo,
            })
            .then(response => {
                for(let i = 0; i < response.data.length; i++)
                    this.evento.push(response.data[i].evento);
                //console.log(this.evento);
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    methods: {
        modifica(i) {
            localStorage.setItem('evento', i);
            this.$router.push('/modifica-evento-utente');
        },
        modificabar(i) {
            localStorage.setItem('evento', i);
            this.$router.push('/modifica-evento-bar');
        },
    },
};
</script>

<style></style>
