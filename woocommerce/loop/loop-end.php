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
  <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/blendui/2.0-alpha/blendui.min.css" />
        <script type="text/javascript" src="http://apps.bdimg.com/libs/blendui/2.0-alpha/blendui.min.js"></script>
<script>
    $(document).ready(function(){
        $(".btn-count").click(function(){
            var money = 0;
            $('[data-blend-widget="counter"]').each(function(index){
                var counter = $(this).counter();
                var price = parseInt($(this).prev().find(".blend-listview-item-price").text().replace("￥",""));
                var select_count = counter.counter('value');S
                money += price * select_count;
            });
            $(".blend-header-title").find("span").text("总计：" + money + "元");
            alert(money);
        });
        $("#sidenav").sidenav({});
    });
</script>
