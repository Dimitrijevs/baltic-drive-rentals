<template>
    <h1 class="header-style text-center top">Registration Form</h1>
    <div class="container">
        <div class="box form-box">
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Sign Up!" required>
                </div>

                <div class="field form-reg">
                    Already have account?<router-link to="/log-in">Sign in now!</router-link>
                </div>
            </form>
        </div>
    </div>
</template>

<style>
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