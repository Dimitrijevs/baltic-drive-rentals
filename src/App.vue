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
    --white: #dcdcdc;
    --white-white: #e9e9e8;
    --skin: #E0BC6C;
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

.header-style {
  font-size: 3.2rem;
  padding-top: 20px;
  margin-bottom: 12px;
  transition: 0.3s;
  cursor: pointer;
}

.header-style:hover {
  color: var(--skin);
}

.text-center {
  text-align: center;
}

.img-zoom {
  opacity: 0.9;
  transition: 0.3s;
}

.img-zoom:hover{
  opacity: 1;
  transform: scale(1.015);
}

.gradient {
  background: rgb(255,255,255);
  background: linear-gradient(160deg, rgba(255,255,255,1) 15%, rgba(242,212,146,1) 100%);
}

.top {
    margin-top: 8%;
}

.bottom {
    margin-bottom: 8%;
}

.fadeInRight {
    animation: fadeInRight 2s ease;
}

@keyframes fadeInRight {
    from {
      opacity: 0;
      transform: translateX(100%);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
}

.fadeInTop {
    animation: fadeInTop 2s ease;
}

@keyframes fadeInTop {
    from {
      opacity: 0;
      transform: translateY(-100%);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
}
</style>
