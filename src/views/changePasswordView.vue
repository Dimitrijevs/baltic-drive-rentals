<template>
    <h1 class="header-style text-center top fadeInTop">Change Password</h1>
    <div class="container">
        <div class="box form-box">
            <form action="" method="post">
                <div class="field">
                    <label for="old-password">Old Password</label>
                    <input type="password" name="old-password" id="old-password" v-bind:value="oldPassword" required>
                </div>

                <div class="field">
                    <label for="new-password">New Password</label>
                    <input type="password" name="new-password" id="new-password" v-bind:value="newPassword" required>
                </div>

                <div class="field">
                    <label for="new-password-repeat">Repeat New Password</label>
                    <input type="password" name="new-password-repeat" id="new-password-repeat" v-bind:value="newPasswordRepeat" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Change It!" @click="changePassword" required>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                oldPassword: "",
                newPassword: "",
                newPasswordRepeat: "",
            }
        }
    }
</script>

<style scoped>
</style>