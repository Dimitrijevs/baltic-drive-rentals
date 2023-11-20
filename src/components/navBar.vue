<template>
    <nav class="nav-bar">
      <router-link to="/"><img :src="require('@/assets/logo.png')" alt="Error"></router-link>
      <ul>
        <li class="nav-item"> <img :src="require('@/assets/icons/history.png')" alt=""> <router-link to="/history-page" class="a-link">History Page</router-link></li>
        <li class="nav-item"> <img :src="require('@/assets/icons/rules.png')" alt=""> <router-link to="/rental-terms" class="a-link">Rental Terms</router-link></li>
        <li id="special"> <img :src="require('@/assets/icons/car.png')" alt=""> <router-link to="/our-car-list" class="a-link">Our Car List</router-link></li>
      </ul>
      <ul class="last-list">
        <li class="nav-item"> <img :src="require('@/assets/icons/user.png')" alt=""> <router-link to="/profile-page" class="a-link">Profile Page</router-link></li>
        <li class="nav-item"> <img :src="require('@/assets/icons/log-in.png')" alt=""> <router-link to="/log-in" class="a-link">Log in</router-link></li>
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
        height: 80px;
        margin-left: 16%;
    }

    .nav-bar > ul {
        display: flex;
        list-style: none;
        align-items: center;
        flex-wrap: wrap;
    }

    .nav-bar ul li{
        font-size: 1.2rem;
        padding: 10px;
        display: flex;
    }

    .nav-bar ul li img {
      height: 28px;
    }

    .nav-bar > ul > li > a{
        text-decoration: none;
        position: relative;
        color: #fff;
        padding: 4px 8px;
    }

    .nav-bar > .last-list {
        padding-right: 40px;
    }
</style>