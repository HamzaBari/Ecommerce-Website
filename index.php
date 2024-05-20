<?php
    // Include the PHP functions to be used on the page 
    include('common.php'); 
	
    // Output header and navigation 
    outputHeader("BasketOverflow - Home");
    outputNavbar();
?>


<!-- <===== BANNERS =====> -->
<section class="section-intro padding-y-sm mb-5 ">
    <div class="container">
        <img src="images/banner.png" class="img-fluid rounded">
    </div>
</section>

<!-- open the body -->
<?php openBody() ?>

<!-- ========================= LISTINGS ========================= -->

<div class="row justify-content-around">
    <article class="card p-3 m-3 col-md-3">
        <a href="#" class="h5 title">CPUs</a>
        <p>Explore our range of Intel and AMD CPUs</p>
    </article>
    <article class="card p-3 m-3 col-md-3">
        <a href="#" class="h5 title">Motherboards</a>
        <p>High-quality components and a variety of chipsets</p>
    </article>

    <article class="card p-3 m-3 col-md-3">
        <a href="#" class="h5 title">Memory</a>
        <p>High-speed DDR4 and DDR3 memory</p>
    </article>

    <article class="card p-3 m-3 col-md-3">
        <a href="#" class="h5 title">Storage</a>
        <p>We have both high-capacity HDDs and super-fast SSDs</p>
    </article>
    <article class="card p-3 m-3 col-md-3">
        <a href="#" class="h5 title">Graphics Cards</a>
        <p>Both high-end and budget friendly GPUs from both AMD and NVIDIA</p>
    </article>
    <article class="card p-3 m-3 col-md-3">
        <a href="#" class="h5 title">Network Cards</a>
        <p>High-bandwidth WiFi cards<br><br></p>
    </article>
</div>
</div>
<div class="container"></div>

<!-- ========================= HEADING ========================= -->
<main class="col-md-9 mx-auto">
    <p class="text-primary title h3 text-center m-3">Recommended Items</span>

        <!-- ========================= LISTINGS ========================= -->
        <article class="card p-3">
            <div class="row ">
                <!-- image -->
                <a class="col-md-3" href="#"><img class="product-image" src="images/products/p_id_2.webp"></a>
                <!-- title and description -->
                <div class="col-md-6 my-auto">
                    <a href="#" class="h5 title">AMD Ryzen 5 3600</a>
                    <p>AMD Ryzen™ 5 3600, AM4, Zen 2, 6 Core, 12 Thread, 3.6GHz, 4.2GHz Turbo, 32MB L3, PCIe 4.0, 65W,
                        CPU,
                        +Wraith Stealth</p>
                </div>
                <!-- listing price and add to basket button -->
                <aside class="col-md-3 my-auto">
                    <p class="price h3">£170.98</p><br>
                    <a href="#" class="btn btn-primary">Add to basket</a>
                </aside>
            </div>
        </article><br>

        <article class="card p-3">
            <div class="row ">
                <!-- image -->
                <a class="col-md-3" href="#"><img class="product-image" src="images/products/p_id_1.webp"></a>
                <!-- title and description -->
                <div class="col-md-6 my-auto">
                    <a href="#" class="h5 title"> AMD Ryzen 7 3700X</a>
                    <p>AMD Ryzen™ 7 3700X, AM4, Zen 2, 8 Core, 16 Thread, 3.6GHz, 4.4GHz Turbo, 32MB L3, PCIe 4.0, 65W,
                        CPU,+Wraith Prism</p>
                </div>
                <!-- listing price and add to basket button -->
                <aside class="col-md-3 my-auto">
                    <p class="price h3">£287.99</p><br>
                    <a href="#" class="btn btn-primary">Add to basket</a>
                </aside>
            </div>
        </article><br>

        <article class="card p-3">
            <div class="row ">
                <!-- image -->
                <a class="col-md-3" href="#"><img class="product-image" src="images/products/p_id_3.webp"></a>
                <!-- title and description -->
                <div class="col-md-6 my-auto">
                    <a href="#" class="h5 title">AMD Ryzen Threadripper 3960X</a>
                    <p>AMD Ryzen™ Threadripper 3960X, TRX4, Zen 2, 24 Core, 48 Thread, 3.8GHz, 4.5GHz Turbo, PCIe 4.0,
                        280W, CPU
                    </p>
                </div>
                <!-- listing price and add to basket button -->
                <aside class="col-md-3 my-auto">
                    <p class="price h3">£1,249.99</p><br>
                    <a href="#" class="btn btn-primary">Add to basket</a>
                </aside>
            </div>
        </article><br>
</main>

<!-- close body, output the footer, and end html -->
<?php outputFooter() ?>