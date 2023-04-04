<script>
    let tableData = [];
  </script>

  <?php

    // проверяем есть ли данные в гибком содержании
    if( have_rows('table_vitrate_one') ):
        // перебираем данные
        while ( have_rows('table_vitrate_one') ) : the_row();
            if( get_row_layout() == 'table_text' ):
              ?>

              <script>
                tableData.push({
                  date: `<?php echo the_sub_field('date_table_value'); ?>`,
                  name: `<?php echo the_sub_field('table_name_value'); ?>`,
                  cost: `<?php echo the_sub_field('cost_table_value'); ?>`,
                  starus: `<?php echo the_sub_field('status_tabe_value'); ?>`,
                  image: `<?php echo the_sub_field('table_image'); ?>`,
                });
              </script>
              
              <?php

            endif;
        endwhile;
    endif;
  ?>

<script>
  console.log(document.querySelector("#table_sound_body"))
  tableData.forEach((tableObject) => {
    console.log(tableObject)

  })
</script>