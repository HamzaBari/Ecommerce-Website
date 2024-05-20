<?php
    // Include the PHP functions to be used on the page 
    include('common.php'); 
	
    // Output header and navigation 
    outputHeader("BasketOverflow - Login");
    outputNavbar();
?>

<!-- open the body -->
<?php openBody() ?>

<header class="mb-3 pb-3 m-1 col-md-12">
    <p class="text-primary title h5 text-center">Login</p>
</header>

<article class="card p-5">
    <p id="loginResponse">
        <p class="text-primary title h4">Login</p><br>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email ...">
            <br>
            <label for="LoginPassword">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password ...">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" onclick="userLogin()">Login</button>
    </p>
    <p style="color: red" id="errorMessage"></p>
</article>

<script src="login-script.js"></script>

<!-- close body, output the footer, and end html -->
<?php outputFooter() ?>