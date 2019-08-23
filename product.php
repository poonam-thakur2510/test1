<?php
/* Template Name: Product */
get_header();
?>


<div class="featured">
    <div class="container">
    <div><a href="<?php echo site_url(); ?>"><span class="icon-home"></span></a> / Product</div>
        <div class="featured-top-row"><h1>Product Overview</h1></div>
            <div class="main-filter-fact">   
            <div class="resp-filter"><a href="javascript:;"><span></span><span></span><span></span></a></div>
                 <div class="filter-cont">
                 <div class='selected-filters'> 
                 <button id="Reset">Clear Filters</button>
    <ul></ul>
</div>
   <form class="controls" id="Filters">
 <!---  <fieldset class="filter-group checkboxes">
   <h3>Technology</h3> --->
   
   
 <?php
  //  $taxonomy = 'product_cat'; $orderby = 'parent'; $show_count = 1; $pad_counts = 0; $hierarchical = 1; $title = ''; $empty = 0; $term_id = 'term_id';
   // $args = array(
  //      'taxonomy' => $taxonomy,
    //   'orderby' => $orderby,
   //     'show_count' => $show_count,
   //     'pad_counts' => $pad_counts,
    //    'hierarchical' => $hierarchical,
     //   'title_li'     => $title,
     //   'hide_empty' => $empty
     //       );
     //      $all_categories = get_categories($args);
        //   foreach ($all_categories as $cat)
              //  {
             //       if ($cat->category_parent == 0)
              //      {
              //          echo '<div class="checkbox blue-txt">';
                //    echo '<input type="checkbox" value=".' .$cat->slug. '" ><label>' .$cat->name.'</label> <strong>'.$cat->count.'</strong>';
                //    echo '</div>';
                   
                 //   $subcats = get_categories($args);
                  
                 //  foreach ($subcats as $sc)
                 //       {
                    //     $link = get_term_link($sc->slug, $sc->taxonomy);
                     //    if($sc->parent == $cat->term_id) {
                      //  echo '<div class="checkbox red-txt">';
                    //  echo '<input type="checkbox" value=".' .$sc->slug. '" ><label>' .$sc->name.'</label><strong>'.$sc->count.'</strong>';
                   //   echo '</div>';
                   //     }
                      //  }
                  //      }
               // }
           
                  
            ?>
            
          <!----  </fieldset> --->
            <h3>Technology</h3>
            <div class="new">
            <?php
                $i = 1;
                $arg2 = array('post_type' => 'product', 'parent' => 0, 'orderby' => 'ID', 'order' => 'ASC', 'hide_empty' => 0, 'taxonomy' => 'product_cat');
                $categories = get_categories($arg2);
                foreach ($categories as $cat) {
                    $parent_term_id = $cat->cat_ID; // term id of parent term
                    ?>
                    <div class="<?php echo $cat->slug; ?> checkbox blue-txt checkbox-link  link content<?php echo $i; ?>  parentclass <?php if ($i == 1) {  echo 'activeparent';  } ?>" data-rel="content<?php echo $i; ?>"">
                      <input type="checkbox" name="acs" value="<?php echo $cat->slug; ?>" class="messageCheckbox" ><label><?php echo $cat->name; ?></label> <strong><?php echo $cat->count; ?></strong>
                    </div>
               <?php $i++; } ?> 
            </div>
            <h3> Application </h3>
            <div class="content-container-child"> 
            

                        <div class="industrial checkbox red-txt checkbox-link ">
                      <input type="checkbox" name="acs" value="industrial" class="messageCheckbox" ><label> Industrial </label>
                      </div>
                      <div class="commercial checkbox red-txt checkbox-link">
                      <input type="checkbox" name="acs" value="commercial" class="messageCheckbox" ><label> Commercial</label>
                      </div>
                      <div class="residential checkbox red-txt checkbox-link">
                      <input type="checkbox" name="acs" value="residential" class="messageCheckbox"><label> Residential </label>
                      </div>
                            
                  
                   
                  </div>
		</form> <!-- cd-tab-filter-wrapper -->
</div> <!----filter-cont--->
            </div><!---main-filter-fact----->
            
            

<div class="product-tab right-product-col">
<div class="filter-bar">
<div class="total-prod">
<?php
$argT = array(
  'post_type' => 'product',
  'post_status' => 'published',
  'taxonomy-name' => 'product_cat',
  'numberposts' => -1,
      );
     $num = count( get_posts( $argT ) );
     
  
