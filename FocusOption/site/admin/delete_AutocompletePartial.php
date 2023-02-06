<?php
    
    $arrAffiliates = getAllAffiliates();
?>
<style>
    .custom-combobox {
        position: relative;
        display: inline-block;
    }
    .custom-combobox-toggle {
        position: absolute;
        top: 0;
        bottom: 0;
        margin-left: -1px;
        padding: 0;
    }
    .custom-combobox-input {
        margin: 0;
        padding: 5px 10px;
    }
</style>
<div class="ui-widget">
    <select id="combobox"  style="width: 213px;">
        <?php echo $arrAffiliates; ?>
    </select>
</div>
<script src="js/autocomplete.js"></script>
