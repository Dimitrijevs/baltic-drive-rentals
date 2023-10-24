<template>
    <nav class="nav-bar">
      <router-link to="/"><img :src="require('@/assets/logo.png')" alt="Error"></router-link>
      <ul>
        <li class="nav-item"><router-link to="/history-page">History Page</router-link></li>
        <li class="nav-item"><router-link to="/rental-terms">Rental Terms</router-link></li>
        <li id="special"><router-link to="/our-car-list">Our Car List</router-link></li>
      </ul>
      <ul class="last-list">
        <li class="nav-item"><router-link to="/profile-page">Profile Page</router-link></li>
        <li class="nav-item"><router-link to="/log-in">Log in</router-link></li>
      </ul>
    </nav>
  </template>

<script>
export default {
  name: 'NavBar'
};
</script>

<style>
    .nav-bar {
        display: flex;
        width: 100%;
        justify-content: space-between;
        padding: 0 2%;
        background-color: var(--black);
        box-shadow: 0px 6px 16px 0px var(--grey);
        position: fixed;
        z-index: 2;
        top: 0;
    }

    .nav-bar > a {
        display: flex;
    }

    .nav-bar > a > img {
        width: 220px;
        margin-left: 12%;
    }

    .nav-bar > ul {
        display: flex;
        list-style: none;
        align-items: center;
        flex-wrap: wrap;
    }

    .nav-bar > ul > li{
        font-size: 1.2rem;
        padding: 10px;
    }

    .nav-bar > ul > li > a{
        text-decoration: none;
        color: #fff;
        padding: 4px 8px;
    }

    .nav-bar > ul > li > a:hover{
        text-decoration: underline;
    }

    .nav-bar > .last-list {
        padding-right: 40px;
    }
</style>