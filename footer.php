<!-- Footer -->
        <div class="footer">BSocial
        </div>
         <script src="js/vendor.min.js"></script>

    <!-- App Scripts Bundle -->
    <script src="js/scripts.min.js"></script>

<script type="">
$(document).ready(function() {
	var loc=window.location.href;
	console.log(loc.indexOf('profile.php'));
	if(loc.indexOf('profile.php')!=-1){
$('.mymedia').attr('style', function(i,s) { return s + 'width: 40px !important;' });
//$('.gridalicious img').css('width','40px');

$('.mypost').attr('style', function(i,s) { return s + 'width: 80px !important;' });
}
})

</script>



        <!-- // Footer -->