<template>
    <!-- <h1 class="header-style text-center top fadeInTop">Log In Form</h1>
    <div class="container">
        <div class="box form-box">
            <form action="" method="post">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" v-bind:value="email" required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" v-bind:value="password" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Log In!" @click="logIn" required>
                </div>

                <div class="field form-reg">
                    Don't have account?<router-link to="/register-page">Sign up now!</router-link>
                </div>
            </form>
        </div>
    </div> -->


<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-4 bg-white shadow box-area">

        <!--------------------------- Left Box ----------------------------->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
            <div class="featured-image mb-3">
                <img :src="require('@/assets/login-register.png')" class="img-fluid pt-3 pb-2">
            </div>
            <p class="text-white fs-2">Be Verified</p>
            <p>Choto to tam tekst</p>
        </div> 

        <!-------------------- ------ Right Box ---------------------------->
        
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4 text-center">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="input-group mb-5">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                </div>
                <div class="row mt-auto">
                    <small>Don't have account? <a href="#">Sign Up</a></small>
                </div>
            </div>
        </div> 

    </div>
</div>
</template>

<script>
    // export default {
    //     data() {
    //         return {
    //             email: "",
    //             password: "",
    //         }
    //     }
    // }
</script>

<style scoped>
/* .container {
    width: 30%;
    margin: 4% auto 8%;
    border-radius: 8px;
}

.container > .box > form > .field {
    margin: 15px;
    font-size: 1.2rem;
    display: flex;
    flex-wrap: wrap;
}

.container > .box > form > .field > input {
    width: 100%;
    padding: 8px;
    font-size: 1rem;
    border: none;
    border-radius: 8px;
    margin: 4px 0 24px;
}

.container > .box > form > .field > input[type=submit] {
    margin: 0;
    width: 100%;
    font-size: 1.5rem;
    background-color: var(--skin);
    border: none;
    cursor: pointer;
    transition: 0.3s;
}

.container > .box > form > .field > input[type=submit]:hover {
    background-color: #fcd47d;
}

.container > .box > form > .form-reg {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.container > .box > form > .form-reg > a {
    margin-left: 10px;
    color: var(--skin);
} */
</style>