<?php
$isLocalhost = false;

if ($_SERVER['HTTP_HOST'] === 'localhost' || substr($_SERVER['HTTP_HOST'], 0, 9) === '127.0.0.1' || substr($_SERVER['HTTP_HOST'], 0, 3) === '::1') {
    $isLocalhost = true;
}
?>

<?php if (!$isLocalhost) : ?>
    <div class="map">
        <iframe id="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.380851714367!2d123.32140047593249!3d13.816154695798664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1e44985761979%3A0xdb90288159aa3aa0!2sTinambac%20Market!5e0!3m2!1sen!2sph!4v1701404147511!5m2!1sen!2sph" style="border:0"></iframe>
    </div>
<?php else : ?>
    <img id="offline-image" src="<?= base_url() ?>dist/images/offline_map.png" alt="Offline Image" style="width: 100%;">
<?php endif ?>