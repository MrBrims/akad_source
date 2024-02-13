<?php
$data = file_get_contents(DE_URI . '/template-parts/components/form/data/discipline.txt');
$data = explode("\r\n", $data);
?>
<label>
    <span style="color:#FF4E4D;font-weight:bold;">* </span>Wählen Sie eine Fachrichtung<span class="photo" data-title="Bitte wählen Sie die Fachrichtung Ihrer Arbeit aus – Sie können dazu die Suchleiste verwenden. Sollte die erforderliche Fachrichtung nicht vorhanden sein, wählen Sie bitte die Option „sonstige Fachrichtung” und geben Sie im Feld „Gewünschte Fachrichtung” zusätzliche Informationen an. Je mehr Informationen Sie eingeben, desto besser."> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
    <select class="form-control" name="discipline" required>
        <option value="">Wählen Sie eine Fachrichtung...</option>
        <?php
        foreach ($data as $key => $item) {
            if (strlen($item) === 1) {
                if ($key !== 0) {
                    echo '</optgroup>';
                }
                echo '<optgroup label="' . $item . '">';
            } else {
                echo '<option value="' . $item . '">' . $item . '</option>';
            }

            if ($item === end($data)) {
                echo '</optgroup>';
            }
        }
        ?>
    </select>
</label>