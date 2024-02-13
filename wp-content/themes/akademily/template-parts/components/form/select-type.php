<?php
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$data = file_get_contents(DE_URI . '/template-parts/components/form/data/type.txt', false, stream_context_create($arrContextOptions));
// $data = file_get_contents(DE_URI . '/template-parts/components/form/data/type.txt');
$data = explode("\r\n", $data);
?>
<label style="margin-top:0 !important;">
    <span style="color:#FF4E4D;font-weight:bold;">* </span>Faсhrichtung / Thematik<span class="photo" data-title="Bitte wählen Sie die geforderte Art der Arbeit aus – Sie können dazu die Suchleiste verwenden. Wir bieten akademische Hilfe zu verschiedenen Auftragstypen an, von Essays bis hin zu Doktorarbeiten. Sollte keiner der aufgeführten Arbeitstypen passen, wählen Sie bitte die Option „sonstige Arbeit” und geben Sie zusätzliche Informationen in das Feld „Gewünschter Arbeitstyp” ein. Je mehr Informationen Sie eingeben, desto besser"> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
    <select class="form-control" name="type">
        <option value="">Faсhrichtung / Thematik...</option>
        <?php foreach ($data as $item) { ?>
            <option value="<?= $item; ?>"><?= $item; ?></option>
        <?php } ?>
    </select>
</label>