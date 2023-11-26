<template>
  <nav id="nav-bar" class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <router-link to="/" class="navbar-brand text-warning">Baltic Drive Rentals</router-link>

          <div class="collapse navbar-collapse">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item d-flex align-items-center mx-2">
                    <i class="bi bi-clock-history text-white"></i><router-link to="/history-page" class="nav-link p-1">Our History</router-link>
                  </li>

                  <li class="nav-item d-flex align-items-center mx-2">
                    <i class="bi bi-file-earmark-ruled text-white"></i><router-link to="/rental-terms" class="nav-link p-1">Rental Terms</router-link>
                  </li>

                  <li class="nav-item d-flex align-items-center mx-2">
                    <i class="bi bi-car-front-fill text-white"></i><router-link to="/our-car-list" class="nav-link p-1">Our Car List</router-link>
                  </li>

                  <li class="nav-item d-flex align-items-center mx-2">
                    <i class="bi bi-person-circle text-white ms-5"></i><router-link to="/profile-page" class="nav-link p-1">Profile Page</router-link>
                  </li>

                  <li class="nav-item d-flex align-items-center mx-2">
                    <i class="bi bi-box-arrow-in-right text-white"></i><router-link to="/log-in" class="nav-link p-1">Log in</router-link>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
</template>

<script>
export default {
  name: 'NavBar'
};
</script>

<style>
</style>