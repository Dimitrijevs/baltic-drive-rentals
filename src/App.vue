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
    --yellow: #ffc107;
    --dark: #343a40;
}

::-webkit-scrollbar {
    display: none;
}

::selection {
    color: var(--dark);
    background: var(--yellow);
}

body {
    margin: 0;
    padding: 0;
}

.img-zoom {
  transition: 0.3s;
}

.img-zoom:hover{
  transform: scale(1.02);
}

.header {
    margin-top: 100px;
}
</style>
