<template>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-4 bg-white shadow box-area">

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img :src="require('@/assets/login-register.png')" class="img-fluid pt-3 pb-2">
                </div>
                <p class="text-white h3 mb-2">Be Verified</p>
                <p class="text-white text-center mt-0 px-3">Level up your rental experience! Get verified and unlock the door to our sleek fleet of cars.</p>
            </div> 
            
            <div class="col-md-6 right-box">
                <div class="row align-items-center mb-5">
                    <div class="header-text mb-4 text-center">
                            <h2>Hello, Again</h2>
                            <p>We are happy to have you back.</p>
                    </div>
                    <form action="/" method="post">
                        <div class="input-group mb-3">
                            <input class="form-control form-control-lg bg-light fs-6" type="email" name="email" id="email" placeholder="Email address" autocomplete="off" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" autocomplete="off" required>
                        </div>
                        <div class="input-group mb-5">
                            <input class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="submit" value="Log In!" required>
                        </div>
                    </form>
                </div>
                <p class="d-flex justify-content-end mb-0 pt-5">Don't have account?<a class="ps-1" href="/register">Sign Up</a></p>
            </div> 
        </div>
    </div>

</template>

<script>
</script>

<style>
</style>