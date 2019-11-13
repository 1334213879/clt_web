/*banner 上文字上下滚动*/
(function($){
    $.fn.scrollTop1 = function(options){
        var defaults = {
            speed:30
        }
        var opts = $.extend(defaults,options);
        this.each(function(){
            var $timer;
            var scroll_top=0;
            var obj = $(this);
            var $height = obj.find("#ul").height();
            obj.find("#ul").clone().appendTo(obj);
            obj.hover(function(){
                clearInterval($timer);
            },function(){
                $timer = setInterval(function(){
                    scroll_top++;
                    if(scroll_top > $height){
                        scroll_top = 0;
                    }
                    obj.find("#ul").first().css("margin-top",-scroll_top);
                },opts.speed);
            }).trigger("mouseleave");
        })
    }
})(jQuery);

$(function(){
    $(".lunxun").scrollTop1({
        speed:70 //数值越大 速度越慢
    });
});

$(function(){
    var sending = false;
    // 表单提交
    $('#getrs').click(function(){
        if(sending === true) {
            alert('别点太快,正在努力提交!');
            return false;
        }
        sending = true;
        var uname = $('input#uname').val();
        var mob = $('input#phone').val();
        if(!mob || mob.length!==11){
            alert('电话号码有误!');
            sending = false;
            return false;
        }
        $.ajax({
            url: 'http://www.taoding.cn/api/ringback/nocode?uname='+uname+'&mobile='+mob,
            dataType: 'jsonp',
            jsonpCallback: 'jsoncallback',
            timeout: 5000,
            success: function(r) {
                if(r.error !== '0') {
                    alert(r.msg);
                } else {
                    alert('已经成功提交,我们将尽快为您回电');
                    $('#uname').val('');
                    $('#phone').val('');
                }
                sending = false;
            },
            error: function() {
                alert("请求出错,请检查网络状况.");
                sending = false;
            }
        });
    });

});




/*点击咨询 弹框*/
$(function() {
    $("#button").click(function () {
        $("#alert").css("display", "block");
        $(".tanchuang").css("display", "block");
    });
    $(".close").click(function () {
        $("#alert").css("display", "none");
        $(".tanchuang").css("display", "none");

    })
})

/*城市铁环*/
/*$(function(){
    $("#cut").hover(function(){
        $(".cut_city").css("display","block");
        $(".cut_zhe").css("display","block");
    },function(){
        $(".cut_city").css("display","none");
        $(".cut_zhe").css("display","none");
    });
})*/
$(function(){
    $("#cut,.cut_zhe,.cut_city").hover(function(){
        $(".cut_city").css("display","block");
        $(".cut_zhe").css("display","block");
        var a = $(".site").html();
        $(".need").html(a);
    },function(){
        $(".cut_city").css("display","none");
        $(".cut_zhe").css("display","none");
    })

});

/*注册公司页面里面需要跳转的商务通*/
$(function(){
    $("a#shangwutongzcgs,p#shangwutongzcgs").click(function(){
        window.open('https://tb.53kf.com/code/client/10180830/1');
    })
})

/*代理记账页面里面需要跳转的商务通*/
$(function(){
    $("a#shangwutongdljz,p#shangwutongdljz").click(function(){
        window.open('https://tb.53kf.com/code/client/10180830/1');
    })
})

/*资质代办页面里面需要跳转的商务通*/
$(function(){
    $("a#shangwutongzzdb,p#shangwutongzzdb").click(function(){
        window.open('https://tb.53kf.com/code/client/10180830/1');
    })
})

/*知识产权页面里面需要跳转的商务通*/
$(function(){
    $("a#shangwutongzscq,p#shangwutongzscq").click(function(){
        window.open('https://tb.53kf.com/code/client/10180830/1');
    })
});

/*公司变更页面里面需要跳转的商务通*/
$(function(){
    $("a#shangwutonggsbg,p#shangwutonggsbg,li#shangwutonggsbg").click(function(){
        window.open('https://tb.53kf.com/code/client/10180830/1');
    })
});

/*公司注销页面里面需要跳转的商务通*/
$(function(){
    $("a#shangwutongzxgs,p#shangwutongzxgs").click(function(){
        window.open('https://tb.53kf.com/code/client/10180830/1');
    })
});

