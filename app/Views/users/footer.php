<footer class="justify-content-center">
    <div class="container-fluid">
        <div style="margin:0!important; padding:0!important;" class="row col-12 justify-content-center text-center">
            <ul class="col-10" id="footer-menu">
                <li>
                    <a class="col-lg-2 col-sm-12" href="<?php echo base_url('home') ?>">Home</a>
                </li>

                <li>
                    <a class="col-auto" href="<?php echo base_url('store') ?>">Store</a>
                </li>

                <li>
                    <a class="col-auto" href="<?php echo base_url('services') ?>">Services</a>
                </li>

                <li>
                    <a class="col-auto" href="<?php echo base_url('repairs') ?>">Repairs</a>
                </li>

                <li>
                    <a class="col-auto" href="<?php echo base_url('location') ?>">Location</a>
                </li>
            </ul>
        </div>


    </div>
</footer>









<!--Load JS dependancies after page loads -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-btn');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].className = "nav-active"
        }
    }

    $(document).ready(function() {



        let mainNav = document.getElementById("js-menu");
        let navBarToggle = document.getElementById("js-nav-toggle");
        let navBtn = document.getElementsByClassName("nav-btn");


        navBarToggle.addEventListener("click", function() {
            mainNav.classList.toggle("active");
        });


    });
</script>


</body>

</html>