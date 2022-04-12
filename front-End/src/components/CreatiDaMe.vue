<template>
    <div>
        <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
            <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
        </a>
        <div class="titoli" style="display: inline-block">Creati Da Me</div>
        <div class="elementi">
            <router-link to="" tag="a" class="linkh">
                <img src="../assets/es.png" alt="casa" />
                <div class="tes">
                    <div class="t1">Gara Shottini</div>
                    <div class="t2">Bar collo</div>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CreatiDaMe',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
