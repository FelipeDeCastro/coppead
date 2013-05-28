var Menu = {
    
    init: function(){
        $('#topo #menu-superior ul li ul').parent('li').hover(        
            function(){
                $('#topo #menu-superior').stop(true,false).animate({height: '136'}, 200, 'easeOutQuart', function(){$('#topo #menu-superior ul li ul').fadeIn(200);}).css('overflow', 'visible');
            },
            function(){
                $('#topo #menu-superior').stop(true,false).animate({height: '68'}, 300, 'easeOutQuint').css('overflow', 'visible');
                $('#topo #menu-superior ul li ul').fadeOut(100);
            }
        );    
    }

}

var CarroselDestaques = {

    init: function(){
        $('#destaques #container').cycle({
            fx:'cover',
            speed:400,
            requeueTimeout: 5000,
            next: '#proximo-destaque', 
            prev: '#destaque-anterior',
            before: CarroselDestaques.EscondeTexto,
            after: CarroselDestaques.MostraTexto,
            onPrevNextEvent: CarroselDestaques.EscondeTudo
        });
        CarroselDestaques.EscondeVideo();
    },
                                         
    EscondeTexto: function(){
        $('#destaques #container h2').stop(true,false).animate({right:0, opacity:0}, 800, 'easeOutExpo');
    },
    
    MostraTexto: function(){
        $('#destaques #container h2').stop(true,false).animate({right: '720', opacity:'1'}, 500, 'easeOutQuint');
    },
    
    EscondeVideo: function(){
        var videos = $('#destaques .destaque span').map(function() { return $(this).html() || null; }).get();
        $('#destaques .destaque a.video').each(function(i){
            $(this).attr('rel',i);
        });
        
        $('#destaques .destaque span iframe').remove();
            
        $('#destaques .destaque a.botao').click(function(e){
            e.preventDefault();
            
            if($(this).hasClass('video')){
                
                var index = $(this).attr('rel');
                
                $(this).prev('span').html(videos[index]);
                $('#destaques #container').cycle('pause');
            };
        })    
    },   
    
    EscondeTudo: function(){
        CarroselDestaques.EscondeTexto();
        CarroselDestaques.EscondeVideo();
        $('#destaques #container').cycle('resume');
    }
    
}    
  
    
    
jQuery(document).ready(function($) {
    Menu.init();
    CarroselDestaques.init();
});