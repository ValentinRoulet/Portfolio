<?php
//Définition du fudeau horaire
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');

// Chargement des fichier css de grocery
if (isset($output)) {
    foreach ($output->css_files as $file) {
        echo "<link type='text/css' rel='stylesheet' href='" . $file . "'/>";
    }
}

foreach ($scripts as $script) {




    //----------------------------------------------------------------------------------------//
    //------------------------------------Animation Scroll------------------------------------------//
    //----------------------------------------------------------------------------------------//
    /*
	if ($script == 'animScroll'){
		echo '<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>';
        echo '<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/PixiPlugin.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/tweene/0.5.11/tweene-all.min.js"></script>';
        echo '<script src="https://assets.codepen.io/16327/SplitText3.min.js"></script>';
        echo '<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>';
        echo '<script type="text/javascript" src="..\..\..\assets\JavaScript\AnimationScroll.js"></script>';
	}
    
    //----------------------------------------------------------------------------------------//
    //------------------------------------framwork css bulma------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'bulma'){
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">';
	}
*/

    //----------------------------------------------------------------------------------------//
    //------------------------------------framwork css bulma------------------------------------------//
    //----------------------------------------------------------------------------------------//
    if ($script == 'cssHome') {
        echo '<link rel="stylesheet" href="../../../assets/home/home.css">';
    }

    if ($script == 'FontAwesome') {
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">';
    }

    if ($script == 'Logo') {
        echo '<script type="text/javascript" src="..\..\..\assets\home/logo.js"></script>';
    }
}
?>
<style>
body {
    /*correction bug ios iframe responsive*/
    max-width: 100vw !important;
}

.dataTables_scrollBody thead tr[role="row"] {
    /*empèche affichage 2ème ligne de recherche dans tableaux*/
    visibility: collapse !important;
}
</style>
</head>

<body>