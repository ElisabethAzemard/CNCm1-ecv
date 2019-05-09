<div id="list_events">

    <?php
	    $json = file_get_contents('./assets/json/share-events.json');
        $objEvents = json_decode($json);

        function sortFunction( $a, $b ) {
            return strtotime(substr( $a->startDate, 0, 10)) - strtotime(substr( $b->startDate, 0, 10));
        }
        usort($objEvents, "sortFunction");

        $date = 0;
        foreach ($objEvents as $event) {
            if ( substr( $event->startDate, 0, 10) != $date ) {
                $date = substr( $event->startDate, 0, 10);
                ?>
                <h2> Evenement du <?= ucfirst(strftime('%A %d %B %Y', strtotime($event->startDate))); ?></h2>
                
                <?php
            }
            ?>
                <ul>
                    <li>
                        <div>
                            <span>date</span>
                            <p><?= substr( $event->startDate, 0, 5) ?></p>
                        </div>

                        <div>
                            <span>heure</span>
                            <p><?= substr( $event->startDate, 10, 6) ?> - <?= substr( $event->endDate, 10, 6) ?></p>
                        </div>

                        <div>
                            <span>titre de l'evenement</span>
                            <p> <?= $event->name ?></p>
                        </div>
                    </li>
                </ul>
            <?php
            
        }

    ?>
</div>