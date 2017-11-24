<?php
	$format[type] = 'format';
	$format[typefull] = 'By Format';
	$format[links] = array(array([link] => 'http://www.chipublib.org/browse/books/', 'text' => 'Books'),
		array('link' => 'http://www.chipublib.org/browse/ebooks/', 'text' => 'eBooks'),
		array('link' => 'http://www.chipublib.org/browse/audiobooks/', 'text' => 'Audiobooks'),
		array('link' => 'http://www.chipublib.org/browse/movies/', 'text' => 'Movies &amp; TV'),
		array('link' => 'http://www.chipublib.org/browse/music/', 'text' => 'Music'));
	$aud[type] = 'aud';
	$aud[typefull] = 'By Audience';
	$aud[links] = array(array('link' => 'http://www.chipublib.org/browse/kids/', 'text' => 'Kids'),
		array('link' => 'http://www.chipublib.org/browse/teens/', 'text' => 'Teens'));
	$more[type] = 'more'; 
	$more[typefull] = 'More'; 
	$more[links] = array(array('link' => 'http://www.chipublib.org/online-resources/', 'text' => 'Online Resources'),
		array('link' => 'http://www.chipublib.org/browse/jobs-small-business/', 'text' => 'Jobs &amp; Small Business'),
		array('link' => 'http://www.chipublib.org/browse/chicago-history/', 'text' => 'Chicago History'),
		array('link' => 'http://www.chipublib.org/archives-collections/', 'text' => 'Archival Collections'),
		array('link' => 'https://www.chipublib.org/browse_program/one-book-one-chicago/', 'text' => 'One Book, One Chicago'));
	$headerLinks = array($format, $aud, $more);
?>
<header>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="hidden-md-down col-lg-3">
				<div class="header-logo-img"><a href="https://www.chipublib.org/"><img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/logo.png?1506021413180" alt="" /></a></div>
				<div class="header-logo-text"><a href="Home.php">Digital Collections</a></div>
			</div>
			<div class="hidden-lg-up col-6">
				<div class="header-sm-img">
					<a href="https://www.chipublib.org/">
						<img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/mobile_logo.png?1505979997263" alt="" />
					</a>
				</div>
				<div class="header-sm-button" data-toggle="modal" data-target="#myModal"><i class="fa fa-bars"></i></div>
				<div class="header-sm-button light-left-border" onclick="javascript:location.href='https://chipublib.bibliocommons.com/events/search/index'"><i class="fa fa-calendar"></i></div>
			</div>
			<div class="col-3 col-lg-8 clearfix">
				<div class="header-search-collapsed" onclick="expandSearch()">
					<div class="header-search-collapsed-text hidden-sm-down">Search</div>
					<div class="header-search-collapsed-icon" ><i class="fa fa-search"></i></div>
				</div>
				<div class="header-search-expanded hide">
					<div class="header-search-expanded-text hidden-lg-down" >Search the Digital Collections</div>
					<div class="header-search-expanded-text hidden-xl-up" >Search</div>
					<div class="header-search-expanded-input"><input type="text" name="search-query" id="search-input"></input>></div>
					<div class="header-search-expanded-icon"><i class="fa fa-search" onclick="searchQuery()" ></i></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="hidden-md-down col-lg-12">
				<div class="header-bottom">
					<div class="header-lg-button" onclick="showDropdown()">Browse <i class="fa fa-angle-down"></i></div>
					<div class="header-lg-button" onclick="javascript:location.href='https://chipublib.bibliocommons.com/events/search/index'"><i class="fa fa-calendar"></i> Events</div>
				</div>
			</div>
		</div>

	</div>
</header>
<div class="container header-search-dropped hide clearfix" >
	<div class="header-search-dropped-close"><i class="fa fa-times fa-2x" onclick="hideSearch()"></i></div>
	<div class="row header-search-dropped-search no-gutters align-items-center clearfix">
		<div class="col-2 header-search-dropped-text">
			Search
		</div>
		<div class="col-8 header-search-dropped-input">
			<input type="text" name="search-query2" id="search-input2"></input>
		</div>
		<div class="col-1 header-search-dropped-icon">
			<i class="fa fa-search" onclick="searchQuery2()"></i>
		</div>
		<br />
		<span class="header-search-dropped-adv"><a href="http://digital.chipublib.org/digital/search/advanced">Advanced Search</a></span>
	</div>
</div>
<section class="header-browse-dropdown-wrapper" style="display: none;" onclick="showDropdown()">
	<div class="container header-browse-dropdown">
		<div class="row">
			<div class="col-lg-12 hidden-md-down">
				<div class="header-browse-dropdown-browse"><h2>Browse</h2></div>
				<?php 
					foreach ($headerLinks as $key => $val){
						echo '<div class="header-browse-dropdown-section header-browse-dropdown-' . $val[type] . '"><span class="header-browse-dropdown-title">' . $val[typefull] . '</span><ul class="list-group">';
						foreach ($val[links] as $k => $v) {
							echo '<li class="list-group-item header-dropdown-listitem"><a href="' . $v[link] . '">' . $v[text] . '</a></li>';
						}
						echo '</ul></div>';
					}
				?>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header">
	  <h5 class="modal-title" id="exampleModalLabel">Browse <i class="fa fa-angle-down"></i></h5>
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<div class="modal-body">
		<?php 
			foreach ($headerLinks as $key => $val){
				echo '<h4 class="header-modal-listheader">' . $val[typefull] . '</h4><ul class="list-group">';
				foreach ($val[links] as $k => $v) {
					echo '<li class="list-group-item header-modal-listitem"><a href="' . $v[link] . '">' . $v[text] . '</a></li>';
				}
				echo '</ul>';
			}
		?>
	</div>
  </div>
</div>
</div>