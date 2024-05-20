<?php
    // Include the PHP functions to be used on the page 
    include('common.php'); 
	
    // Output header and navigation 
    outputHeader("BasketOverflow - Login");
    outputNavbar();
?>

<!-- open the body -->
<?php openBody() ?>

<!-- ========================= HEADING ========================= -->
<div class="row">

    <header class="mb-3 pb-3 m-1 col-md-12">
        <p class="text-primary title h5 text-center">Login or Register</p>
    </header>

    <!-- ========================= LISTINGS ========================= -->
    <main class="col-md-12">

        <article class="card p-5">
            <p class="text-primary title h4">Login</p>
            <div class="form-group">
                <label for="LoginEmail">Email address</label>
                <input type="email" class="form-control" id="InputEmail" placeholder="Enter email ...">
            </div>
            <div class="form-group">
                <label for="LoginPassword">Password</label>
                <input type="password" class="form-control" id="InputPassword" placeholder="Enter Password ...">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="LoginCheck">
                <label class="form-check-label" for="LoginCheck">Remember me</label>
                <br><br>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </article>

    <br>

    <article class="card p-5">
        <p class="text-primary title h4">Register</p></br>

            <label for="CustomerID">Customer ID</label>
            <input type="number" id="customer_ID" class="form-control" placeholder="Enter customer id ..." required>
            </br>

            <label for="email">email</label>
            <input type="email" id="email" class="form-control" placeholder="Enter email ..." required>
            </br>

            <label for="password">password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter password ..." required>
            </br>
            
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" class="form-control" placeholder="Enter firstname ..." required>
            </br>

            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" class="form-control" placeholder="Enter lastname ..." required>
            </br>

            <label for="phonenumber">phonenumber</label>
            <input type="tel" id="phonenumber" class="form-control" placeholder="Enter phonenumber ..." required>
            </br>

            <label for="AddressLine1">Address Line 1</label>
            <input type="text" id="AddressLine1" class="form-control" placeholder="Enter Address Line 1 ..." required>
            </br>

            <label for="AdressLine2">Address Line 2</label>
            <input type="text" id="AdressLine2" class="form-control" placeholder="EnterAddress Line 2 ..." required>
            </br>

            <label for="City">City</label>
            <input type="text" id="City" class="form-control" placeholder="Enter City ..." required>
            </br>

            <label for="Postcode">Postcode</label>
            <input type="text" id="Postcode" class="form-control" placeholder="Enter Postcode ..." required>
            </br>
            </br>

            <button class="btn btn-primary" onclick="register()">Submit</button></br>
        
        
           <p><span id="ServerResponse"></span></p>

    </article>  
  
        
    <script src="script.js"></script>

</main>

<!-- close body, output the footer, and end html -->
<?php outputFooter() ?>