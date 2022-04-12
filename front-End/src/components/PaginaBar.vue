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
                <span class="titoli">Bar Pistacchio</span> <br />
                <span class="sottotitolo">Via San Crispino, 12</span>
            </div>
            <div class="cuorebar">
                <img src="../assets/cuore.png" />
            </div>
        </div>
        <div class="descbar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum sem at felis finibus, vitae pretium lorem accumsan. Quisque in consequat metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam id tellus eu elit ultrices fringilla. Aenean eu ultrices nulla. Ut pulvinar, nunc a rutrum varius, massa enim commodo massa, sit amet aliquam lectus dui sed nibh.</div>

        <div class="titoli" style="font-size: 24px">Eventi</div>

        <div class="elementi">
            <router-link to="evento-bar" tag="a" class="linkh">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">Serata Tequila</div>
                    <div class="t2">03/04/2022</div>
                    <div class="t3">21.30</div>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PaginaBar',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
