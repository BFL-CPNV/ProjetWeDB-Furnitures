<?php
/**
 * @file      lost.php
 * @brief     This view is designed to inform the user when he tries to navigate to a resource that doesn't exist
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Adam.GRUBER
 * @author    Updated by Bastien.FARDEL
 * @author    Updated by Kaarththigan.EAASWARALINGAM
 * @version   03-NOV-2020
 */

$title = 'Rent A Snow - Lost';

ob_start();
?>
    <section class="section_padding" style="text-align: center">
        <h2 style="color:red"><strong>We lost you on the way :(</strong></h2>
        <br>
        <a class="btn_2" href="index.php?action=home">Home</a>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>