jQuery(document).ready(function(){jQuery(".fusion-video").each(function(){!jQuery(this).parents(".fusion-modal").length&&1==jQuery(this).data("autoplay")&&jQuery(this).is(":visible")&&jQuery(this).find("iframe").each(function(){jQuery(this).attr("src",jQuery(this).attr("src").replace("autoplay=0","autoplay=1"))})}),jQuery(window).on("resize",function(){var e,i=document.querySelectorAll("iframe"),o=i.length;if(jQuery(".fusion-youtube").each(function(){jQuery(this).is(":visible")||jQuery(this).parents(".fusion-modal").length&&!jQuery(this).parents(".fusion-modal").is(":visible")||jQuery(this).find("iframe").each(function(){this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}',"*")})}),"undefined"!=typeof Vimeo)for(e=0;e<o;e++)!(-1<i[e].src.toLowerCase().indexOf("vimeo"))||jQuery(i[e]).is(":visible")||jQuery(i[e]).data("privacy-src")&&jQuery(i[e]).hasClass("fusion-hidden")||jQuery(i[e]).parents(".fusion-modal").length&&!jQuery(i[e]).parents(".fusion-modal").is(":visible")||new Vimeo.Player(i[e]).pause()}),jQuery(window).on("fusion-element-render-fusion_youtube fusion-element-render-fusion_vimeo",function(e,i){(void 0!==i?jQuery('div[data-cid="'+i+'"]'):jQuery("body")).find(".full-video, .video-shortcode, .wooslider .slide-content").fitVids()})}),jQuery(window).on("fusion-dynamic-content-render",function(e,i){var o=jQuery(i).find(".fusion-youtube").find("iframe");0<o.length&&o.each(function(){1!==jQuery(this).closest(".fusion-video").data("autoplay")&&"true"!==jQuery(this).closest(".fusion-video").data("autoplay")||(jQuery(this).closest(".fusion-video").data("autoplay","false"),this.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}',"*"))}),0<(o=jQuery(i).find(".fusion-vimeo").find("iframe")).length&&o.each(function(){1!==jQuery(this).closest(".fusion-video").data("autoplay")&&"true"!==jQuery(this).closest(".fusion-video").data("autoplay")||(jQuery(this).closest(".fusion-video").data("autoplay","false"),new Vimeo.Player(jQuery(this)[0]).play())})});