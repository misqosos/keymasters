<style>
    <?php include("products.css") ?>
</style>

<div class="products-page-wrapper">
    <div class="products-title" id="products-title">
        Our products
    </div>
    <div class="products-wrapper" id="products-wrapper">
        <div class="product-wrapper">
            <div class="key-product" id="joy" onclick="openProduct(this)">
                <img src="assets/images/key-joy.png" alt="happy">
            </div>
            <label class="product-label">Key of joy</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="happiness" onclick="openProduct(this)">
                <img src="assets/images/key-happiness.png" alt="happy">
            </div>
            <label class="product-label">Key of happiness</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="magic" onclick="openProduct(this)">
                <img src="assets/images/key-magic.png" alt="happy">
            </div>
            <label class="product-label">Key of magic</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="power" onclick="openProduct(this)">
                <img src="assets/images/key-power.png" alt="happy">
            </div>
            <label class="product-label">Key of power</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="integrity" onclick="openProduct(this)">
                <img src="assets/images/key-integrity.png" alt="happy">
            </div>
            <label class="product-label">Key of integrity</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="knowledge" onclick="openProduct(this)">
                <img src="assets/images/key-knowledge.png" alt="happy">
            </div>
            <label class="product-label">Key of knowledge</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="wisdom" onclick="openProduct(this)">
                <img src="assets/images/key-wisdom.png" alt="happy">
            </div>
            <label class="product-label">Key of wisdom</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="strength" onclick="openProduct(this)">
                <img src="assets/images/key-strength.png" alt="happy">
            </div>
            <label class="product-label">Key of strength</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="purity" onclick="openProduct(this)">
                <img src="assets/images/key-purity.png" alt="happy">
            </div>
            <label class="product-label">Key of purity</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="wealth" onclick="openProduct(this)">
                <img src="assets/images/key-wealth.png" alt="happy">
            </div>
            <label class="product-label">Key of wealth</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="eternity" onclick="openProduct(this)">
                <img src="assets/images/key-eternity.png" alt="happy">
            </div>
            <label class="product-label">Key of eternity</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="youthness" onclick="openProduct(this)">
                <img src="assets/images/key-youthness.png" alt="happy">
            </div>
            <label class="product-label">Key of youthness</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="beauty" onclick="openProduct(this)">
                <img src="assets/images/key-beauty.png" alt="happy">
            </div>
            <label class="product-label">Key of beauty</label>
        </div>
        <div class="product-wrapper">
            <div class="key-product" id="immortality" onclick="openProduct(this)">
                <img src="assets/images/key-immortality.png" alt="happy">
            </div>
            <label class="product-label">Key of immortality</label>
        </div>

    </div>

    <div id="highlighted-product" class="highlighted-product">
        <div onclick="closeImage()" class="closebtn">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <div class="expanded-product" id="expanded-product">
            <div id="product-label" style="margin-top: 1vw; font-size: 1.5vw; font-weight: bolder;"></div>
            <img src="" alt="happy" id="product-image">
            <div style="margin-top: 6vw; text-align: left; margin-left: 2vw; font-size: 1vw;"><label style="font-weight: bolder;">PRICE</label> : One serious decision in life</div>
            <div style="margin-top: 1vw; text-align: left; margin-left: 2vw; font-size: 1vw;"><label style="font-weight: bolder;">LASTING</label> : Forever</div>
        </div>
    </div>

</div>

<script>
        
    function openProduct(product) {
        var expandedProduct = document.getElementById("highlighted-product");

        document.getElementById("products-wrapper").style.opacity = 0.1;
        document.getElementById("products-title").style.opacity = 0.1;

        expandedProduct.style.display = 'flex';
        document.getElementById("product-image").src = "assets/images/key-"+product.id+".png";
        document.getElementById("product-label").innerHTML = "Key of "+product.id;


    }

    function closeImage() {
        document.getElementById("highlighted-product").style.display='none';
        document.getElementById("products-wrapper").style.opacity = 1;
        document.getElementById("products-title").style.opacity = 1;
    }
</script>