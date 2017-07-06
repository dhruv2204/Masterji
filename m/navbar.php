<?php if(!defined('access'))
{
    header('Location: http://masterjimob.dhruvsrivastav.com');
}?>
	<strong><nav style="font-family:Chelsea;" class='navbar navbar-default navbar-fixed-top'>
		<div class='container'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.nav-collapse'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span> 
					<span class='icon-bar'></span> 
				</button>
				<a id="br" class='navbar-brand' href='index.php'>masterji</a>
			</div>
			<div class='collapse nav-collapse navbar-collapse' id='myNavbar'>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='#about'>ABOUT</a></li>
					<li><a href='#branch'>BRANCH</a></li>
					<li><a href='#contact'>CONTACT</a></li>
					
				</ul>
			</div>
		</div>
	</nav></strong>
<script>
$('.nav-collapse').click('li', function() {
  $('.nav-collapse').collapse('hide');
});
document.getElementById("br").onclick = function () {
    location.href = "http://masterjimob.dhruvsrivastav.com/index.php";
};
</script>
