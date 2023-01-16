<?php

function gp_cuisine_add_form_fields() {
    ?>
      <div class="form-field">
        <label><?php _e('More info URL', 'g263-plus'); ?></label>
        <input type="text" name="gp_more_info_url"/>
        <p><?php _e('A URL a loser can click to learn more about this stuff...', 'g263-plus'); ?></p>
      </div>  
    <?php
}

function gp_cuisine_edit_form_fields($term) {
  $url = get_term_meta(
    $term->term_id, 'more_info_url', true
  );

  ?>
    <tr class="form-field">
        <th>
          <label><?php _e('More info URL', 'g263-plus'); ?></label>
        </th>
        <td>
          <input type="text" name="gp_more_info_url"
            value="<?php echo $url; ?>" />
          <p class="description"><?php _e('A URL a loser can click to learn more about this stuff...', 'g263-plus'); ?></p>
      </td>
    </tr>
  <?php
}