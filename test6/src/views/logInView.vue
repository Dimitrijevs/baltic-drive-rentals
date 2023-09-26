<template>
    <div class="container">
        <div class="box form-box">
            <header>Log In Form</header>
            <form action="" method="post">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Log In!" required>
                </div>

                <div class="field form-reg">
                    Don't have account?<router-link to="/register-page">Sign up now!</router-link>
                </div>
            </form>
        </div>
    </div>
</template>

<style>
.container {
    width: 35%;
    margin: 10% auto;
    border-radius: 5px;
}

.container > .box > header {
    font-size: 3rem;
    font-weight: bold;
    text-align: center;
    margin: 15px 0;
}

.container > .box > form > .field {
    margin: 15px;
    font-size: 1.3rem;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
}

.container > .box > form > .field > input {
    width: 100%;
    padding: 8px 24px;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    margin-bottom: 20px;
}

.container > .box > form > .field > input[type=submit] {
    margin: 0;
    width: 100%;
    font-size: 1.5rem;
    background-color: var(--skin);
    border: 2px solid var(--skin);
    border: none;
    cursor: pointer;
    transition: 0.3s;
}

.container > .box > form > .field > input[type=submit]:hover {
    background-color: var(--white);
}

.container > .box > form > .form-reg {
    text-align: center;
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