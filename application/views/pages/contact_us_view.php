<?php
$isLocalhost = false;

if ($_SERVER['HTTP_HOST'] === 'localhost' || substr($_SERVER['HTTP_HOST'], 0, 9) === '127.0.0.1' || substr($_SERVER['HTTP_HOST'], 0, 3) === '::1') {
    $isLocalhost = true;
}
?>

<?php if (!$isLocalhost) : ?>
    <div class="map">
        <iframe id="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0102160563115!2d123.17512443102692!3d13.596188042484982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a18c8420312c83%3A0x983350eb68bffa61!2sMunicipality%20of%20Milaor!5e0!3m2!1sen!2ssg!4v1705586569877!5m2!1sen!2ssg" style="border:0"></iframe>
    </div>
<?php else : ?>
    <img id="offline-image" src="<?= base_url() ?>dist/images/offline_map.png" alt="Offline Image" style="width: 100%;">
<?php endif ?>