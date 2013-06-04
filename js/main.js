//MENU
var Menu = {
    
    //Animação de mouse over do menu principal
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

//HOME: DESTAQUES
var CarroselDestaques = {

    //Inicia, configura o carrosel e chama as animações de transição
    //Plugin: Cycle Jquery
    //Documentação: http://jquery.malsup.com/cycle/
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
    
    //Animação de esconder texto                                     
    EscondeTexto: function(){
        $('#destaques #container h2').stop(true,false).animate({right:0, opacity:0}, 800, 'easeOutExpo');
    },
    
    //Animação de mostrar o texto
    MostraTexto: function(){
        $('#destaques #container h2').stop(true,false).animate({right: '720', opacity:'1'}, 500, 'easeOutQuint');
    },
    
    //Animação de esconder o vídeo
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
    
    //Função que dispara as animações de esconder texto e vídeo
    EscondeTudo: function(){
        CarroselDestaques.EscondeTexto();
        CarroselDestaques.EscondeVideo();
        $('#destaques #container').cycle('resume');
    }
    
}
 
//HOME: LISTA DE ALUNOS  
var ListaAlunos = {

    //Comportamento do submenu de filtros
    filtros: function(){
        $('ul#sidebar li a.select').hover(
            function(){
                $(this).siblings('ul.tudo').stop(true,false).slideDown(200);
                $(this).find('.seta').stop(true,false).fadeIn('fast')
                $(this).css({'background-color':'#ebebeb'})
            }, function(){
                $(this).siblings('ul.tudo').stop(true,false).delay(200).slideUp(200);
                $(this).find('.seta').stop(true,false).delay(200).fadeOut('fast')
                $(this).delay(200).css({'background-color':'#fff'})
            }
        );
        $('ul#sidebar li ul.tudo').hover(
            function(){
                $(this).stop(true,false).slideDown(200);
                $(this).siblings('a.select').find('.seta').stop(true,false).fadeIn('fast')
                $(this).siblings('a.select').css({'background-color':'#ebebeb'})
            }, function(){
                $(this).stop(true,false).delay(200).slideUp(200);
                $(this).siblings('a.select').find('.seta').delay(200).fadeOut('fast')
                $(this).siblings('a.select').delay(200).css({'background-color':'#fff'})
            }
        );
    },

    //Comportamento no mouse over do resumo dos alunos
    resumo: function(){
        $('ul#conteudo li').hover(
            function(){
                $(this).find('.info').stop(true,false).delay(150).slideDown(600, 'easeOutQuint');
                $(this).find('h4').css({'color':'#fff', 'border-color': '#232323'});
                $(this).css('background', '#8d1a13');
            }, function(){
                $(this).find('.info').stop(true,false).delay(100).slideUp(600, 'easeOutQuint');
                $(this).find('h4').css({'color':'#6e6e6e', 'border-color': '#6e6e6e'});
                $(this).css('background', '#fff');
            }
        );
       
    }
}    

//DETALHES DO ALUNO
var Aluno ={

    //Abas de navegação
    navegacaoAbas: function(){

        $('#conteudo2, #conteudo3').hide()
 
        $('ul#abas li a').click(function(e){
            e.preventDefault();

            var target = $(this).attr('href')

            $('ul#abas li a').removeClass('active');
            $('#conteudo1, #conteudo2, #conteudo3').fadeOut(300)
            $(this).addClass('active');
            $(target).delay(300).fadeIn('fast');
        })
    }
}

 
//Ao carregar todo o documento...
jQuery(document).ready(function($) {
    Menu.init();
    CarroselDestaques.init();
    ListaAlunos.filtros();
    ListaAlunos.resumo();
    Aluno.navegacaoAbas();
});