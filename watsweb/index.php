<?php include_once "sign.php" ?>
<body>
    <div class="wrapper">
        <section class="konten">
            <h1 class="h1">Whatsweb</h1>
            <p class="p">WhatsWeb chat real time yang membantu anda terhubung dengan semua orang</p>
        </section>
        <section class="form signup">
            <header>Whatsweb</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                <div class="field input">
                    <label>first Name</label>
                    <input type="text" name="fname" placeholder="First name" required></input>
                </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last name" required></input>
                </div>
            </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your Email address" required></input>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required></input>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select image</label>
                    <input type="file" name="image" required></input>
                </div>
                <div class="field button">
                    <input type="submit" value="Signup"></input>
                </div>
                <div class="link">
                    Already sign up? 
                    <a href="login.php">Login now!</a>
                </div>
            </form>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>