//$argT = array(
  //      'taxonomy' => 'product_cat',
  //      'posts_per_page' => -1
   //         );
    //        $product_category = get_categories($argT);
    //        $counts = count($product_category);
            echo '<strong>'.$num .'</strong> <span>Products Found</span>';
            ?>
            <?php // echo do_shortcode('[product_categories_dropdown]'); ?> 
            
          
     
</div>
<div class="woo-filter">
          <form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderbywoo">
					<option value="menu_order" selected="selected">Default sorting</option>
					<option value="asc">Sort By Ascending [ A to Z ]</option>
					<option value="desc">Sort By Descending [ Z to A ]</option>
					
			</select>
	<input type="hidden" name="paged" value="1">
	</form>
          </div> 

<div class="show-product">
<select name="selectwoo" class="selectwoo">
<option value="30" selected="selected"> View 30</option>
					<option value="60">View 60</option>
					<option value="90">View 90</option>
          <option value="120">View 120</option>
          <option value="150">View 150</option>
          <option value="-1">View all</option>
          </select>
</div>

</div>
    <div id="Container" class="main-listing">
        <?php 
        
            $args = array(
                'number' => $number,
                'orderby' => 'title',
                'order' => 'ASC',
                'hide_empty' => $hide_empty,
                'include' => $ids
            );
            $product_categories = get_terms('product_cat', $args);
            $count = count($product_categories);

            if ($count > 0)
                {
                    foreach ($product_categories as $product_category)
                    {
                    ?>
                    <div class="<?php echo $product_category->slug; ?> mix list-box-product tab-pane fade in ">
                        <div class="featured-resumes">

                            <div class="row">
                                <?php
                                $pc=1;
                                $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
                                $prod_args = array(
                                    'posts_per_page' => -1,
                                    'paged' => $paged,
                                    'tax_query' => array('relation' => 'AND',
                                        array(
                                            'taxonomy' => 'product_cat',
                                            'field' => 'slug',
                                            'terms' => $product_category->slug
                                        )
                                    ),
                                    'post_type' => 'product',
                                    'orderby' => 'title,'
                                );

                                $loop = new WP_Query($prod_args);
                                if ($loop->have_posts()) :
                                    while ($loop->have_posts()) : $loop->the_post();
                                   
                                        woocommerce_get_template_part('content', 'product-custom');
                                        //echo $pc;
                                        if(($pc % 3) ==0)
                                        {
                                          echo '<hr>';
                                        }
                                        $pc++;
                                    endwhile;

                                elseif (!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) :
                                    woocommerce_get_template('loop/no-products-found.php');

                                endif;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>                            
                    <?php
                    }
                }
            ?>
    </div><!---container--->
</div><!---product-tab---->
            
            
     </div> <!---container---> 
</div> <!---featured---->
 
<style>
.page-template-product #main_header{position: relative;}
label{
  font-weight: 300;
}
button{
  display: inline-block;
  vertical-align: top;
  padding: .4em .8em;
  margin: 0;
  background: #68b8c4;
  border: 0;
  color: #333;
  font-size: 16px;
  font-weight: 700;
  border-radius: 4px;
  cursor: pointer;
}
 
button:focus{
  outline: 0 none;
}


.checkbox{
  display: block;
  position: relative;
  cursor: pointer;
  margin-bottom: 8px;
}

.checkbox input[type="checkbox"]{
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  cursor: pointer;
  margin: 0;
  opacity: 0;
  z-index: 1;
}
.container .mix{
  display: none;
}
.checkbox label{
  display: inline-block;
  vertical-align: top;
  text-align: left;
  padding-left: 1.5em;
}

.checkbox label:before,
.checkbox label:after{
  content: '';
  display: block;
  position: absolute;
}

.checkbox label:before{
  left: 0;
  top: 0;
  width: 18px;
  height: 18px;
  margin-right: 10px;
  background: #ddd;
  border-radius: 3px;
}

.checkbox label:after{
  content: '';
  position: absolute;
  top: 4px;
  left: 4px;
  width: 10px;
  height: 10px;
  border-radius: 2px;
  background: #68b8c4;
  opacity: 0;
  pointer-events: none;
}

.checkbox input:checked ~ label:after{
  opacity: 1;
}

.checkbox input:focus ~ label:before{
  background: #eee;
}

/**
 * Container/Target Styles
 */



.container .mix.green{
  background: #a6e6a7;
}

.container .mix.blue{
  background: #6bd2e8;
}

