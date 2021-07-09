<?php include_once "log.php";?>
<body>
    <div class="wrapper">
        <section class="konten">
            <h1 class="h1">Whatsweb</h1>
            <p class="p">WhatsWeb chat real time yang membantu anda terhubung dengan semua orang</p>
        </section>
        <section class="form login">
            <header>Whatsweb</header>
            <form action="#" >
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your Email address"></input>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password"></input>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Login"></input>
                </div>
                <div class="link">
                    Don't have account? 
                    <a href="index.php">Signup now!</a>
                </div>
            </form>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>