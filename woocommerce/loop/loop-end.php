<?php
/**
 * Product Loop End
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
                

            </section>
        </div>
<script>
    $(document).ready(function(){
        $(".btn-count").click(function(){
            var money = 0;
            $('[data-blend-widget="counter"]').each(function(index){
                var counter = $(this).counter();
                var price = parseInt($(this).prev().find(".blend-listview-item-price").text().replace("￥",""));
                var select_count = counter.counter('value');
                money += price * select_count;
            });
            $(".blend-header-title").find("span").text("总计：" + money + "元");
            alert(money);
        });
        $("#sidenav").sidenav({});
    });
</script>