.container .mix.circle{
  border-radius: 999px;
}

.container .mix.triangle{
  width: 0;
  height: 0;
  border: 50px solid transparent;
  border-top-color: #68b8c4;
  border-left-color: #68b8c4;
}

.container .mix.sm{
  width: 50px;
  height: 50px;
}

/**
 * Fail message styles
 */

.container .fail-message{
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  text-align: center;
  opacity: 0;
  pointer-events: none;
  
  -webkit-transition: 150ms;
  -moz-transition: 150ms;
  transition: 150ms;
}

.container .fail-message:before{
  content: '';
  display: inline-block;
  vertical-align: middle;
  height: 100%;
}

.container .fail-message span{
  display: inline-block;
  vertical-align: middle;
  font-size: 20px;
  font-weight: 700;
}

.container.fail .fail-message{
  opacity: 1;
  pointer-events: auto;
}


</style>
<script>
$(function(){
$('.resp-filter a').click(function(){
    $('.filter-cont').toggleClass('slide-filter');
    });
   
    
    }); 
     $(document).ready(function(){
        $(".checkbox input").click(function(){
           var check = $(this).prop('checked'); 
           var checkedlabel = $(this).parent().find('label').text();
           var checkname = $(this).val();
           //alert(checkname);
           //console.log(checkedlabel);
           if(check == true){
              $('.selected-filters ul').append('<li><span class="close">X</span><a class="'+ checkname +' itself" href="javascript:;">'+$(this).parent().find('label').text()+'</a></li>');   
          }
          /* else{
               //console.log('fff');
               $('.selected-filters ul li').each(function(){
                   var itext = $(this).find('.itself').text();
                   if(itext == checkedlabel){
                       $(this).remove();
                   }
               });
           }*/
        });
        $(".checkbox-link").click(function (e) {            
         var parentcls = $(this).attr('class').split(' ')[0];
        //  alert(parentcls);
          var items=document.getElementsByName('acs');
				var selectedItems= [];
        $('.messageCheckbox:checked').each(function(i){
          selectedItems[i] = $(this).val();
        });
     // alert(selectedItems);
        
        var a = selectedItems.indexOf("industrial");
      //  alert('d'+a);
         
    $.ajax({              
               type: 'POST',
               async: false,
               url: '<?php echo get_template_directory_uri(); ?>/product-postfilter-ajax.php',
               data : {post_id_cat : parentcls, select_box: selectedItems },
               dataType: "json html",
     converters: {
       'text json': true
     },
               success: function(data) {
              //     alert(data);
                   $(".main-listing").html(data);

               }
           });

            
        });





        $(document).on('click','.close',function(){
           var thislabel= $(this).parent().find('.itself').text();
            var cls1 =$(this).parent().find('.itself').attr('class').split(' ')[0];
        // alert(cls1);
           $(".checkbox").each(function(){
               var checklabel = $(this).find('label').text();
               var checklabel1 =  $(this).find('input').val();
              //alert(checklabel1);
               if(cls1 == checklabel1){
                    $(this).find('input').trigger('click');
               }
           });
           $(this).parent().remove();
        });

        $('.main-listing' ).removeClass("main-listing-ajax");

$("select.orderbywoo").change(function(){

    var selectedval= $(this).children("option:selected").val();
    $('.list-box-product').css("display","block");
    $('.main-listing' ).addClass("main-listing-ajax");
  

    $.ajax({              
               type: 'POST',
               async: false,
               url: '<?php echo get_template_directory_uri(); ?>/product-filter-ajax.php',
               data : {post_id : selectedval},
               dataType: "json html",
     converters: {
       'text json': true
     },
               success: function(data) {
              //     alert(data);
                   $(".main-listing").html(data);

               }
           });

   });


   $("select.selectwoo").change(function(){
    var selectedval1 = $(this).children("option:selected").val();
    //alert(selectedval1);
    $.ajax({
               
               type: 'POST',
               async: false,
               url: '<?php echo get_template_directory_uri(); ?>/product-value-ajax.php',
               data : {post_id1 : selectedval1},
               dataType: "json html",
     converters: {
       'text json': true
     },
               success: function(data) {
              //     alert(data);
                   $(".main-listing").html(data);

               }
           });

});


    });
    
    
    $(function(){
       $('.mix.list-box-product').each(function(i){
         $(this).attr('data-myorder',''+i+'');  
       });
    });
    
</script>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.js"></script>
<script>

