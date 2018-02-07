<?php
/**
 * Created by PhpStorm.
 * User: luojinyi
 * Date: 2017/6/26
 * Time: 下午5:21
 */

return [
    //应用ID,您的APPID。
    'app_id' => "2016080600182305",

    //商户私钥 不能用pkcs8.pem中的密钥！！！！！
    'merchant_private_key' =>
        "MIIEpAIBAAKCAQEAqmtamALL58Z59Rm5Io07mjfkN1uo2/FuCYqeDkTNb8mkx2PtIZBdBd4Q+MK43Jlp1/5jARzkm+bCjI+lhhyXumIicipFlS4IIvcR86cS+DP9R4yXj/iDNXDpU5o04JZ6a/VR0Q8BSNuNIKiwEHE4aqDUh12pa6IOkp2QL58hhajqRFVOCQxnZNh2iK+Nbn/n2ZZ6d+crOLcEkP49Lck9Di0sv44TcsO5DOhQ6lSwkgwXWfhUYiux+n2ccWs4XGJYPN3L1y3rH+vv3VUjRNsfRPDjU3jsQnwNzkpSI0JZ9UCjD1pBaGW+QyDdnWQK89r4f+x5PuaUdZ/uRQ4WR+hsCwIDAQABAoIBAEE813FZoLUZRZaOQlD3v9lJjBOlAv8vbPA6IEdWD0674lhx6FTw7qtQVy7jW+EW2W3V9BB4/wqvS8qDMtokF/FBn+4UQI7bEEJSUozzaE+bl1nMeDik6ZWLo8ZdQeC3uiWZw7hEBjnd0iiuarfgn7gx2Sn4sOKDJxD5QDj6sdp4LvZXUPh0I/qjPyP248okkunBez6s/i/rwazkMow6cGOmxk5EeOt8Z1i8EvHx465ij6m59SjFeIXhty7npI/71k67UehJ77I/F7/ilBD+bg+lTrM15ihyUqbpDIBww99mDzhM95nuzQpNPcrdpyzvGMW0q2RFd2gPyRq8b1mnAAECgYEA3sE8jhKBijCci2vq1BzKz/fqek6NRVpXIT1yySDN8WzYQO7o3DmmA639AEc9lOB9PnnpdG0EaM2BZZbj/yi7BVVWXl6Yjlar3DLMIuGtubwzg/MLxxbsIw1W5D1wTlcbDhBUzTbxIr+ifn3LgmNhj+YxRX2OmPdVWzmwI6Pa1gsCgYEAw9qK9gGXopqw4T4tInOUy/ru42zb451LIxMohTBw4Yb5EH+OSQT653DX7jVTn0hZ+BjGuRKYlClzwSIM5wBiXJes+Nze6eLlMwYFiFnYgiANY7KqRiqoyIl8DCsSp4jSKuP1SqdEiUxeSfq+ja5JrUlEf0F/iWVmzrEwIW+UggECgYEAyXzg2WHD6sutzi7/an3gtdz6K0eCYYkl5ts+SM9zeT2LHrD70LgUgp+OigHmohOtNiXwFW/G3UWGFe42rUaaZGichx/pvlaHfdY08BhSm/6wWlot/Reu4MXgIvOv8iy4PDBphHZ+B4Bv6xq+SmK6jP8a8lBv+809WBcGTDaaa6ECgYEAw0VcE1cXFpphDNJvMdBHZPD1yW659kDXr0rktZbMlS97mEV1WbxLZQIPaINmsoLyoPgi+ldeJSsHLGKEtrSdXXAkl6Ov5UXB+5NfZMkfou3OK77xIjBaREc/lOpFGSDDWtwZrqsDHFk2EVCdOKmy78EDOFXXkOe3DxF+yXd0fAECgYAg57MJS9/YY2EWAuZl+8VdB3o2Kt1zQV1xoozWgE0kmqDf1pcZ9npid2Wrn4HDKHin6YVtnCM6thaDas/CjZl9Leg6i/ocG9y0NoKasZOKoWU7CuO4xUt1ul6WubLUyhJENETjvcZmVEup+xQLtA0MtaglTbOjgaj0qctpbKoAVg==",

    //异步通知地址
    'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",

    //同步跳转
//    'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php",
    'return_url' => "http://test02.com/admin/index",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type' => "RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' =>
        "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvEmyoH+PMOVU3A0hAgct0hUFPu+aY/XRFqDzG1PKKy5cph/pWIR/DSbpcv6e+rv6YHReAVafbJb83/aJd8xfwcoqdW9WlnkVPe3q5NygeWZK+fF4RIFiAnDcWdRGekZyipZLAdZ/HLKWCCoiNIvKQVGRwbn8DZcMxGAnWVzdTHjsD1a5QOXXsY0ZLnGAxluXWADMdJugoBHQ+iPGEXrEaxsp4uf6YMyJRyqhwF+K7Her76mL/P6n3MZVM1Hzf5nh3cHiBNNzN+nfDoFQUmQzUiV8jCKnkUE9pXvUJj+3FgdcG+Pg/Cd+6v+iuRhUt1QTqB08KfpHxox31QpLWNqO1wIDAQAB",

    //支付时提交方式 true 为表单提交方式成功后跳转到return_url,
    //false 时为Curl方式 返回支付宝支付页面址址 自己跳转上去 支付成功不会跳转到return_url上， 我也不知道为什么，有人发现可以跳转请告诉 我一下 谢谢
    // email: 40281612@qq.com
    'trade_pay_type' => true,







];