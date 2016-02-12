<div class="grid_4 bot-1" id="sidebar">
    <div class="art"></div>
    <h2 class="top-6 p2">Wisdom Points</h2>
    <p class="text-1 p3">Aristotle</p>
    <p>Outstanding platform to showcase unprivileged young talent."Education is the best provision for the journey to old age."</p>
    <p class="text-1 top-2 p3">Sir Francis Bacon</p>
    <p>"Knowledge is power."</p>
    <p class="text-1 top-2 p3">Atal Bihari Vajpayee</p>
    <p>"A real friend is someone who walks in when the rest of the world walks out."</p>
    <p class="text-1 top-2 p3">Steve Jobs</p>
    <p>"Opportunity may knock only once, but temptation leans on the doorbell."</p>
    <p class="text-1 top-2 p3">Napoleon Bonaparte</p>
    <p>"Ability is nothing without opportunity."</p>
    <p class="text-1 top-2 p3">Otto von Bismarck</p>
    <p>"Only a fool learns from his own mistakes. The wise man learns from the mistakes of others."</p>
    
</div>

<div class="grid_8">
    <div class="block-1 top-5">
        <div class="block-1-shadow">
            <h2 class="clr-6 p4">Our Gallery</h2>
            <div class="pag">
                <div class="img-pags">
                    <?php
                    $directory_path = "images/classes/";
                    $dir = opendir($directory_path);
                    $songlist = array();
                    while ($filename = readdir($dir)) {
                        if (preg_match("#.(jpg)$#i", $filename)) {
                            array_push($songlist, $filename);
                        }
                    }

                    foreach ($songlist as $key => $val) {
                        echo '<div class="box-1 last"> <a href="#" class="img-border"><img width="250" height="178" src="';
                        echo $directory_path . "/" . $val ;
                        echo '" alt=""></a>
                        <p class="text-2">&nbsp;</p>
                    </div>';
                    }
                    closedir($dir);
                    ?>
                </div>
            </div>
            <div class="clear"></div>
            <!--<div class="pad-2"> <a href="#" class="link-2">Full Gallery</a> </div>-->
        </div>
    </div>