/*代理记账页面  banner 轮播*/
$(function(){
    //banner初始化
    var banner = $('div.banner');
    banner.cur = 0,list_length=0;
    banner.ul = banner.find('ul:first');
    banner.ol = banner.find('ol:first');
    banner.timer = null;

    banner.on('mouseenter',function(){
        clearInterval(banner.timer);
    });

    banner.on('mouseleave',function(){
        setTimer();
    });

    banner.init = function(){
        var ollist = '',cur = 0;
        list_length = banner.ul.find('li').length;
        for(var i=0;i<list_length;i++){
            ollist += '<li></li>';
        }
        banner.ol.html(ollist);
        banner.display(cur);
        banner.ul.css('left',(banner.width()-banner.ul.width())/2);
        banner.ol.css('left',(banner.width()-banner.ol.width())/2);
    };

    //渲染显示效果
    banner.display = function(cur){
        banner.ul.find('li').hide().end().find('li').eq(cur).fadeIn('fast');
        banner.ol.find('li').removeClass('current').end().find('li').eq(cur).addClass('current');
    };
    //事件绑定
    banner.ol.on('click','li',function(index){
        banner.cur = $(this).index();
        banner.display(banner.cur);
    });

    //计时器
    function setTimer(){
        banner.timer = setInterval(function(){
            if(banner.cur>=list_length-1){
                banner.cur=0;
            }else{
                ++banner.cur;
            }
            banner.display(banner.cur);
        },50000);
    }
    setTimer();
    $(window).resize(banner.init);
    banner.init();
});
/*代理记账页面 资深轮播*/
$(function () {
    $('.but_r').click(function () {
        $("ul#slider").animate({marginLeft:"-420px"},600, function () {
            $("ul#slider>li").eq(0).appendTo($("ul#slider"));
            $("ul#slider").css('marginLeft','0px');
        });
    });
    $('.but_l').click(function () {
        $("ul#slider").css('marginLeft','-420px');
        $("ul#slider>li").eq(3).prependTo($("ul#slider"));
        $("ul#slider").animate({marginLeft:"0px"},400);
    });

});
/**/
$(document).ready(function(){
    $('.counter').countUp();
});
/*注销公司  客户js*/
$(function(){

    var n=0
    var timer=null;
    function fn(){

        $(".voice .voice-item .item ul ").eq(n).show().siblings().hide();
        $(".voice .voice-item .item2 .haha").eq(n).addClass("color").siblings().removeClass("color");
        n++;
        if(n>2){n=0};
    }

    timer=setInterval(fn,5000);

    $(".voice .voice-item .item ul").hover(function(){
        clearInterval(timer);
    },function(){
        timer=setInterval(fn,5000);
    })

    $(".voice .voice-item .item2 .haha").hover(function(){
        clearInterval(timer);
        n=$(this).index();
        console.log(n);
        console.log($(".voice.voice-item .item2 .haha").length)
        $(".voice .voice-item .item ul ").eq(n-1).show().siblings().hide();
        $(".voice .voice-item .item2 .haha").eq(n-1).addClass("color").siblings().removeClass("color");
    },function(){
        timer=setInterval(fn,5000);
    });

    $(".voice .voice-item .item2 .topb").click(function(){
        n--;
        if(n<0){n=2};

        $(".voice .voice-item .item ul ").eq(n-1).show().siblings().hide();
        $(".voice .voice-item .item2 .haha").eq(n-1).addClass("color").siblings().removeClass("color");
    });

    $(".voice .voice-item .item2 .top1").click(function(){
        n++;
        if(n>2){n=0};

        $(".voice .voice-item .item ul ").eq(n-1).show().siblings().hide();
        $(".voice .voice-item .item2 .haha").eq(n-1).addClass("color").siblings().removeClass("color");
    });
});


//回到顶部
$(function(){
    $(window).bind("scroll.back2top", function() {
        var st = $(document).scrollTop(), winh = $(window).height();
        (st > 1000) ? $('.back2top').show() : $('.back2top').hide();
        if(!window.XMLHttpRequest) { $('.back2top').css("top", st + winh - 166);}//IE6
    });
    $('.back2top').click(function() {
        $("html, body").animate({scrollTop:0}, 200);
    });
});




//网站首页     js



/*搜索框 选择搜索项目的js*/
$(function(){
    $("#types li").click(function(){
        $(this).find('a').addClass("moren");
        //siblings 返回所有id="types" 下面 li 的所有同级元素
        $(this).siblings().find('a').removeClass("moren");
    })
})

$(function(){
    //服务
    $("#service").click(function(){
        $("#search").attr("placeholder","请输入您要查找的服务");
    });
    //代账
    $("#zdz").click(function () {
        $("#search").attr("placeholder","请输入您要找的代账类型");
    });
    //查公司
    $("#cgs").click(function () {
        $("#search").attr("placeholder","请输入您要查询的公司名称");
    });
    //查商标
    $("#csb").click(function () {
        $("#search").attr("placeholder","请输入您要查询的商标");
    });

    $("#sousu").click(function(){
        var place = $("#search").attr("placeholder");
        if(place === "请输入您要找的代账类型"){
            $("#alert").css("display", "block");
            $(".tanchuang").css("display", "block");
        }else if(place === "请输入您要查询的公司名称"){
            $("#alert").css("display", "block");
            $(".tanchuang").css("display", "block");
        }else if(place === "请输入您要查询的商标"){
            $("#alert").css("display", "block");
            $(".tanchuang").css("display", "block");
        }else{
            window.open("search.php");
        }
    })
    $(".close").click(function () {
        $("#alert").css("display", "none");
        $(".tanchuang").css("display", "none");
    })
})
