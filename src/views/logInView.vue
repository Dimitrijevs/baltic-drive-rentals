<template>
    <h1 class="header-style text-center top">Log In Form</h1>
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: "",
                password: "",
            }
        }
    }
</script>

<style>
.top {
    margin-top: 10%;
}

.container {
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
}
</style>