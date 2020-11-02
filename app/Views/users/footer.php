<h1>This is the footer</h1>










<!--Load JS dependancies after page loads -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        console.log("ready!");
        let mainNav = document.getElementById("js-menu");
        let navBarToggle = document.getElementById("js-nav-toggle");
        navBarToggle.addEventListener("click", function() {
            mainNav.classList.toggle("active");
        });

        var fakeLocation = document.location;

        $('.nav a').each(function() {
        // get the absolute URL from the <a> element:
        var href = this.href,
            // get the current page and file-type:
            pageAndFile = href.split('/').pop();
        // if the location ends with the pageAndFile found in
        // the current <a> element (using String.prototype.endsWith())
        // we add the 'active' class-name:
        if (fakeLocation.endsWith(pageAndFile)) {
            $(this).closest('a').addClass('nav-active');
        }
        });
    });

    
</script>
</body>

</html>