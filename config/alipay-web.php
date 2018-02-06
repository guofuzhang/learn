<?php
/**
 * Created by PhpStorm.
 * User: luojinyi
 * Date: 2017/6/26
 * Time: 下午5:21
 */

return [
    //应用ID,您的APPID。
    'app_id' => "2018020602150957",

    //商户私钥 不能用pkcs8.pem中的密钥！！！！！
    'merchant_private_key' =>
        "MIIEpQIBAAKCAQEAwL8DmVakQo2aZh++iTa7vBOOUj9wqCmVYr6ZQWzoNWx4tgvuS5F6W+11/DufpygNasMeW3KSmu/P+nFe+XC7kDaOqC8NWzj6KEaBkq2TSVE3IsEFSs8AfzSI/Yd73yRG29I5sM2yBxvN1JS7nDstB9svNd0aAslZ9i/UjbGhqiCWtt0peazz/u98BkRpwS/VyRPtq1ff8mmH7jqCLMWioPCsviDNnXITB/d9JAnlaW0lckhxywcpHbYJxNGXp8QvbUpkXUxrxVEOq1lXOAGKLTY+x4bCohtQeZqL6QgCGLztcO0tDZZhNZfwrAs+fS3F0d3B9N4a+wNIQ0MQ1PHZOQIDAQABAoIBAQCoVGl9OgicQvSLqb+KL+3GtEGAHP1zL1XSdeh8FfO57HCDdGn5PyTgMcLvtNaackU9bwgND0Nv4m39J5OtPsHfkXYG9YixmVIHaIPyqHpP9oizZmULzzp83VGiMPeCijkD81YEza9ju+mHdRlfuOJ70PUrElyMAHL7qQv1byNj4iwYCasHwhTkaNIH3JVzVwQ8C+RGXoJaVwFXXL6+Eg5R6snFSUzIyMoy0f9svUX9ILeko4iHestellVpYrqMb7v0orpPo/aIHJQTaTLQbtpdq3nMWd39gPXuTq9+2i7RDTGQfOTXC0PcpmY4i27whKCFhkEhZ3Fn31X7Z/AcLAgBAoGBAODVk6ORxb6kf+cEn+D+szm0Vy2o99QgzVJ7y2E26nmzCklfepQQb/bQznF8oLGOr85JYXAawhAvqN/rtrx4Vzdg12P3w+32apD7OTb5zVSKiEEw4rKGGZdJcEzyjoPr6JYVAbcJWTWS8DgM7caYIIdwGhHiKRFUW/nxNGrO8JQ5AoGBANt2w6yySrUG29AGubvclViasBKds+BbfcAiEjXpZ535K7/DhhZnPMnubEip+IHl+Ns9VnaW2qVNWZcJ/MSeirc36ILH/KhssgGmEKGWtV8Af0CYlokjDBACGyD5jaTuRwjAUYGVXfTW8gKiDQGd1oO0d528ddewREdxSoKQDW0BAoGBAMwJpwFzIgS/3n71mG4kVtwQSGlchQQSfKLVS52+q42kKLqrll9Wh3Vyy1b8Zgyc0/keaPnGnsT3q4cCsARcJbJRBUdoq3uB+/X0t1in3GpTihG3XpPq1MCR2gNKwIECD0JccAD+z+Gppq0HNqXamvKujkoad3CNoSazegFQKc4pAoGARO0lAY0xh29zA//Iv6bExQI4QHCFOPajJP/OZl4669OBGQYoi8q6vdUC70NqyClZIko+aJpyay5C7/v0BjCg8nA9ty1mPeN9eKUWXhm+NusqDDigNsvqEvEGYjHeealYZ/g24RLvYmFLuuX4XcSbxdudIc452JcEqsd7Fkx12wECgYEAihTf3a4b5gZgAEsqre5k7Ip3sB/rZphf3B6ZMuKcbgl6GPHZTLyfZ+ZBlcoPPev79HCootKo5zrfmuh88T/zVeBtiS6BG1GgZ462Tbv3S40F9EZ57wUPfyvAUmLFzLAwUJt6adXiDfaCtDF9m90zUhEvzpkJxYtp5KkT3qAYYIg=",

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
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' =>
        "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAn89qWe4J6eR9J7FffV1PqNJGKXZkH0RWQDNWjmoF7Vkd98jAAgNIHp7LQDUhlKJ77DvUfksS/czq1aggHHo7srEjs9YhlhKn4KjbMb3msAYw+qnB+Rnby8U+aRRgG+Phsg/9tAhC5m9IBg8wtEu0eXDXcLXRV6K90mpIJ0FQyKac7tTVEpxuNfjeCR7MTUutoYv0FWBenu21ONJ1ERxYHwh05OLcFnXgjBxcJEcIrP2/wl0br5psd+Cn77EQffelqFTFi53+kroF1w5CgIFEwDB8LFUuT9oQS1V8LjaMqKt7KJ5rxBm3bIj+Po7xwuSf0oJDs3Bvhx4YVQoK0lScnQIDAQAB",

    //支付时提交方式 true 为表单提交方式成功后跳转到return_url,
    //false 时为Curl方式 返回支付宝支付页面址址 自己跳转上去 支付成功不会跳转到return_url上， 我也不知道为什么，有人发现可以跳转请告诉 我一下 谢谢
    // email: 40281612@qq.com
    'trade_pay_type' => true,







];