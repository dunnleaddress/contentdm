<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Collections | Chicago Public Library</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/a768f4e0c8.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="imagesloaded.pkgd.min.js"></script>
    <script src="cpldc.js"></script>
    <link rel="stylesheet" href="cpldc.css" >
<style>
    div {
        /* border: 1px solid black !important; */
    }
</style>
</head>
<body>
    <?php 
    include 'header.html';
    $PAGE_TYPE = 'home';
    $cards = array ();

    $cards[AfAm][title] =     'African American';
    $cards[AfAm][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cr/10/default.jpg';
    $cards[AfAm][category] =  'Chicago History | Culture';
    $cards[AfAm][copy] =      'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
    $cards[AfAm][link] =      'AfAm.php';

    $cards[ChicagoExaminer][title] =     'Chicago Examiner';
    $cards[ChicagoExaminer][pic] =       'default.jpg';
    $cards[ChicagoExaminer][category] =  'Chicago History | Newspapers';
    $cards[ChicagoExaminer][copy] =      'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
    $cards[ChicagoExaminer][link] =      'ChicagoExaminer.php';

    $cards[HW][title] =                 'Remembering Harold Washington';
    $cards[HW][pic] =                   'http://digital.chipublib.org/digital/image/rhwc/thumbnail';
    $cards[HW][category] =              'Chicago History';
    $cards[HW][copy] =                  'The first African American mayor of Chicago, serving from 1983 to 1987, and his importance in the city’s history.';
    $cards[HW][link] =                  'HaroldWashington.php';
    
    $cards[LibEd][title] =     'Libraries &amp; Education';
    $cards[LibEd][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/dtd/167/default.jpg';
    $cards[LibEd][category] =  'Education';
    $cards[LibEd][copy] =      'Various content about libraries and education';
    $cards[LibEd][link] =      'LibEd.php';

    $cards[Parks][title] =     'Parks';
    $cards[Parks][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1539/default.jpg';
    $cards[Parks][category] =  'Parks';
    $cards[Parks][copy] =      'Various content about parks and such';
    $cards[Parks][link] =      'Parks.php';

    $cards[Theater][title] =            'Chicago Theater Collection';
    $cards[Theater][pic] =              'http://digital.chipublib.org/digital/image/CPB01/thumbnail';
    $cards[Theater][category] =         'Arts &amp; Literature';
    $cards[Theater][copy] =             'Playbills and programs for drama, opera, vaudeville, dance and music at early Chicago theaters, 1848-1922';
    $cards[Theater][link] =             'Theater.php';
    
    $cards[MP][title] =                   'Millennium Park';
    $cards[MP][pic] =                     'http://digital.chipublib.org/digital/image/mpu/thumbnail';
    $cards[MP][category] =                'Parks';
    $cards[MP][copy] =                    'Transformation from rail yard to dynamic urban park.';
    $cards[MP][link] =                    'MillenniumPark.php';
    
    $cards[CR][title] =                   'Chicago Renaissance';
    $cards[CR][pic] =                     'http://digital.chipublib.org/digital/image/cr/thumbnail';
    $cards[CR][category] =                'African American | Arts &amp; Literature';
    $cards[CR][copy] =                    'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
    $cards[CR][link] =                    'ChicagoRen.php';
    
    $cards[Sewers][title] =                   'Chicago&rsquo;s Sewers';
    $cards[Sewers][pic] =                     'http://digital.chipublib.org/digital/image/dtd/thumbnail';
    $cards[Sewers][category] =                'Architecture';
    $cards[Sewers][copy] =                    'Photographs of sewer systems and passageways from 1925-1949 offer a rare look at the underbelly of Chicago';
    $cards[Sewers][link] =                    'Sewers.php';
    
    $cards[RWLV][title] =                   'Ravenswood-Lake View Community Collection';
    $cards[RWLV][pic] =                     'http://digital.chipublib.org/digital/image/rvw/thumbnail';
    $cards[RWLV][category] =                'Parks';
    $cards[RWLV][copy] =                    'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s';
    $cards[RWLV][link] =                    'RWLV.php';
    
    $cards[CivilWar][title] =     'Civil War';
    $cards[CivilWar][pic] =       'http://digital.chipublib.org/digital/image/wha/thumbnail';
    $cards[CivilWar][category] =  'Military';
    $cards[CivilWar][copy] =      'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
    $cards[CivilWar][link] =      'CivilWar.php';

    $cards[CPL][title] =     'Chicago Public Library';
    $cards[CPL][pic] =       'http://digital.chipublib.org/digital/image/woop/thumbnail';
    $cards[CPL][category] =  'Architecture | Education';
    $cards[CPL][copy] =      'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
    $cards[CPL][link] =      'CPL.php';

    $cards[RK][title] =     'Robert W. Krueger';
    $cards[RK][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg';
    $cards[RK][category] =  'Neighborhoods';
    $cards[RK][copy] =      'Local photographer Robert Krueger documented Chicago’s North Side with photographs of community events, buildings, and people.';
    $cards[RK][link] =      'Krueger.php';

    $cards[EB][title] =     'Esther Barlow';
    $cards[EB][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/bar/43/default.jpg';
    $cards[EB][category] =  'Education';
    $cards[EB][copy] =      'Family photographs of Esther Barlow and images of her work at Hild Regional Library and Lake View Branch Library from 1927-1976.';
    $cards[EB][link] =      'Barlow.php';

    $cards[EB][title] =     'Henry D. Green';
    $cards[EB][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg';
    $cards[EB][category] =  'Neighborhoods';
    $cards[EB][copy] =      'Photographs by Henry Green of businesses, community groups, neighborhood celebrations, and school events on Chicago’s North Side, 1943-1951.';
    $cards[EB][link] =      'Green.php';

    $cards[EB][title] =     'Neighborhoods';
    $cards[EB][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cfc/138/default.jpg';
    //$cards[EB][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cfc/104/default.jpg'; //alternate
    $cards[EB][category] =  'Neighborhoods';
    $cards[EB][copy] =      'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to present';
    $cards[EB][link] =      'Neighborhoods.php';

    ?>
    <main class="PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
        <?php include 'sidebar.php';?>
        <div class="main-container-collapsible">
            <div class="grid">
                <?php include 'content-card.php'; ?>
            </div>
        </div>  
    </main>
    <?php include 'footer.html'; ?>
    <script>
    	// Masonry jQuery
	var $grid = $('.grid').masonry({
		gutter: 15,
        itemSelector: '.card',
        fitWidth: true
	});
	$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
	});
	</script>
</body>
</html>