<!-- FOOTER -->
<footer id="pagefooter" class="bg-light text-dark text-center py-4">
        <p>
            <a href="index.php" class="text-dark mx-2">Home</a>
            <a href="games.php" class="text-dark mx-2">Games</a>
            <a href="aboutus.php" class="text-dark mx-2">About Us</a>
            <a href="contactus.php" class="text-dark mx-2">Contact Us</a>
        </p>
        <p>
            Jacob K &copy; <span id="year" class="mr-4"></span>
            <i class="fab fa-facebook-square fa-2x"></i>
            <i class="fab fa-twitter-square fa-2x"></i>
        </p>
    </footer>

    <!-- JavaScript scripts-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Own JS -->
    <script>
        let date = new Date();
        let year = date.getFullYear();
        $("#year").html(year);
    </script>
</body>

</html>