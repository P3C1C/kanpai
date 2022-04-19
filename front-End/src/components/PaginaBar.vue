<template>
    <div>
        <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
            <div class="freccia">
                <img src="../assets/left arrow.png" alt="freccia" />
            </div>
        </a>

        <div id="picBar"></div>

        <div class="info">
            <div>
                <span class="titoli">{{ bar.nome }}</span> <br />
                <span class="sottotitolo">Via San Crispino, 12</span>
            </div>
            <div class="cuorebar">
                <img v-if="!bottone" @click="segui(true)" src="../assets/bx_bxs-heart.png" />
                <img v-else @click="segui(false)" src="../assets/cuore.png" />
            </div>
        </div>
        <div class="descbar">{{ bar.descrizione }}</div>

        <div class="titoli" style="font-size: 24px">Eventi</div>

        <div class="elementi">
            <a v-for="(item, index) in eventi" @click="eventb(item)" class="linkh" :key="index">
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
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'PaginaBar',
    data() {
        return {
            bar: [],
            eventi: [],
            bottone: false,
        };
    },
    async mounted() {
        this.bar = JSON.parse(localStorage.bar);
        await axios
            .post('http://localhost/kanpai/back-End/EventiBar.php', {
                id: this.bar.idBar,
            })
            .then((response) => {
                this.eventi = response.data;
                //console.log(this.eventi);
            })
            .catch(function (error) {
                console.log(error);
            });
        await axios
            .post('http://localhost/kanpai/back-End/VerificaSegui.php', {
                idb: this.bar.idBar,
                idu: JSON.parse(localStorage.user).idUtente,
            })
            .then((response) => {
                if (response.data == 'y') {
                    this.bottone = true;
                } else {
                    this.bottone = false;
                }
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        eventb(i) {
            localStorage.setItem('evento', i);
            this.$router.push('/evento-bar');
        },
        async segui(i) {
            await axios
                .post('http://localhost/kanpai/back-End/Segui.php', {
                    idb: this.bar.idBar,
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
