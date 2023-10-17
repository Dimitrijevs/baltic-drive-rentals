<template>
  <div id="app">
    <NavBar />
    <router-view/>
    <AppFooter />
  </div>
</template>

<script>
import NavBar from "./components/navBar.vue";
import AppFooter from "./components/appFooter.vue";
export default {
  name: "App",
  components: {
    NavBar,
    AppFooter
  },
};
</script>

<style>
:root {
    font-size: calc(0.625rem + 0.4vw);
    --white: #dddcdb;
    --white-white: #e9e9e8;
    --skin: #F39C7F;
    --black: #0E0E0E;
    --grey: #7a7a7a;
}

html {
  scroll-behavior: smooth;
}

::-webkit-scrollbar {
    display: none;
}

::selection {
    color: var(--black);
    background: var(--skin);
}

* {
    font-family: 'Catamaran', sans-serif;
    color: var(--black);
}

body {
    margin: 0;
    padding: 0;
    color: var(--black);
    background-color: var(--white);
}
</style>
