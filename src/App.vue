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
    --skin: #f8c965;
    --black: #0E0E0E;
    --grey: #7a7a7a;
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
  transition: 0.3s;
}

.img-zoom:hover{
  transform: scale(1.02);
}

.gradient {
  background: rgb(233,233,232);
  background: linear-gradient(180deg, rgba(233,233,232,1) 20%, rgba(255,249,212,1) 100%);
}

.top {
    margin-top: 8%;
}

.bottom {
    margin-bottom: 8%;
}

.radius-8px {
  border-radius: 8px;
}

.fadeInTop {
    animation: fadeInTop 1.2s ease;
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

.a-link::before {
  content: "";
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #fff;
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.a-link:hover::before {
  transform: scaleX(1);
}
</style>
