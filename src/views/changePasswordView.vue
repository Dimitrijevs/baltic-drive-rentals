<template>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="border rounded-5 p-4 bg-white shadow box-area">   
            <div>
                <div>
                    <form action="/" method="post">
                        <div class="input-group mb-3">
                            <input class="form-control form-control-lg bg-light fs-6" type="password" name="password" id="password" placeholder="Old Password" autocomplete="off" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="newPassword" name="newPassword" id="newPassword" class="form-control form-control-lg bg-light fs-6" placeholder="New Password" autocomplete="off" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg bg-light fs-6" placeholder="Repeat New Password" autocomplete="off" required>
                        </div>
                        <div class="input-group">
                            <input class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="submit" value="Change Password!" required>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>

</template>

<script>
</script>

<style>
</style>