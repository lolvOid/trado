<div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>TRADO</h3>
                        <h3></h3>
                        <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="">SignUp</a></li>
                            <li><a href="blog">BLog</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                      <a href="about">  <h3>About Us</h3></a>
                        <ul>
                            <li><a href="about">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item"></div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright"
                            style="color:#373737;">Trado © 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ URL::asset('https://use.fontawesome.com/1744f3f671.js') }}"></script>
    <script src="{{ URL::asset('js/script.min.js') }}"></script>
    <script>

        window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
        </script>
</body>

</html>
  

