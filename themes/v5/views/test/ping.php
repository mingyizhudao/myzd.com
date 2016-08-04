<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <title>MiniCheckout</title>
        <link rel="stylesheet" type="text/css" href="http://static.mingyizhudao.com/pc/pingpp-html5-master-pinus.css">        
    </head>
    <body>
        <header>
            <div class="h_content">
                <span></span>
            </div>
        </header>
        <section class="block">
            <div class="content2">
                <div class="app">
                    <!--<span class="iphone"><img src="../img/bgpic.jpg" width="100%" height="auto"></span>-->
                    <label class="text_amount">
                        <input id="amount" type="text" placeholder="金 额" value="0.01"/>
                    </label>
                    <div>1元</div>
                    <input type="hidden" name="transaction[ref_no]" value="<?php echo time(); ?>" />
                    <div class="ch">
                        <!--<span class="up" onclick="wap_pay('upacp_wap')">银联 WAP</span>-->
                        <span class="up" onclick="wap_pay('alipay_pc_direct')">支付宝 即时到账</span>
                        <span class="up" onclick="wap_pay('alipay_wap')">支付宝 WAP</span>
                        <!--<span class="up" onclick="wap_pay('bfb_wap')">百度钱包 WAP</span>-->
                        <!--<span class="up" onclick="wap_pay('jdpay_wap')">京东支付 WAP</span>-->
                        <span class="up" onclick="wap_pay('yeepay_wap')">易宝支付 WAP</span>
                    </div>
                </div>
            </div>
        </section>
        <script src="http://static.mingyizhudao.com/pc/pingpp-pc.min.js"></script>
        <!--<script src="../../src/pingpp.js"></script>-->
        <script src="http://static.mingyizhudao.com/pc/pingpp.min.js"></script>
        <script>
                            function wap_pay(channel) {
                                var amount = document.getElementById('amount').value * 100;
                                //var url = 'http://test.mingyizd.com/test/pingpay';
                                var url = "<?php echo $this->createAbsoluteUrl('test/pingpay'); ?>";

                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", url, true);
                                xhr.setRequestHeader("Content-type", "application/json");
                                xhr.send(JSON.stringify({
                                    channel: channel,
                                    amount: amount
                                }));

                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState == 4 && xhr.status == 200) {
                                        console.log(xhr.responseText);
                                        pingppPc.createPayment(xhr.responseText, function (result, err) {
                                            console.log(result);
                                            console.log(err);
                                        });
                                    }
                                }
                            }
        </script>
    </body>
</html>