var multiFilter = {

  // Declare any variables we will need as properties of the object

  $filterGroups: null,
  $filterUi: null,
  $reset: null,
  groups: [],
  outputArray: [],
  outputString: '',

  // The "init" method will run on document ready and cache any jQuery objects we will need.

  init: function () {
    var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.

    self.$filterUi = $('#Filters');
    self.$filterGroups = $('.filter-group');
    self.$reset = $('#Reset');
    self.$container = $('#Container');

    self.$filterGroups.each(function () {
      self.groups.push({
        $inputs: $(this).find('input'),
        active: [],
        tracker: false });

    });

    self.bindHandlers();
  },

  // The "bindHandlers" method will listen for whenever a form value changes. 

  bindHandlers: function () {
    var self = this,
    typingDelay = 300,
    typingTimeout = -1,
    resetTimer = function () {
      clearTimeout(typingTimeout);

      typingTimeout = setTimeout(function () {
        self.parseFilters();
      }, typingDelay);
    };

    self.$filterGroups.
    filter('.checkboxes').
    on('change', function () {
      self.parseFilters();
    });

    self.$filterGroups.
    filter('.search').
    on('keyup change', resetTimer);

    self.$reset.on('click', function (e) {
      e.preventDefault();
      self.$filterUi[0].reset();
      self.$filterUi.find('input[type="text"]').val('');
      self.parseFilters();
      $('.selected-filters ul li').hide();
    });
  },

  // The parseFilters method checks which filters are active in each group:

  parseFilters: function () {
    var self = this;

    // loop through each filter group and add active filters to arrays

    for (var i = 0, group; group = self.groups[i]; i++) {if (window.CP.shouldStopExecution(0)) break;
      group.active = []; // reset arrays
      group.$inputs.each(function () {
        var searchTerm = '',
        $input = $(this),
        minimumLength = 3;

        if ($input.is(':checked')) {
          group.active.push(this.value);
        }

        if ($input.is('[type="text"]') && this.value.length >= minimumLength) {
          searchTerm = this.value.
          trim().
          toLowerCase().
          replace(' ', '-');

          group.active[0] = '[class*="' + searchTerm + '"]';
        }
      });
      group.active.length && (group.tracker = 0);
    }window.CP.exitedLoop(0);

    self.concatenate();
  },

  // The "concatenate" method will crawl through each group, concatenating filters as desired:

  concatenate: function () {
    var self = this,
    cache = '',
    crawled = false,
    checkTrackers = function () {
      var done = 0;

      for (var i = 0, group; group = self.groups[i]; i++) {if (window.CP.shouldStopExecution(1)) break;
        group.tracker === false && done++;
      }window.CP.exitedLoop(1);

      return done < self.groups.length;
    },
    crawl = function () {
      for (var i = 0, group; group = self.groups[i]; i++) {if (window.CP.shouldStopExecution(2)) break;
        group.active[group.tracker] && (cache += group.active[group.tracker]);

        if (i === self.groups.length - 1) {
          self.outputArray.push(cache);
          cache = '';
          updateTrackers();
        }
      }window.CP.exitedLoop(2);
    },
    updateTrackers = function () {
      for (var i = self.groups.length - 1; i > -1; i--) {if (window.CP.shouldStopExecution(3)) break;
        var group = self.groups[i];

        if (group.active[group.tracker + 1]) {
          group.tracker++;
          break;
        } else if (i > 0) {
          group.tracker && (group.tracker = 0);
        } else {
          crawled = true;
        }
      }window.CP.exitedLoop(3);
    };

    self.outputArray = []; // reset output array

    do {if (window.CP.shouldStopExecution(4)) break;
      crawl();
    } while (
    !crawled && checkTrackers());window.CP.exitedLoop(4);

    self.outputString = self.outputArray.join();

    // If the output string is empty, show all rather than none:

    !self.outputString.length && (self.outputString = 'all');

    console.log(self.outputString);

    // ^ we can check the console here to take a look at the filter string that is produced

    // Send the output string to MixItUp via the 'filter' method:

    if (self.$container.mixItUp('isLoaded')) {
      self.$container.mixItUp('filter', self.outputString);
    }
  } };


// On document ready, initialise our code.

$(function () {

  // Initialize multiFilter code

  multiFilter.init();

  // Instantiate MixItUp

  $('#Container').mixItUp({
    controls: {
      enable: false // we won't be needing these
    },
    animation: {
      easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
      queueLimit: 3,
      duration: 600 } });

});



</script>

<?php get_footer(); ?> 